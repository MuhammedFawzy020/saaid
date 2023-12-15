<?php

namespace App\Http\Controllers\Frontend\Worker;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomWorkerRequest;
use App\Mail\SupportMailManager;
use App\Models\Admin;
use App\Models\AgeRange;
use App\Models\Biography;
use App\Models\City;
use App\Models\Experience;
use App\Models\Job;
use App\Models\LanguageTitle;
use App\Models\Nationalitie;
use App\Models\Order;
use App\Models\Religion;
use App\Models\SocialType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Hash;
use PDF;
class WorkerFrontController extends Controller
{


    


    public function track_order_view(Request $request)
    {
        if($request->has('order_code') && $request->has('phone')) {

            $user = \App\Models\User::where('phone',$request->phone)->first();
            if($user == null ) {
                return view('frontend_v2.pages.track.order');
            }

            $order = Order::where(['order_code'=>$request->order_code,'user_id'=>$user->id])->first();
            if($order == null) {
                return view('frontend_v2.pages.track.order');
            }

            return view('frontend_v2.pages.track.order')->with('order', $order);
        }
        return view('frontend_v2.pages.track.order');
    }

    public function track_order(Request $request)
    {

        if (auth()->check()) {
            $order = Order::where('order_code', $request->code)->where('user_id', auth()->user()->id)->first();
            if (!empty($order)) {
                $admin = Admin::find($order->admin_id);
                if ($request->ajax()) {
                    return response()->json(['order_code' => $order->id], 200);
                }
                return view("frontend.pages.profile.parts.order_detailes", compact('order', 'admin'));
            } else {
                return response()->json([], 403);

//                toastError('ﻻ يمكنك تتبع هذا الطلب', 'حدث خطأ ما');
//                return back();
            }
        } else {
            return response()->json([], 500);

//            toastError('يجب تسجيل الدخول لاستخدام هذة الخدمة', 'حدث خطأ ما');
//            return back();
        }


    }

    public function order_details($id)
    {


        $order = Order::find($id);
        $admin = Admin::find($order->admin_id);

        return view("frontend.pages.profile.parts.order_detailes", compact('order', 'admin'));

    }

    public function show_selected_staff($id)
    {


        $order = Order::find($id);
        $admin = Admin::find($order->admin_id);
        return view("frontend.pages.all-workers.worker.worker_stuff_selected", compact('admin'));

    }

    public function show($id)
    {


        $cv = Biography::with('recruitment_office', 'nationalitie', 'language_title',
            'religion', 'job', 'social_type', 'admin', 'images', 'skills')
            ->where('id', $id)
            ->firstOrFail();
        $admins = \App\Models\Admin::where('admin_type', '!=', 0)->take(12)->get();
        //frontend.pages.all-workers.worker.worker_stuff frontend_v2.pages.workers.worker_stuff
        return view("frontend_v2.pages.workers.worker_stuff", compact('cv', 'admins'));

    }


    public function transport(Request $request, $type = 'transport')
    {

        $cvs = Biography::where('status', 'new')
            ->where('order_type', 'normal')
            ->FilterByAge($request->age)
            ->FilterByJob($request->job)
            ->FilterByReligon($request->religon)->where('type', $type)
            ->FilterByNationality($request->nationality)->where('type', $type)
            ->with('recruitment_office', 'nationalitie', 'language_title',
                'religion', 'job', 'social_type', 'admin', 'images', 'skills')
            ->latest()
            ->paginate(18);
        $current_page = $cvs->currentPage();
        $last_page = $cvs->lastPage();

        if ($request->ajax()) {
            $returnHTML = view('frontend.pages.all-workers.worker.workers_page')
                ->with(['cvs' => $cvs, 'type' => $type])->render();
            return response()->json([
                'success' => true,
                'html' => $returnHTML,
                'current_page' => $current_page,
                'last_page' => $last_page,
                'type' => $type,

            ]);
        }


        $ages = AgeRange::get();
        $jobs = Job::get();
        $nationalities = Nationalitie::get();
        $religon = Religion::get();

        return view('frontend.pages.all-workers.all-workers', [
            'ages' => $ages,
            'jobs' => $jobs,
            'nationalities' => $nationalities,
            'religon' => $religon,
            'cvs' => $cvs,
            'current_page' => $current_page,
            'last_page' => $last_page,
            'type' => $type,
        ]);


    }


    public function showAllWorkers(Request $request, $type = 'admission')
    {

        $cvs = Biography::where('status', 'new')
            ->where('order_type', 'normal')
            ->FilterByAge($request->age)
            ->FilterByJob($request->job)
            ->FilterByNationality($request->nationality)->where('type', $type)
            ->when($request->religion, function($query) use ($request) {
                $query->where('religion_id',$request->religion);
            })
            ->with('recruitment_office', 'nationalitie', 'language_title',
                'religion', 'job', 'social_type', 'admin', 'images', 'skills')
            ->latest()
            ->paginate(18)->appends(request()->query());

        $current_page = $cvs->currentPage();
        $last_page = $cvs->lastPage();

        if ($request->ajax()) {

            $returnHTML = view('frontend.pages.all-workers.worker.workers_page')
                ->with(['cvs' => $cvs, 'type' => $type])->render();
            return response()->json([
                'success' => true,
                'html' => $returnHTML,
                'current_page' => $current_page,
                'last_page' => $last_page,
                'type' => $type,

            ]);
        }

        $ages = AgeRange::get();
        $jobs = Job::get();
        $nationalities = Nationalitie::get();
        $experience = Experience::get();
        $religon = Religion::get();

        return view('frontend_v2.pages.workers.index', [
            'ages' => $ages,
            'jobs' => $jobs,
            'nationalities' => $nationalities,
            'experience' => $experience,
            'religon' => $religon,
            'cvs' => $cvs,
            'current_page' => $current_page,
            'last_page' => $last_page,
            'type' => $type,
        ]);
    }//end fun


    public function worker_details($id , $type="admission"){
        $cv = Biography::with('recruitment_office', 'nationalitie', 'language_title',
        'religion', 'job', 'social_type', 'admin', 'images', 'skills')
        ->where('id', $id)
        ->firstOrFail();

        $admins = \App\Models\Admin::whereHas('roles', function ($q) {
            $q->where('roles.id', 4);
        })->take(10)->get();

          return view('frontend_v2.pages.workers.cv_details')->with([
              'cv' => $cv ,
              'type' => $type ,
              'admins' => $admins,
              
              ]);
    }

    public function downloadPDF($id, $type="admission")
    {
        $cv = Biography::findORFail($id);
        // $admins = \App\Models\Admin::whereHas('roles', function ($q) {
        //     $q->where('roles.id', 4);
        // })->take(10)->get();
        $data = [
               'cv' => $cv ,
              'type' => $type ,
              
        ];
    
        $html = view('frontend_v2.pages.workers.cv_details', $data)->render();    
        $pdf = PDF::loadHTML($html);
    
        return $pdf->download('sample.pdf');

        return view('frontend_v2.pages.workers.cv_details')->with([
            'cv' => $cv ,
            'type' => $type ,
          
            
            ]);
    }

    public function showAllWorrkers_v2() {

    }

    public function completeTheRecruitmentRequest($id, Request $request)
    {


        
        $cv = Biography::findOrFail($id);
        if ($cv->status != 'new') {
            return back()->with('error', 'عفوا هذا العامل/ة تم حجزهم');
        }
        
        // $user = auth()->user();
        
        if($request->name == "" || $request->name == null) {
            return back()->with('error', 'عفوا ، حقل الاسم إلزامي');
        }

        if($request->phone == "" || $request->phone == null || strlen($request->phone) != 9) {
             return back()->with('error', 'عفوا ، هناك خطأ في حقل الهاتف برجاء مراجعة الهاتف يجب ان يكون مكون من 9 ارقام فقط');
        }

        if($request->customer == "" || $request->customer == null) {
            return back()->with('error', 'برجاء اختيار احد ممثلي خدمة العملاء بالضغط علي الاسم و سيتم التحديد');
        }


        $user = User::where('phone', $request->phone)->first();
        if($user == null) {
            $user = new User();
            $user->type = "normal_user";
            $user->phone = $request->phone;
            $user->name = $request->name;
            $user->password = Hash::make(rand(99999999,99999999999));
            $user->phone_activation_code = rand(9999,99999);
            $user->activated_at = Date('Y-m-d h:i:s');
            $user->save();
        }
        

        $order_data = [
            'user_id' => $user->id,
            'status' => "under_work",
            "admin_id" => $request->customer,
//            "admin_id"=>1,
            'order_date' => now()
        ];

        $admin = Admin::find($request->customer);


        Biography::where('id', $id)->update($order_data);
        $order_data['biography_id'] = $cv->id;
        $order_data['order_code'] = "NK" . $cv->id . time();
        $order = Order::create($order_data);
        $order_id = $order->id;

      //  $this->sendSms($user->phone, "  تم ارسال طلبك بنجاح ف انتظار تواصلك مع خدمة العملاء علي رقم الجوال "."0".$admin->phone);

        // $this->sendSms($admin->phone,"تم استقبال طلب استقدام من العميل ".$user->name."برقم جوال".$user->phone);

//        $this->send_support_reply_email_to_user($user, $order);

        return redirect()->route('success-order', $order->order_code);
    }//end fun

    private function sendSms($phone, $msg)
    {
        $phone = '966' . $phone;


        $ch = curl_init(config('msegat.msegat_url'));
        $data = array(
            'userName' => config('msegat.userName'),
            'apiKey' => config('msegat.apiKey'),
            'numbers' => $phone,
            'userSender' => config('msegat.userSender'),
            'msgEncoding' => config('msegat.msgEncoding'),
            'msg' => $msg
        );


        $result = Http::withOptions([
            'verify' => false,
        ])->post(config('msegat.msegat_url'), $data);
        return $result;
    }

    public function RequestCompleted($order_code) {

        $order = Order::where('order_code', $order_code)->first();
        return view('frontend_v2.pages.workers.success', compact('order'));
    }
    public function send_support_reply_email_to_user($user, $order)
    {
        $array['view'] = 'emails.support';
        $array['subject'] = ' يوجد طلب استقدام جديد ' . $order->order_code;
        $array['from'] = env('MAIL_FROM_ADDRESS');
        $array['content'] = " قام المستخدم بطلب استقدام جديد برجاء تصفح الطلب برقم العميل" . $user->phone;
        $array['link'] = route('admin-orders.index');
        $array['sender'] = $user->name;
//        $array['details'] = $tkt_reply->reply;

//        try {
//            Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new SupportMailManager($array));
//        } catch (\Exception $e) {
//            //dd($e->getMessage());
//        }
    }//end fun

    public function show_worker_details($id, $type = 'admission')
    {
        $cv = Biography::with('recruitment_office', 'nationalitie', 'language_title',
            'religion', 'job', 'social_type', 'admin', 'images', 'skills')
            ->where('id', $id)
            ->firstOrFail();

        $admins = \App\Models\Admin::whereHas('roles', function ($q) {
            $q->where('roles.id', 4);
        })->take(10)->get();


        $returnHTML = view("frontend.pages.all-workers.worker.worker_details")
            ->with(['cv' => $cv, 'admins' => $admins, 'type' => $type])
            ->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }

    public function custom_worker_request_view()
    {
        $nationalities = Nationalitie::get();
        $jobs = Job::get();
        $ages = AgeRange::get();
        $social_types = SocialType::get();
        $religions = Religion::get();
        $languages = LanguageTitle::get();
        $cities = City::get();

        return view('frontend.pages.recruitment-request.recruitment-request', [
            'nationalities' => $nationalities,
            'jobs' => $jobs,
            'ages' => $ages,
            'social_types' => $social_types,
            'religions' => $religions,
            'languages' => $languages,
            'cities' => $cities,
        ]);
    }//end fun

    public function makeCustomRecruitmentRequest(CustomWorkerRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'city_id' => $request->city_id,
            'type' => 'employer',
        ]);
        Biography::create([
            'user_id' => $user->id,
            'status' => "under_work",
            'order_type' => "special",
            'visa_number' => $request->visa_number,
            'nationalitie_id' => $request->nationalitie_id,
            'job_id' => $request->job_id,
            'order_of_age_id' => $request->order_of_age_id,
            'social_type_id' => $request->social_type_id,
            'religion_id' => $request->religion_id,
            'language_title_id' => $request->language_title_id,
            'type_of_experience' => $request->type_of_experience,
            'special_requirement' => $request->special_requirement,
            'order_date' => now(),
        ]);


        return response()->json([], 200);
    }

    public function newrecriutment($id, $customer_id)
    {
        $cv = Biography::findOrFail($id);
        if ($cv->status != 'new') {
            return response([], 400);
        }

        $order_data = [
            'user_id' => auth()->user()->id,
            'status' => "under_work",
            "admin_id" => $customer_id,
//            "admin_id"=>1,
            'order_date' => now()
        ];

        Biography::where('id', $id)->update($order_data);
        $order_data['biography_id'] = $cv->id;
        $order_data['order_code'] = "NK" . $cv->id . time();
        Order::create($order_data);
        return redirect()->route('auth.profile');
    }


}//end class
