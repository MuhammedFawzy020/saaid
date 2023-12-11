<?php



Route::match(['get', 'post'], '/botman', 'BotManController@handle');




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('changeLangFront',function (\Illuminate\Http\Request $request){
        $lang = $request->lang;
        $url = $request->url;
        app()->setLocale($lang);
        session()->put('locale', $lang);
        \LaravelLocalization::setLocale($lang);
        $url = \LaravelLocalization::getLocalizedURL(app()->getLocale(), \URL::previous());

        return redirect($url);
    })->name('changeLangFront');


    // Route::get('elsdodey',function (){

    //     $user = \App\Models\User::find(1);
    //     \Illuminate\Support\Facades\Auth::login($user);
    //     return 1;
    // });



    Route::get('/',[\App\Http\Controllers\Frontend\Home\HomeFrontController::class,'index'])->name('home');
    
    // Route::get('/',function () {
    //     return view('');
    // });

    Route::post('contact-us',[\App\Http\Controllers\Frontend\Home\HomeFrontController::class,'contact_us_action'])->name('front.contact_us_action');


    Route::get('/blog/{id}',[\App\Http\Controllers\Frontend\Home\HomeFrontController::class,'view_blog'])->name('view-blog');


    Route::get('register/{id?}/{customer_id?}',[\App\Http\Controllers\Frontend\Auth\RegisterFrontController::class,'register_view'])->name('register');
    Route::post('checkPhoneToSendOtp',[\App\Http\Controllers\Frontend\Auth\RegisterFrontController::class,'check_phone_to_send_otp'])->name('checkPhoneToSendOtp');
    Route::post('registerAction',[\App\Http\Controllers\Frontend\Auth\RegisterFrontController::class,'register_action'])->name('register_action');

    Route::get('login/{id?}',[\App\Http\Controllers\Frontend\Auth\LoginFrontController::class,'login_view'])
        ->name('auth.login');

    Route::post('loginAction',[\App\Http\Controllers\Frontend\Auth\LoginFrontController::class,'login_action'])
        ->name('auth.login_action');



    Route::get('forget-password',[\App\Http\Controllers\Frontend\Auth\ForgetPasswordFrontController::class,'forget_password_view'])->name('auth.forget_password_view');
    Route::post('forget-password-action',[\App\Http\Controllers\Frontend\Auth\ForgetPasswordFrontController::class,'forget_password_action'])->name('auth.forget_password_action');
    Route::get('forget-email-sent-successfully',[\App\Http\Controllers\Frontend\Auth\ForgetPasswordFrontController::class,'forget_password_email_successfully_sent'])->name('auth.forget-email-sent-successfully');

    Route::get('reset-password',[\App\Http\Controllers\Frontend\Auth\ResetPasswordFrontController::class,'reset_password_view'])->name('auth.reset_password_view');
    Route::post('reset-password-action',[\App\Http\Controllers\Frontend\Auth\ResetPasswordFrontController::class,'reset_password_action'])->name('auth.reset_password_action');


    Route::get('track-order',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'track_order_view'])->name('track_order_view');
    Route::post('post-track-order',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'track_order'])->name('track_order');


    ### Faq  #####

    Route::get('faq',[\App\Http\Controllers\Frontend\FaqController::class,'index'])->name('frontend.show.faq');

    ### Services  #####

    Route::get('services',[\App\Http\Controllers\Frontend\OurServciesController::class,'index'])->name('frontend.show.services');

    ### ContactUs  #####

    Route::get('contact-us',[\App\Http\Controllers\Frontend\ContactUsController::class,'index'])->name('frontend.show.contactUs');


    ### Services  #####

    Route::get('countries',[\App\Http\Controllers\Frontend\CountriesController::class,'index'])->name('frontend.show.countries');


    Route::post('completeTheRecruitmentRequest/{id}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'completeTheRecruitmentRequest'])->name('front.crp');

    Route::get('/success-order/{order_code}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'RequestCompleted'])->name('success-order');
    #Employment Arrival

    Route::get('employmentArrival',[\App\Http\Controllers\Frontend\RecruitmentTripController::class,'employmentArrival'])->name('frontend.employmentArrival');

    ###  recruitment contract

    Route::get('recruitmentContract',[\App\Http\Controllers\Frontend\RecruitmentTripController::class,'recruitmentContract'])->name('frontend.recruitmentContract');

    ### laborSelection

    Route::get('laborSelection',[\App\Http\Controllers\Frontend\RecruitmentTripController::class,'laborSelection'])->name('frontend.laborSelection');

    ###Visa issuance

    Route::get('visaIssuance',[\App\Http\Controllers\Frontend\RecruitmentTripController::class,'visaIssuance'])->name('frontend.visaIssuance');


    Route::get('all-workers/{type?}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'showAllWorkers'])->name('all-workers');
    Route::get('/worker-details/{id}' ,'\App\Http\Controllers\Frontend\Worker\WorkerFrontController@worker_details')->name('worker-details');
    Route::get('/pdf-download/{id}' ,'\App\Http\Controllers\Frontend\Worker\WorkerFrontController@downloadPDF')->name('downloadPDF');
    Route::get('worker/{id}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'show'])->name('frontend.show.worker');
    Route::get('show_selected_staff/{rev_id}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'show_selected_staff'])->name('frontend.show.selected_staff');
    Route::get('order_details/{order_id}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'order_details'])->name('frontend.show.order_details');

    Route::get('all-workers-transport/{type?}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'transport'])->name('all-workers-transport');


    Route::get('custom-worker-request',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'custom_worker_request_view'])
        ->name('custom-worker-request');

    Route::post('makeCustomRecruitmentRequest',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'makeCustomRecruitmentRequest'])
        ->name('makeCustomRecruitmentRequest');


    Route::get('newrecriutment/{id}/{customer_id}',[\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'newrecriutment'])->name('newrecriutment');




    //profile
    Route::get('profile',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'profile_view'])->name('auth.profile');

    //profile current orders
    Route::get('profileCurrentOrders',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'get_profile_current_orders'])
        ->name('profile.CurrentOrders');
    Route::get('loadMoreCurrentOrders', [\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'loadMoreCurrentOrders'])->name('front.loadMoreCurrentOrders');


    //profile orders history
    Route::get('profileOrdersHistory',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'get_profile_orders_history'])
        ->name('profile.OrdersHistory');
    Route::get('loadMoreOrdersHistory', [\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'loadMoreOrdersHistory'])->name('front.loadMoreOrdersHistory');

    Route::get('dailyLaborDemand',[\App\Http\Controllers\Frontend\DailyLaborDemandController::class,'dailyLaborDemand'])->name('frontend.dailyLaborDemand');


    Route::post('dailyLaborDemand/store',[\App\Http\Controllers\Frontend\DailyLaborDemandController::class,'store'])->name('frontend.dailyLaborDemand.store');



    //profile notification
    Route::get('profileNotifications',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'get_profile_Notifications'])->name('profile.Notifications');
    Route::get('loadMoreNotifications',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'loadMoreNotifications'])->name('profile.loadMoreNotifications');

    //profile editing
    Route::get('profileEditing',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'get_edit_Profile_form'])->name('profile.editProfile');

    Route::post('changeBasicDataOFProfile',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'changeBasicDataOFProfile'])->name('profile.changeBasicDataOFProfile');
    Route::post('changePasswordOFProfile',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'changePasswordOFProfile'])->name('profile.changePasswordOFProfile');

    Route::post('checkPhoneToSendOtpInProfile',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'check_phone_to_send_otp'])->name('checkPhoneToSendOtpTOChangePhone');
    Route::post('changePhoneInProfile',[\App\Http\Controllers\Frontend\Profile\ProfileFrontController::class,'save_new_phone'])->name('ChangePhoneProfile');


    // SELECT CUSTOMER SERVICES

   Route::get('selectCustomerServiceForWorker/{id?}',[\App\Http\Controllers\Frontend\CustomerService\CustomerServiceController::class,'selectCustomerServiceForWorker'])->name('selectCustomerServiceForWorker');





    Route::get('show-worker-details/{id}/{type?}', [\App\Http\Controllers\Frontend\Worker\WorkerFrontController::class,'show_worker_details'])
        ->name('front.show-worker-details');


    Route::get('logout', function () {
        auth()->logout();
        return redirect()->route('home');
    })->name('auth.logout');
});
