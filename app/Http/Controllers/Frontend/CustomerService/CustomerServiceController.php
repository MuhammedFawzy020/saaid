<?php

namespace App\Http\Controllers\Frontend\CustomerService;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\AgeRange;
use App\Models\Biography;
use App\Models\Job;
use App\Models\Nationalitie;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    //
    public function selectCustomerServiceForWorker(Request $request,  $id){

        $worker=Biography::findOrFail($id);
        $cvs = Biography::where('status','new')
            ->where('order_type','normal')
            ->FilterByAge($request->age)
            ->FilterByJob($request->job)
            ->FilterByNationality($request->nationality)
            ->with('recruitment_office','nationalitie','language_title',
                'religion','job','social_type','admin','images','skills')
            ->latest()
            ->paginate(12);
        $current_page = $cvs->currentPage() ;
        $last_page =  $cvs->lastPage();



        $ages = AgeRange::get();
        $jobs = Job::get();
        $nationalities = Nationalitie::get();

        return view('frontend.pages.all-workers.all-workers',[
            'ages'=>$ages,
            'jobs'=>$jobs,
            'nationalities'=>$nationalities,
            'cvs'=>$cvs,
            'current_page' => $current_page,
            'last_page' => $last_page,
            'component'=> $worker->id,
        ]);
    }
}
