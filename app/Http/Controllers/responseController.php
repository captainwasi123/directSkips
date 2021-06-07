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
        if(strlen($pc) < 3){
            return redirect()->back()->with('error', $pc);
        }else{
            $fpc = strlen($pc) > 3 ? substr($pc, 0, 4) : substr($pc, 0, 3);
            $c = postalCode::where('postal_code', $fpc)->first();
            if(empty($c->id)){
                $fpc =substr($pc, 0, 3);
                $c = postalCode::where('postal_code', $fpc)->first();
                if(empty($c->id)){
                    return redirect('/')->with('error', $fpc);
                }else{
                    return redirect(route('book_now').'?postcode='.$fpc);
                }
                return redirect()->back()->with('error', $fpc);
            }else{

                return redirect(route('book_now').'?postcode='.$fpc);
            }
        }
    }

    function book_now(Request $request){
        $data = $request->all();
        $pc = $data['postcode'];
        if(strlen($pc) < 3){
            return redirect('/')->with('error', $pc);
        }else{

            $holiday = array();
            $holiarr = array();
            $type = serviceType::all();
            $holi = holiday::all();
            foreach ($holi as $key => $value) {
                $day = array();
                array_push($day, date('n', strtotime($value->holiday)));
                array_push($day, date('j', strtotime($value->holiday)));
                array_push($day, date('Y', strtotime($value->holiday)));
                
                array_push($holiday, $day);
                
                array_push($holiarr, $value->holiday);
                
            }
            
            $curr = date('Y-m-d');
            $startDate = date('Y-m-d', strtotime("+1 day", strtotime($curr)));
            $sDate = $this->checkStartdate($holiarr, $startDate, 1);


            $fpc =strlen($pc) > 3 ? substr($pc, 0, 4) : substr($pc, 0, 3);
            $c = postalCode::where('postal_code', $fpc)->first();
            if(empty($c->id)){
                $fpc =substr($pc, 0, 3);
                $c = postalCode::where('postal_code', $fpc)->first();
                if(empty($c->id)){
                    return redirect('/')->with('error', $fpc);
                }else{
                    return view('web.book_now', ['holiday' => $holiday, 'startDate' => $sDate]);
                }
            }else{
                return view('web.book_now', ['holiday' => $holiday, 'startDate' => $sDate]);
            }
        }
    }


    function checkStartdate(array $data, $startDate, $i){
        
        if(date('l', strtotime($startDate)) == 'Saturday' || date('l', strtotime($startDate)) == 'Sunday'){
            
            $val = date('Y-m-d', strtotime("+1 day", strtotime($startDate)));
            return $this->checkStartdate($data, $val, $i);
        }else{
            $x = 0;
            foreach ($data as $value) {
                if($startDate == $value){
                    $x = 1;
                }  
            }
            if($x == 1){
                $val = date('Y-m-d', strtotime("+1 day", strtotime($startDate)));
                return $this->checkStartdate($data, $val, $i);
            }else{
                $val = date('Y-m-d', strtotime("+1 day", strtotime($startDate)));
                if($i == 1){
                    return $this->checkStartdate($data, $val, 2);
                }else{
                    return $startDate;
                }
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
    function step_3(){

        return view('web.response.book.step_4');
    }
    function step_4(Request $request){
        $data = $request->all();

        return view('web.response.book.step_5', ['data' => $data]);
    }








}
