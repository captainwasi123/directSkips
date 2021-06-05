<?php

use Illuminate\Support\Facades\Route;

/*  
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Web Routes
		
	Route::get('/', 'webController@index');
	Route::get('/about', 'webController@about');
	Route::get('/contact', 'webController@contact');
	Route::get('/faq', 'webController@faq');
	Route::get('/skip-sizes', 'webController@skipSizes');
	Route::get('/thankyou', 'webController@thankyou');

	Route::post('/order/submit', 'webController@orderSubmit');
	Route::post('/payment/stripe', 'webController@stripePayment')->name('stripe.submit');
	
	Route::get('/order/confirmed/{id}', 'webController@orderComfirmed');
	
	Route::get('/email', 'webController@sendMail');
	
	Route::post('/contact/submit', 'webController@enquirySubmit');


    Route::get('/terms-and-conditions', 'webController@terms_and_conditions');

	//Response

		Route::get('/response/postalcode/{val}/{type}', 'responseController@postalcodeCheck');
		Route::get('/response/pricing/{type}/{postal}', 'responseController@pricingCheck');







// Admin Routes

	//Order Management

		Route::get('/admin/orders/orders', 'orderController@orders'); 
		Route::get('/admin/orders/booked', 'orderController@booked');
		Route::get('/admin/orders/delivered', 'orderController@delivered');
		Route::get('/admin/orders/collected', 'orderController@collected');
		Route::get('/admin/orders/archive', 'orderController@archive');
		Route::get('/admin/orders/status/{status}/{id}', 'orderController@changeStatus');
		Route::get('/admin/orders/delete/{id}', 'orderController@deleteOrder');
		
		Route::post('/admin/orders/supplier', 'orderController@addSupplier');
	
	// Authentication

		Route::get('/admin', 'adminController@index');
		Route::get('/admin/login', 'adminController@login');
		Route::get('/admin/logout', 'adminController@logout');

		Route::post('/admin/login', 'adminController@loginAttempt');

	// Settings

		// Counties
			Route::get('/admin/counties', 'adminSettingController@counties');
			Route::get('/admin/counties/delete/{id}', 'adminSettingController@countiesDelete');
			Route::post('/admin/counties/add', 'adminSettingController@countiesAdd');

		//Postal Code
			Route::get('/admin/counties/postalcode/{id}', 'adminSettingController@countiesPostalCode');
			Route::get('/admin/counties/postalcode/delete/{id}', 'adminSettingController@countiesPostalCodeDelete');
			Route::post('/admin/counties/postalcode/add', 'adminSettingController@countiesPostalCodeAdd');

		//Pricing
			Route::get('/admin/counties/pricing/{id}', 'adminSettingController@pricing');
			Route::post('/admin/counties/pricing/add', 'adminSettingController@pricingAdd');

		// Service Type
			Route::get('/admin/settings/type', 'adminSettingController@serviceType');
			Route::get('/admin/settings/type/delete/{id}', 'adminSettingController@serviceTypeDelete');

			Route::post('/admin/settings/type/add', 'adminSettingController@serviceTypeAdd');
		
		// VAT Setup
			Route::get('/admin/settings/VAT', 'adminSettingController@vatSetup');
			Route::post('/admin/settings/VAT/update', 'adminSettingController@vatSetupUpdate');

		// Holidays
			Route::get('/admin/settings/holiday', 'adminSettingController@holiday');
			Route::get('/admin/settings/holiday/delete/{id}', 'adminSettingController@holidayDelete');

			Route::post('/admin/settings/holiday/add', 'adminSettingController@holidayAdd');

		// User Profile
			Route::get('/admin/settings/profile', 'adminSettingController@userProfile');
			Route::post('/admin/settings/profile/update', 'adminSettingController@userProfileUpdate');
