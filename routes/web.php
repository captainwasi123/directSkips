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

	//New Index
	Route::post('/get', 'responseController@get_postcode')->name('get.postalcode');
	Route::get('/book_now', 'responseController@book_now')->name('book_now');

	Route::prefix('book')->group(function(){

		Route::get('step_1', 'responseController@step_1');
		Route::get('step_2/{postcode}/{service_type}', 'responseController@step_2');
		Route::get('step_3', 'responseController@step_3');
		Route::post('step_4', 'responseController@step_4');
	});




// Admin Routes

	Route::prefix('admin')->group(function(){
	// Authentication

		Route::get('/', 'adminController@index');
		Route::get('login', 'adminController@login');
		Route::get('logout', 'adminController@logout');

		Route::post('login', 'adminController@loginAttempt');

	//Order Management

		Route::prefix('orders')->group(function(){
			Route::get('orders', 'orderController@orders'); 
			Route::get('booked', 'orderController@booked');
			Route::get('delivered', 'orderController@delivered');
			Route::get('collected', 'orderController@collected');
			Route::get('archive', 'orderController@archive');
			Route::get('status/{status}/{id}', 'orderController@changeStatus');
			Route::get('delete/{id}', 'orderController@deleteOrder');
			
			Route::post('supplier', 'orderController@addSupplier');
		});

	// Settings

		// Counties
			Route::prefix('counties')->group(function(){

				Route::get('/', 'adminSettingController@counties');
				Route::get('delete/{id}', 'adminSettingController@countiesDelete');
				Route::post('add', 'adminSettingController@countiesAdd');
				
				//Postal Code
					Route::prefix('postalcode')->group(function(){
						Route::get('/{id}', 'adminSettingController@countiesPostalCode');
						Route::get('delete/{id}', 'adminSettingController@countiesPostalCodeDelete');
						Route::post('add', 'adminSettingController@countiesPostalCodeAdd');
					});

				//Pricing
					Route::prefix('pricing')->group(function(){
						Route::get('/{id}', 'adminSettingController@pricing');
						Route::post('add', 'adminSettingController@pricingAdd');
					});
			});

			Route::prefix('settings')->group(function(){

				// Service Type
					Route::get('type', 'adminSettingController@serviceType');
					Route::get('type/delete/{id}', 'adminSettingController@serviceTypeDelete');

					Route::post('type/add', 'adminSettingController@serviceTypeAdd');
				
				// VAT Setup
					Route::get('VAT', 'adminSettingController@vatSetup');
					Route::post('VAT/update', 'adminSettingController@vatSetupUpdate');

				// Holidays
					Route::get('holiday', 'adminSettingController@holiday');
					Route::get('holiday/delete/{id}', 'adminSettingController@holidayDelete');

					Route::post('holiday/add', 'adminSettingController@holidayAdd');

				// User Profile
					Route::get('profile', 'adminSettingController@userProfile');
					Route::post('profile/update', 'adminSettingController@userProfileUpdate');
			});
	});