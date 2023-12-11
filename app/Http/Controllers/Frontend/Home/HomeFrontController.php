<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Biography;
use App\Models\Contact;
use App\Models\FrequentlyQuestion;
use App\Models\Nationalitie;
use App\Models\OurService;
use App\Models\RecruitmentRequirement;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Job;
use App\Models\AgeRange;

class HomeFrontController extends Controller
{

    public function index()
    {
        //$sliders = Slider::latest()->take(4)->get();
        $ourServices = OurService::latest()->take(5)->get();
        $statistics = Statistic::latest()->take(4)->get();
        $sponsors = Sponsor::latest()->take(5)->get();
        $questions = FrequentlyQuestion::take(5)->get();
        $requirements=RecruitmentRequirement::get();
        $countries=Nationalitie::latest()->take(7)->get();
        $reviews=Review::latest()->get();
        $blogs = Blog::latest()->take(8)->get();
        $cvs = Biography::where('status','new')
            ->where('order_type','normal')
            ->with('recruitment_office','nationalitie','language_title',
            'religion','job','social_type','admin','images','skills')
            ->take(5)->get();
        $setting=Setting::first();

        $customerServies = $customerServies = \App\Models\Admin::whereHas('roles', function($query) {
        $query->where('role_id', 4);
        })->get();

        $ages = AgeRange::get();
        $jobs = Job::get();
        $nationalities = Nationalitie::get();
        //frontend.pages.home.home
        
        return view('frontend_v2.pages.home.index',[
            //'sliders'=>$sliders,
            'ourServices'=>$ourServices,
            'statistics'=>$statistics,
            'sponsors'=>$sponsors,
            'questions'=>$questions,
            'countries'=>$countries,
            'cvs'=>$cvs,
            'reviews'=>$reviews,
            'setting'=>$setting,
            'requirements'=>$requirements,
            'blogs' => $blogs,
            'customerServices' => $customerServies,
            'ages' => $ages,
            'jobs' => $jobs,
            'nationalities' => $nationalities,
        ]);
    }//end fun

    

    public function view_blog($id) {
        return view('frontend_v2.pages.blog')->with([ 'blog' => Blog::findOrFail($id)]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * Save Contact us
     *
     */
    public function contact_us_action(Request $request)
    {

        $data = $request->validate([
            'name'=>'nullable',
            'subject'=>'required',
            'phone'=>'required',
            'message'=>'nullable',
        ]);
        Contact::create($data);
        return back()->with('success','تم استلام رسالتك بنجاح');
    }//end fun


}//end class
