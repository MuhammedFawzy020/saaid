<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\RecruitmentTrip;
use Illuminate\Http\Request;

class RecruitmentTripController extends Controller
{
    //
    public function employmentArrival(){
        $recruitmentTrip=RecruitmentTrip::first();
        return view('frontend.pages.recruitmentTrip.employmentArrival',compact('recruitmentTrip'));
    }
    public function recruitmentContract(){
        $recruitmentTrip=RecruitmentTrip::first();
        return view('frontend.pages.recruitmentTrip.recruitmentContract',compact('recruitmentTrip'));

    }
    public function laborSelection(){
        $recruitmentTrip=RecruitmentTrip::first();
        return view('frontend.pages.recruitmentTrip.laborSelection',compact('recruitmentTrip'));

    }
    public function visaIssuance(){
        return view('frontend.pages.recruitmentTrip.visaIssuance');

    }
}
