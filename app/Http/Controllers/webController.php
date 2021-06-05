<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceType;
use App\Models\orders;
use App\Models\holiday;
use Mail;

use Stripe;
use StripeClient;

class webController extends Controller
{
    
    function index(){
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
    	return view('web.index', ['type' => $type, 'holiday' => $holiday, 'startDate' => $sDate]);
    }
    

    function about(){

        return view('web.about');
    }

    function contact(){

        return view('web.contact');
    }
    
    function faq(){

        return view('web.faq');
    }
    
    function skipSizes(){

        return view('web.skip_sizes');
    }
    
    
    function thankyou(){

        return view('web.thankyou');
    }

    function orderSubmit(Request $request){
    	$data = $request->all();
        $ret = orders::addOrder($data);
    	$ret_data = explode('|', $ret);

    	return view('web.payment', ['id' => $ret_data[0], 'amount' => $ret_data[1]]);
    }

    public function stripePayment(Request $request)
    {
        $stripe = new \Stripe\StripeClient(
          env('STRIPE_PRIVATE_KEY')
        );
        $charge_amount = $request->get('amount')*100;
        $paymentIntent = \Stripe\PaymentIntent::create([
          'amount' => $charge_amount,
          'currency' => 'gbp'
        ]);
        
        return response()->json($paymentIntent);
       
    }
    
    public function orderComfirmed($id){
        $d = orders::find($id);
        $d->status = '1';
        $d->save();
        
        $data = orders::find($id);
        
        /*$da = array(
                'name'              =>  $data->details->first_name.' '.$data->details->last_name,
                'email'             =>  $data->details->email,
                'phone'             =>  $data->details->phone,
                'newsletter'        =>  $data->details->newsletter == '1' ? 'Yes' : 'No',
                'service'           =>  empty($data->sType) ? '' : $data->sType->service,
                'skip_size'         =>  $data->skip_size,
                'delivery_date'     =>  date('d-M-Y', strtotime($data->delivery_date)),
                'collection_date'   =>  date('d-M-Y', strtotime($data->collection_date)),
                'price'             =>  empty($data->billing) ? '' : $data->billing->total_amount,
                'comments'          =>  empty($data->details->comments) ? '-' : $data->details->comments,
                'address'           =>  empty($data->details) ? '' : $data->details->address,
                'address_2'         =>  empty($data->details) ? '' : $data->details->city,
                'county'            =>  empty($data->details) ? '' : $data->details->country,
                'postal_code'       =>  $data->postal_code,
                'd_address'         =>  empty($data->details) ? '' : $data->details->b_address,
                'd_address_2'       =>  empty($data->details) ? '' : $data->details->b_city,
                'd_county'          =>  empty($data->details) ? '' : $data->details->b_country,
                'd_postal_code'     =>  empty($data->details) ? '' : $data->details->b_postal_code
            );
        $to_name = $data->details->first_name.' '.$data->details->last_name;
        $to_email = $data->details->email;
        Mail::send('web.response.orderCustMail', $da, function($message) use ($to_name, $to_email, $id) {
        $message->to($to_email, $to_name)->subject('Order Confirmation | Order#: '.$id);
        $message->from('orders@247directskips.com','24/7 Direct Skips');
        });
        
        Mail::send('web.response.orderAdminMail', $da, function($message) use ($to_name, $to_email, $id) {
        $message->to('orders@247directskips.com','24/7 Direct Skips')->subject('Order Received | Order#: '.$id);
        $message->from('orders@247directskips.com','24/7 Direct Skips');
        });*/
        
        
        return 'success';
    }
    
    public function enquirySubmit(Request $request)
    {
        $data = $request->all();
            
        Mail::send('web.response.enquiryMail', $data, function($message) use ($data) {
            $message->to('orders@247directskips.com','24/7 Direct Skips')->subject('Enquiry Received | '.$data['first_name'].' '.$data['last_name']);
            $message->from('orders@247directskips.com','24/7 Direct Skips');
        });
     
        return redirect()->back()->with('success', 'Thank you for your enquiry. We will get back to you shortly.');
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
    
    
    
    
    function sendmail(){
        $id = '1003';
        $data = orders::where('id', $id)->first();
        /*$da = array(
                    'name'              =>  $data->details->first_name.' '.$data->details->last_name,
                    'email'             =>  $data->details->email,
                    'phone'             =>  $data->details->phone,
                    'newsletter'        =>  $data->details->newsletter == '1' ? 'Yes' : 'No',
                    'service'           =>  empty($data->sType) ? '' : $data->sType->service,
                    'skip_size'         =>  $data->skip_size,
                    'delivery_date'     =>  date('d-M-Y', strtotime($data->delivery_date)),
                    'collection_date'   =>  date('d-M-Y', strtotime($data->collection_date)),
                    'price'             =>  empty($data->billing) ? '' : $data->billing->total_amount,
                    'comments'          =>  empty($data->details->comments) ? '-' : $data->details->comments,
                    'address'           =>  empty($data->details) ? '' : $data->details->address,
                    'address_2'         =>  empty($data->details) ? '' : $data->details->city,
                    'county'            =>  empty($data->details) ? '' : $data->details->country,
                    'postal_code'       =>  $data->postal_code,
                    'd_address'         =>  empty($data->details) ? '' : $data->details->b_address,
                    'd_address_2'       =>  empty($data->details) ? '' : $data->details->b_city,
                    'd_county'          =>  empty($data->details) ? '' : $data->details->b_country,
                    'd_postal_code'     =>  empty($data->details) ? '' : $data->details->b_postal_code
                );
        $to_name = 'Waseem';
        $to_email = 'captain.wasi@gmail.com';
        Mail::send('web.response.orderCustMail', $da, function($message) use ($to_name, $to_email, $id) {
        $message->to($to_email, $to_name)->subject('Order Confirmation | Order#: '.$id);
        $message->from('orders@247directskips.com','24/7 Direct Skip');
        });*/
    }
    
    
    
    function terms_and_conditions(){

        return view('web.terms_and_conditions');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
