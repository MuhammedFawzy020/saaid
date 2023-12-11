<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Nationalitie;
use App\Models\OurService;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries=Nationalitie::latest()->take(7)->get();
        return view('frontend_v2.pages.countries',['countries'=>$countries]);
    }//end fun



}
