<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\Upload_Files;
use App\Http\Controllers\Controller;
use App\Models\Biography;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class AdminUserController extends Controller
{

    use Upload_Files,CheckPermission;


    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (!\checkPermission(22))
            return view('admin.permission');


        if ($request->ajax()) {
            $users = User::normalUser()->orderBy('id',"DESC")->get();


            return DataTables::of($users)
                ->editColumn('logo', function ($user) {
                    return ' <img src="'.get_file($user->logo).'" class=" rounded" style="height:50px;width:50px"
                             onclick="window.open(this.src)">';
                })
                ->editColumn('created_at', function ($user) {
                    return date('Y/m/d',strtotime($user->created_at));
                })

                ->editColumn('is_blocked', function ($user) {
                    $re_block = '';
                    if ($user->is_blocked == 'not_blocked') {
                        $re_block = '<span class=" badge bg-primary">'.trans('admin.active').'</span>';
                    }else{
                        $re_block = '<span class="badge bg-danger">'.trans('admin.not_active').'</span>';

                    }
                    return $re_block;
                })
                ->editColumn('created_at', function ($user) {
                    return date('Y/m/d',strtotime($user->created_at));
                })

                ->addColumn('delete_all', function ($row) {
                    return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all' id='" . $row->id . "'>";
                })
                ->editColumn('Recruitment request', function ($user) {
                    $request='';
                    if (!\checkPermission(24))
                        $request='hidden';
                    $url=route('admins.selectOrderForUser',$user->id);
                    return '<a ' .$request. ' href="'.$url.'" class="btn btn-success ">طلب استقدام</a>';
                })
                ->addColumn('actions', function ($user) {
                    $block='';
                    $delete='';
                    $url=route('users.edit',$user->id);
                    $edit = '';
                    if(!\checkPermission(25))
                        $block='hidden';
                    if(!\checkPermission(26))
                        $delete='hidden';

                    return "<a ".$edit."  href='".$url."' class='btn btn-info ' id='" . $user->id . "'><i class='fa fa-edit'></i></a> <button $block title='يمكنك التنشيط أو  الغاء التنشيط من هنا'  class='btn btn-info status' id='" . $user->id . "'> <span class='fa fa-user-clock'></span></button>
                   <button $delete class='btn btn-danger  delete' id='" . $user->id . "'><span class='fa fa-trash'></span> </button>";
                })->rawColumns(['actions','logo','delete_all','is_blocked','Recruitment request'])->make(true);
        }
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.users.parts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator=\Validator::make($request->all(),
            [
                'phone'=>'required|unique:users,phone',
                'name'=>'required',
                'email'=>'nullable|unique:users,email',
                'password'=>'required',
                'city_id'=>'required',
                'logo'=>'nullable|mimes:jpeg,jpg,png,gif,svg',
            ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'errors','errors'=>$validator->errors()]);
        }


        $regex = "/^(05)[0-9]{8}$|^(5)[0-9]{8}$/";
        if (!preg_match($regex, $request->phone)) {


            return response()->json(['status'=>'notmatch','errors'=>$validator->errors()]);



        }

        if($request->logo){
            $data ['logo'] = $this->uploadFiles('users', $request->file('logo'), null);

        }
        $data['password'] = $request->password;
        $data['phone']=$request->phone;
        $data['city_id']=$request->city_id;

        $data['name']=$request->name;
        $data['email']=$request->email;

        $number=$data['phone'];
        $numlength = strlen((string)$number);

        if($numlength==10) {
            $number = substr($number, 1);
        }

        $data['phone']=$number;

        User::create($data);

        return response()->json(['status'=>true]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::findOrFail($id);
        $edituser=User::get();
        return view('admin.users.parts.update',compact('edituser','users'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator=\Validator::make($request->all(),
            [
                'name'=>'required|max:120|min:3',

            ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'errors','errors'=>$validator->errors()]);
        }
        $users = User::findOrFail($id);
        $users->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => $request->password,
            'city_id' => $request->city_id,

        ]);
        //User::where('id', $users->id)->delete();

        if ($request->users) {
            for ($i = 0; $i < count($request->users); $i++) {
                User::updateOrCreate([
                    'id' => $users->id,
                    'password' => $users->password,
                    'phone'=> $users->phone,
                    'city_id'=> $users->city_id,
                    'name'=> $users->name,
                    'email'=> $users->email,
                    'phone'=> $users->phone
                ]);
            }
        }

        return response()->json(['status' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(User::destroy($id),200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete_all(Request $request)
    {

        User::destroy($request->id);
        return response()->json(1,200);
    }


    public function changeBlock($id)
    {
        $row = User::findOrFail($id);
        $status = $row->is_blocked == 'blocked'?'not_blocked':'blocked';
        $row->update(['is_blocked' => $status]);
        return response()->json(1,200);
    }

    public function selectOrderForUser($id){
        if (!\checkPermission(24))
            return view('admin.permission');
        $user=User::findOrFail($id);
        $cvs = Biography::where('status', 'new')
            ->where('order_type', 'normal')
            ->with('recruitment_office', 'nationalitie', 'language_title',
                'religion', 'job', 'social_type', 'admin', 'images', 'skills')
            ->latest()
            ->get();
        return view('admin.users.parts.recruitmentRequest',compact('cvs','user'));

    }
    public function selectCustomerServiceForCv($cv_id,$user_id){

        $user=User::findOrFail($user_id);
        $cv = Biography::with('recruitment_office','nationalitie','language_title',
            'religion','job','social_type','admin','images','skills')
            ->where('id',$cv_id)
            ->firstOrFail();
        $admins = \App\Models\Admin::where('admin_type','!=',0)->take(12)->get();
        return view('admin.users.parts.customerService',compact('cv','user','admins'));

    }

    public function adminCompleteTheRecruitmentRequest($cv_id,$admin_id,$user_id){
        $cv = Biography::findOrFail($cv_id);
        if ($cv->status != 'new') {
            return response([],400);
        }



        $order_data = [
            'status'=>"under_work",
            "admin_id"=>$admin_id,
            'order_date'=>now()
        ];
        Biography::where('id',$cv_id)->update($order_data);
        $order_data['biography_id']= $cv->id;
        $order_data['order_code']= "NK".$cv->id.time();
        Order::create($order_data);
        return response([],200);

    }



}//end
