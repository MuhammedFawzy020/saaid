<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\RecruitmentRequirement;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminRecruitmentRequirement extends Controller
{
    //
    public function index(){
        if (!checkPermission(36))
            return view('admin.permission');

        $row1=RecruitmentRequirement::where('id',1)->first();
        $row2=RecruitmentRequirement::where('id',2)->first();

        $settings = Setting::firstOrNew();



        return view('admin.recruitmentRequirement.index',[
            'settings' => $settings,
            'languages' => Language::where('is_active', 'active')->get(),
            'row1'=>$row1,
            'row2'=>$row2,
        ]);
    }

    public function updateRecruitmentRequirement(Request $request,$id){

        $row=RecruitmentRequirement::findORFail($id);

        $title = $step_1 = $qutstanding_customer_service=$step_2 =$step_3=$step_4 = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $title[$language->title] = $request->title[$index];
            $step_1[$language->title] = $request->copy_of_the_national_IDor_residence_for_residents[$index];
            $qutstanding_customer_service[$language->title] = $request->qutstanding_customer_service[$index];
            $step_2[$language->title] = $request->salary_definition_from_the_employer_or_bank_statement[$index];
            $step_3[$language->title] = $request->original_visa[$index];
            $step_4[$language->title] = $request->signing_recruitment_contract[$index];

        }

        $row->update(
            [
                'title'=>$title,
                'step_1'=>$step_1,
                'step_2'=>$qutstanding_customer_service,
                'step_3'=>$step_2,
                'step_4'=>$step_3,
                'step_5'=>$step_4,

            ]
        );
        $settings = Setting::first();
        return response()->json(['settings' => $settings, 'logo' => get_file($settings->header_logo)], 200);






    }


}
