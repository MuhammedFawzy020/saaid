<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {

    Config::set('auth.defines', 'admin');

    /*==================== Auth System  ==================*/

    Route::get('/', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@login')->name('admin.login.submit');

    /*==================== Admin Panel ==================*/

    Route::group(['middleware' => 'admin:admin'], function () {
        #AdminRecruitmentRequirement

        Route::get('getRecruitmentRequirement','AdminRecruitmentRequirement@index')->name('admin.getRecruitmentRequirement');
        Route::post('updateRecruitmentRequirement/{id}','AdminRecruitmentRequirement@updateRecruitmentRequirement')->name('admin.updateRecruitmentRequirement');


        Route::resource('reviews','AdminReviewsController');


        /*================LogOut===========*/
        Route::get('logout', 'AdminLoginController@logout')->name('admin.logout');


        Route::get('/home', 'AdminController@index')->name('admin.dashboard');
        Route::get('calender', 'AdminController@calender')->name('admin.calender');


        //Profile
        Route::resource('profileControl', 'Profile\AdminProfileController');

        /*================Admin Setting control =========================*/

        Route::resource('settings', 'AdminSettingController');//setting

        Route::get('deleteOrdersByCommand','AdminSettingController@deleteOrdersByCommand')->name('deleteOrdersByCommand');


        /*================Admin Contact us control =========================*/

        Route::resource('contacts', 'AdminContactUsController');

        /*================Admin send firebase control =========================*/

        Route::resource('firebaseNotification', 'AdminFirebaseNotificationController');

        /*================Admin Profile control =========================*/

        Route::resource('profile', 'AdminProfileController');

        /*================Admin Admin control =========================*/
        Route::resource('admins', 'AdminAdminController');
        Route::delete('admins/delete/bulk', 'AdminAdminController@delete_all')->name('admins.delete.bulk');
        /*================Admin Users control =========================*/
        Route::resource('users', 'AdminUserController');
        Route::delete('users/delete/bulk', 'AdminUserController@delete_all')
            ->name('users.delete.bulk');
        Route::get('users/changeBlock/{id}', 'AdminUserController@changeBlock')
            ->name('users.changeBlock');

        Route::get('selectOrderForUser/{id}','AdminUserController@selectOrderForUser')->name('admins.selectOrderForUser');

        Route::get('selectCustomerServiceForCv/{cv_id}/{user_id}','AdminUserController@selectCustomerServiceForCv')->name('admins.selectCustomerServiceForCv');


        Route::get('adminCompleteTheRecruitmentRequest/{cv_id}/{admin_id}/{user_id}','AdminUserController@adminCompleteTheRecruitmentRequest')->name('admin.adminCompleteTheRecruitmentRequest');

#### maps
        Route::get('getMapAddress','AdminSettingController@getMapAddress')->name('setting.getMapAddress');
        Route::post('updateMapAddress','AdminSettingController@updateMapAddress')->name('setting.updateMapAddress');

        ####   LaborDemand

        Route::resource('laborDemands', 'AdminLaborDemandController');
        Route::delete('laborDemands/delete/bulk', 'AdminLaborDemandController@delete_all')
            ->name('laborDemands.delete.bulk');

        /*====================Start CRUD==================*/


        Route::resource('blogs','BlogController');
         Route::delete('blogs/delete/bulk', 'BlogController@delete_all')
         ->name('blog.delete.bulk');

        Route::group(['namespace' => 'CRUD'], function () {




            //البانر
            Route::resource('sliders', 'AdminSlidersController');
            Route::delete('sliders/delete/bulk', 'AdminSlidersController@delete_all')
                ->name('sliders.delete.bulk');

            //خدماتنا
            Route::resource('our-services', 'AdminOurServicesController');
            Route::delete('our-services/delete/bulk', 'AdminOurServicesController@delete_all')
                ->name('our-services.delete.bulk');
            //الاسئلة الشائعة
            Route::resource('frequently-questions', 'AdminFrequentlyQuestionsController');
            Route::delete('frequently-questions/delete/bulk', 'AdminFrequentlyQuestionsController@delete_all')
                ->name('frequently-questions.delete.bulk');

            //الخبرة للسيرة الذاتية
            Route::resource('experiences', 'AdminExperiencesController');
            Route::delete('experiences/delete/bulk', 'AdminExperiencesController@delete_all')
                ->name('experiences.delete.bulk');


            //مسميات الوظائف للسيرة الذاتية
            Route::resource('jobs', 'AdminJobsController');
            Route::delete('jobs/delete/bulk', 'AdminJobsController@delete_all')
                ->name('jobs.delete.bulk');


// اللغات للسيرة الذاتية
            Route::resource('language-titles', 'AdminLanguageTitlesController');
            Route::delete('language-titles/delete/bulk', 'AdminLanguageTitlesController@delete_all')
                ->name('language-titles.delete.bulk');


// اللغات للسيرة الذاتية
            Route::resource('nationalities', 'AdminNationalitiesController');
            Route::delete('nationalities/delete/bulk', 'AdminNationalitiesController@delete_all')
                ->name('nationalities.delete.bulk');


            // مكاتب الاستقدام
            Route::resource('recruitment-offices', 'AdminRecruitmentOfficesController');
            Route::delete('recruitment-offices/delete/bulk', 'AdminRecruitmentOfficesController@delete_all')
                ->name('recruitment-offices.delete.bulk');

            // -------------------------------------
            Route::resource('religions', 'AdminReligionsController');
            Route::delete('religions/delete/bulk', 'AdminReligionsController@delete_all')
                ->name('religions.delete.bulk');

            // -------------------------------------
            Route::resource('skills', 'AdminSkillsController');
            Route::delete('skills/delete/bulk', 'AdminSkillsController@delete_all')
                ->name('skills.delete.bulk');

            // -------------------------------------
            Route::resource('social-types', 'AdminSocialTypesController');
            Route::delete('social-types/delete/bulk', 'AdminSocialTypesController@delete_all')
                ->name('social-types.delete.bulk');

            // -------------------------------------
            Route::resource('cities', 'AdminCitiesController');
            Route::delete('cities/delete/bulk', 'AdminCitiesController@delete_all')
                ->name('cities.delete.bulk');

            // -------------------------------------
            Route::resource('age-ranges', 'AdminAgeRangesController');
            Route::delete('age-ranges/delete/bulk', 'AdminAgeRangesController@delete_all')
                ->name('age-ranges.delete.bulk');

            // -------------------------------------
            Route::resource('sponsors', 'AdminSponsorsController');
            Route::delete('sponsors/delete/bulk', 'AdminSponsorsController@delete_all')
                ->name('sponsors.delete.bulk');

            // -------------------------------------
            Route::resource('statistics', 'AdminStatisticsController');
            Route::delete('statistics/delete/bulk', 'AdminStatisticsController@delete_all')
                ->name('statistics.delete.bulk');

            // -------------------------------------
            //Route::resource('biographies/{value?}', 'AdminBiographiesController');
            Route::get('/biographies/create/{value?}', 'AdminBiographiesController@create')->name('biographies.create');
            Route::get('/biographies/index/{value?}', 'AdminBiographiesController@index')->name('biographies.index');
            Route::get('/biographies/edit/{id}/{value?}', 'AdminBiographiesController@edit')->name('biographies.edit');
            Route::put('/biographies/update/{id}/{value?}', 'AdminBiographiesController@update')->name('biographies.update');
            Route::post('/biographies/store/{value?}', 'AdminBiographiesController@store')->name('biographies.store');
            Route::delete('/biographies/delete/{id}/{value?}', 'AdminBiographiesController@destroy')->name('biographies.destroy');



            Route::delete('biographies/delete/bulk', 'AdminBiographiesController@delete_all')
                ->name('biographies.delete.bulk');

            // -------------------------------------
            Route::resource('biographies-special', 'AdminBiographiesSpecialController');
            Route::delete('biographies-special/delete/bulk', 'AdminBiographiesSpecialController@delete_all')
                ->name('biographies-special.delete.bulk');

            // -------------------------------------
          //  Route::resource('admin-orders', 'AdminOrderController');

            Route::get('/admin-orders/{value?}','AdminOrderController@index')->name('admin-orders.index');
            Route::delete('/admin-orders/destroy/{id}','AdminOrderController@destroy')->name('admin-orders.destroy');
            Route::put('/admin-orders/update/{id}/{value?}','AdminOrderController@update')->name('admin-orders.update');
            
            Route::delete('admin-orders/delete/bulk', 'AdminOrderController@delete_all')
                ->name('admin-orders.delete.bulk');


            Route::resource('roles', 'AdminRoleController');



            //countries prices route fawzy 21-11-2023
            Route::get('/country-index' ,'CountryPricesController@index')->name('country-index');
            Route::get('/country-create' ,'CountryPricesController@create')->name('country-create');
            Route::post('/country-store' ,'CountryPricesController@store')->name('country-store');
            Route::get('/country-edit/{id}' ,'CountryPricesController@edit')->name('country-edit');
            Route::post('/country-update' ,'CountryPricesController@update')->name('country-update');
            Route::delete('/country-delete/{id}' ,'CountryPricesController@delete')->name('country-delete');



            Route::get('/country-price/{countryy_id}/{religon_id}/{value?}','CountryPricesController@get_price')->name('get_price');

        });


        /*====================End Admin Panel==================*/


    });//end middleware admin


});
