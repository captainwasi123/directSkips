<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postalCode;
use App\Models\pricing;
use App\Models\vatSetup;
use App\Models\serviceType;
use App\Models\orders;
use App\Models\holiday;

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


    //New Index
    function get_postcode(Request $request){
        $data = $request->all();
        $pc = $data['postcode'];
        if(strlen($pc) < 4){
            return redirect()->back()->with('error', $pc);
        }else{
            $fpc =substr($pc, 0, 4);
            $c = postalCode::where('postal_code', $fpc)->first();
            if(empty($c->id)){
                return redirect()->back()->with('error', $fpc);
            }else{

                return redirect(route('book_now').'?postcode='.$fpc);
            }
        }
    }

    function book_now(Request $request){
        $data = $request->all();
        $pc = $data['postcode'];
        if(strlen($pc) < 4){
            return redirect('/')->with('error', $pc);
        }else{
            $fpc =substr($pc, 0, 4);
            $c = postalCode::where('postal_code', $fpc)->first();
            if(empty($c->id)){
                return redirect('/')->with('error', $fpc);
            }else{
                return view('web.book_now');
            }
        }
    }



    //Steps
    function step_1(){
        $type = serviceType::all();
        return view('web.response.book.step_2', ['type' => $type]);
    }

    function step_2($postcode, $service_type){
        $fpc =substr($postcode, 0, 4);
        $c = postalCode::where('postal_code', $fpc)->first();
        $pricing = pricing::where('county_id', $c->county_id)->where('type_id', $service_type)->first();
        $vat = vatSetup::first();

        return view('web.response.book.step_3', ['pricing' => $pricing, 'vat' => $vat->vat]);
    }







    
}
