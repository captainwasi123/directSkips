<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\orders;
use App\Models\serviceType;
use App\Models\vatSetup;
use App\Models\counties;

class adminController extends Controller
{
    function index(){
    	if(Auth::check()){
    	    $data = array();
    	    $data['orders'] = orders::where('status', '1')->count();
    	    $data['booked'] = orders::where('status', '2')->count();
    	    $data['delivered'] = orders::where('status', '3')->count();
    	    $data['collected'] = orders::where('status', '4')->count();
    	    $data['archive'] = orders::where('status', '5')->count();
    	    $data['vat_applied'] = vatSetup::orderBy('id')->first();
    	    
    	    $data['service'] = serviceType::all();
    	    $data['counties'] = counties::all();
    	    
    		return view('admin.index', ['data' => $data]);
    	}else{
    		return redirect('admin\login');
    	}
    }

    function login(){

    	return view('admin.login');
    }

    function loginAttempt(Request $request){
    	$data = $request->all();
    	if(Auth::attempt(['username' => $data['username'], 'password' => $data['password']])){

    		return redirect('admin');
    	}else{
    		return redirect()->back()->with('error', 'Authentication Failed.');
    	}
    }

    function logout(){
    	if(Auth::check()){
    		Auth::logout();
    		
    		return redirect('admin');
    	}else{
    		return redirect('admin\login');
    	}
    }
}
