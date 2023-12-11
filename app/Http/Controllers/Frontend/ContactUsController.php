<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\OurService;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        return view('frontend_v2.pages.contactUs',['setting'=>$setting]);
    }//end fun


    public function contact_us_action(Request $request)
    {
        $data = $request->validate([
            'name'=>'nullable',
            'subject'=>'required',
            'phone'=>'required',
            'message'=>'nullable',
        ]);
        Contact::create($data);
        return response()->json([],200);
    }//end fu
}
