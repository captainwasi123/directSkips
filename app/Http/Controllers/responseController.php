<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postalCode;
use App\Models\pricing;
use App\Models\vatSetup;

class responseController extends Controller
{
    function postalcodeCheck($val, $type){
    	$c = postalCode::where('postal_code', $val)->first();
    	if(empty($c->id)){
    		return 'invalid';
    	}else{
    		$pricing = pricing::where('county_id', $c->county_id)->where('type_id', $type)->first();
    		$vat = vatSetup::first();
    		return view('web.response.serviceType', ['pricing' => $pricing, 'vat' => $vat->vat]);
    	}
    }

    function pricingCheck($type, $postal){
    	$c = postalCode::where('postal_code', $postal)->first();
		$pricing = pricing::where('county_id', $c->county_id)->where('type_id', $type)->first();
		$vat = vatSetup::first();
		return view('web.response.serviceType', ['pricing' => $pricing, 'vat' => $vat->vat]);
    }
}
