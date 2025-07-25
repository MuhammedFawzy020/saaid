<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Biography;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\RecruitmentOffice;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function __construct()
    {

    }


    public function index(Request $request)
    {

        if (!checkPermission(1))
            return view('admin.permission');




        $year = date('Y');




        $janDay = date('Y-m-t', strtotime(date('Y-') . '01-01'));
        $janDate = ["$year-01-01", $janDay];


        $febDay = date('Y-m-t', strtotime(date('Y-') . '02-01'));
        $febDate = ["$year-02-01", $febDay];

        $marDay = date('Y-m-t', strtotime(date('Y-') . '03-01'));
        $marDate = ["$year-03-01", $marDay];

        $abrDay = date('Y-m-t', strtotime(date('Y-') . '04-01'));
        $abrDate = ["$year-04-01", $abrDay];

        $mayDay = date('Y-m-t', strtotime(date('Y-') . '05-01'));
        $mayDate = ["$year-05-01", $marDay];

        $julDay = date('Y-m-t', strtotime(date('Y-') . '06-01'));
        $julDate = ["$year-06-01", $julDay];

        $junDay = date('Y-m-t', strtotime(date('Y-') . '07-01'));
        $junDate = ["$year-07-01", $junDay];

        $augDay = date('Y-m-t', strtotime(date('Y-') . '08-01'));
        $augDate = ["$year-08-01", $augDay];

        $sepDay = date('Y-m-t', strtotime(date('Y-') . '09-01'));
        $sepDate = ["$year-09-01", $sepDay];

        $octDay = date('Y-m-t', strtotime(date('Y-') . '10-01'));
        $octDate = ["$year-10-01", $octDay];

        $novDay = date('Y-m-t', strtotime(date('Y-') . '11-01'));
        $novDate = ["$year-11-01", $novDay];

        $desDay = date('Y-m-t', strtotime(date('Y-') . '12-01'));
        $desDate = ["$year-12-01", $desDay];

        $filterYear=["$year-01-01",$desDay];
        $all_order_count=Order::whereBetween('created_at',$filterYear)->count();

        $admins = Admin::count();
        $biography = Biography::type("normal")->count();
        $biographySpecial = Biography::type("special")->count();
        $biographyFinished = Biography::type("normal")->status("finished")->count();
        $orders = Order::count();
        if($orders==0){
            $orders=1;
        }
      
        
       


        $fromDate = date('Y-m',strtotime(' 0 month'.date('Y-m-d'))).'-1';
        $toDate = date('Y-m-t',strtotime(' 0 month'.date('Y-m-d')));
        $betweenMonth=[$fromDate,$toDate];


        $filterMonth=Order::whereBetween('created_at',$betweenMonth)->count();


        $newOrder=Order::where('status','new')->whereBetween('created_at',$betweenMonth)->count();
     
        $underWork=Order::Where('status','under_work')->count(); // ma7goza
        $Contracted=Order::Where('status','contract')->count(); // moktmla b etmam l t3aqod
        $cancelOrder=Order::where('status','canceled')->count();  //tlbat mal8ya

        $underWorkCurrent=Order::Where('status','under_work')->whereBetween('created_at',$betweenMonth)->count(); // ma7goza
        $ContractedCurrent=Order::Where('status','contract')->whereBetween('created_at',$betweenMonth)->count(); // moktmla b etmam l t3aqod
        $cancelOrderCurrent=Order::where('status','canceled')->whereBetween('created_at',$betweenMonth)->count();  //tlbat mal8ya


        $finishedOrder=Order::where('status','finished')->whereBetween('created_at',$betweenMonth)->count();

        $percentage=($Contracted/$orders??1)*100;


        $users = User::count(); // User::where("type","normal_user")->count();
        $employer = User::where("type", "employer")->whereBetween('created_at',$betweenMonth)->count();

//        if ($request->ajax()) {

            $newAdmins = Admin::whereHas("orders")->orderBy("id", "DESC")->get();
//            return DataTables::of($admins)
//                ->editColumn('image', function ($row) {
//                    return ' <img src="' . get_file($row->image) . '" class="rounded" style="height:60px;width:60px;"
//                             onclick="window.open(this.src)">';
//                })
//                ->editColumn('count', function ($row) {
//                    return count($row->orders);
//                })
//                ->editColumn('created_at', function ($row) {
//                    return date('Y/m/d', strtotime($row->created_at));
//                })
//
//
//               ->rawColumns([ 'image'])->make(true);
//        }

  $offices=RecruitmentOffice::with('cvs')->get();


        return view('admin.home.dashboard', [
            'admins' => $admins,
            'users' => $users,
            'biography' => $biography,
            'biographySpecial' => $biographySpecial,
            'biographyFinished' => $biographyFinished,
            'orders' => $orders,
            'employer' => $employer,
            'jan' => $janDate,
            'feb' => $febDate,
            'mar' => $marDate,
            'abr' => $abrDate,
            'may' => $mayDate,
            'jul' => $julDate,
            'jun' => $junDate,
            'aug' => $augDate,
            'sep' => $sepDate,
            'oct' => $octDate,
            'nov' => $novDate,
            'des' => $desDate,
            'underWorkCurrent' => $underWorkCurrent ,
            'ContractedCurrent' =>  $ContractedCurrent ,
            'cancelOrderCurrent' => $cancelOrderCurrent ,
            'percentage'    => $percentage,
            'newOrder'=>$newOrder,
            'cancelOrder'=>$cancelOrder,
            'finishedOrder'=>$finishedOrder,
            'Contracted' => $Contracted,
            'filterMonth'  =>$filterMonth ,
            'underWork'   =>$underWork,
            'newAdmins'  =>$newAdmins,
            'offices'    =>$offices,
        ]);
    }//end fun


    public function calender(Request $request)
    {
        $arrResult =[];
        $orders = Order::get();
        //get count of orders by days
        foreach ($orders as $row) {
            $date = date('Y-m-d', strtotime($row->created_at));
            if (isset($arrResult[$date])) {
                $arrResult[$date]["counter"] += 1;
                $arrResult[$date]["id"][]  = $row->id;
            } else {
                $arrResult[$date]["counter"] = 1;
                $arrResult[$date]["id"][]  = $row->id;

            }
        }
      //  dd($arrResult);
        //make format of calender
        $Events = [];
        if (count($arrResult)>0) {
            $i = 0;
            foreach ($arrResult as $item => $value) {
                $title= $value['counter'];
                $Events[$i] = array(
                    'id' => $i,
                    'title' => $title,
                    'start' => $item,
                    'ids' => $value['id'],
                );
                $i++;
            }
        }
        //return to calender
        return $Events ;
    }//end fun


//    public function getCompaniesDetails(Request $request)
//    {
//        $ids = explode(',',$request->ids);
//        $companies = User::whereIn('id',$ids)->get();
//        return redirect()->route('companies.index')->with([
//            'ids'=>$ids
//        ]);
//    }//end fun




public function analysis()
{
    $statuses = ['under_work', 'contract',  'musaned', 'traning', 'visa', 'finished', 'canceled'];

    $today = Carbon::today();
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();
    $startOfMonth = Carbon::now()->startOfMonth();
    $endOfMonth = Carbon::now()->endOfMonth();

    $analysis = [];

    foreach ($statuses as $status) {
        $analysis[$status] = [
            'today' => Order::where('status', $status)
                ->whereDate('created_at', $today)
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', false);
                })
                ->count(),

            'week' => Order::where('status', $status)
                ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', false);
                })
                ->count(),

            'month' => Order::where('status', $status)
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', false);
                })
                ->count(),

            'total' => Order::where('status', $status)
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', false);
                })
                ->count(),
        ];
    }


    return view('admin.home.analysis', compact('analysis'));
}

public function analysis_for_rent()
{
    $statuses = ['under_work', 'contract',  'musaned', 'traning', 'visa', 'finished', 'canceled'];

    $today = Carbon::today();
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();
    $startOfMonth = Carbon::now()->startOfMonth();
    $endOfMonth = Carbon::now()->endOfMonth();

    $analysis = [];

    foreach ($statuses as $status) {
        $analysis[$status] = [
            'today' => Order::where('status', $status)
                ->whereDate('created_at', $today)
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', true);
                })
                ->count(),

            'week' => Order::where('status', $status)
                ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', true);
                })
                ->count(),

            'month' => Order::where('status', $status)
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', true);
                })
                ->count(),

            'total' => Order::where('status', $status)
                ->whereHas('biography', function ($query) {
                    $query->where('is_rental', true);
                })
                ->count(),
        ];
    }


    return view('admin.home.analysis_for_rent', compact('analysis'));
}




}//end
