<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;

class OurServciesController extends Controller
{
    public function index()
    {
        $ourServices = OurService::latest()->get();
        return view('frontend_v2.pages.services',['ourServices'=>$ourServices]);
    }//end fun



}
