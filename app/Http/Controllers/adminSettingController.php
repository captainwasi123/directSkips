<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\counties;
use App\Models\postalCode;
use App\Models\serviceType;
use App\Models\vatSetup;
use App\Models\vatHistory;
use App\Models\pricing;
use App\Models\holiday;
use Hash;
use App\Models\User;

class adminSettingController extends Controller
{
	//Counties
   function counties(){
	   	if(Auth::check()){
	   		$databelt = counties::orderBy('label')->get();

	    	return view('admin.settings.counties', ['databelt' => $databelt]);
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function countiesAdd(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		counties::addCounty($data['label']);

	   		return redirect()->back()->with('success', 'County Added.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function countiesDelete($id){
	   	if(Auth::check()){
	   		$id = base64_decode($id);
	   		counties::destroy($id);
	   		postalCode::where('county_id', $id)->delete();

	   		return redirect()->back()->with('success', 'County Deleted.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }


   //Postal Codes
   function countiesPostalcode($id){
	   	if(Auth::check()){
	   		$id = base64_decode($id);
	   		$data = counties::find($id);

	    	return view('admin.settings.postalcode', ['data' => $data]);
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function countiesPostalcodeAdd(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		postalCode::addCode($data);

	    	return redirect()->back()->with('success', 'Postal Code Added.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function countiesPostalcodeDelete($id){
	   	if(Auth::check()){
	   		$id = base64_decode($id);

	   		postalCode::destroy($id);

	    	return redirect()->back()->with('success', 'Postal Code Deleted.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   //Service Type
   function serviceType(){
	   	if(Auth::check()){
	   		$data = serviceType::all();

	    	return view('admin.settings.serviceType', ['databelt' => $data]);
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function serviceTypeAdd(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		serviceType::addType($data['type']);

	    	return redirect()->back()->with('success', 'Service Type Added.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function serviceTypeDelete($id){
	   	if(Auth::check()){
	   		$id = base64_decode($id);
	   		serviceType::destroy($id);

	    	return redirect()->back()->with('success', 'Service Type Deleted.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }


   //VAT Setup
   function vatSetup(){
	   	if(Auth::check()){
	   		$vat = vatSetup::first();
	   		$history = vatHistory::orderBy('created_at', 'desc')->get();

	    	return view('admin.settings.vat', ['vat' => $vat, 'history' => $history]);
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function vatSetupUpdate(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		$v = vatSetup::first();
	   		$v->vat = $data['active_vat'];
	   		$v->save();

	   		$vh = new vatHistory;
	   		$vh->vat = $data['active_vat'];
	   		$vh->save();

	    	return redirect()->back()->with('success', 'VAT updated.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }


   //VAT Setup
   function userProfile(){
	   	if(Auth::check()){

	    	return view('admin.settings.profile');
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function userProfileUpdate(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		$user = User::find(Auth::id());
	   		if(Hash::check($data['old_password'], $user->password)){
	   			if($data['new_password'] == $data['confirmation_password']){
	   				$user->password = bcrypt($data['new_password']);
	   				$user->save();

	    			return redirect()->back()->with('success', 'Password updated.'); 

	   			}else{
	    			return redirect()->back()->with('error', 'New password does not matched.'); 
	   			}
	   		}else{
	    		return redirect()->back()->with('error', 'Old Password is incorrect.');
	   		}
	    }else{
	    	return redirect('/admin/login');
	    }
   }



   //Pricing
   function pricing($id){
	   	if(Auth::check()){
	   		$id = base64_decode($id);
	   		$data = counties::find($id);
	   		$postal_code = postalCode::where('county_id', $id)->orderBy('postal_code')->get();
	   		$type = serviceType::orderBy('service')->get();
	   		$pricing = pricing::where('county_id', $id)->orderBy('type_id')->get();

	    	return view('admin.settings.pricing', ['data' => $data, 'postalcode' => $postal_code, 'type' => $type, 'pricing' => $pricing]);
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function pricingAdd(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		$check = pricing::where('county_id', base64_decode($data['county_id']))->where('type_id', $data['service_type'])->first();
	   		if(empty($check->id)){
	   			pricing::addPricing($data);
	    		return redirect()->back()->with('success', 'Price Added.');
	    	}else{
	    		pricing::updatePricing($check->id, $data);
	    		return redirect()->back()->with('success', 'Price Updated.');
	    	}
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   //Holidays
   function holiday(){
	   	if(Auth::check()){
	   		$data = holiday::all();

	    	return view('admin.settings.holiday', ['databelt' => $data]);
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function holidayAdd(Request $request){
	   	if(Auth::check()){
	   		$data = $request->all();
	   		holiday::addHoliday($data);

	    	return redirect()->back()->with('success', 'Holiday Added.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }

   function holidayDelete($id){
	   	if(Auth::check()){
	   		$id = base64_decode($id);
	   		holiday::destroy($id);

	    	return redirect()->back()->with('success', 'Holiday Deleted.');
	    }else{
	    	return redirect('/admin/login');
	    }
   }



}
