<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrequentlyQuestion;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function index(){
        $questions = FrequentlyQuestion::get();
        return view('frontend.pages.faq.index',compact('questions'));


    }

}
