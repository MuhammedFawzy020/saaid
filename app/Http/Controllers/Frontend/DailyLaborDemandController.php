<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DailyLabordemand;
use Illuminate\Http\Request;

class DailyLaborDemandController extends Controller
{
    //
    public function dailyLaborDemand(){
        return view('frontend.pages.dailyLaborDemand.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'facility_name'=>'required',
            'record_number'=>'required',
            'address'=>'required',
            'contact_number'=>'required',
            'number_worker'=>'required',
            'visa_number'=>'required',
            'other_requirements'=>'required',
            'job_id'=>'required',

        ]);
        DailyLabordemand::create($data);
        return response()->json([],200);
    }
}
