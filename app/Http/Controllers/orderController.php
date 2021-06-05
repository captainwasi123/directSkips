<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use Auth;

class orderController extends Controller
{
    function orders(){
    	if(Auth::check()){
    		$data = orders::where('status', '1')->orderBy('created_at', 'desc')->simplePaginate(50);
    		return view('admin.order.orders', ['databelt' => $data]);
    	}else{
    		return redirect('/admin/login');
    	}
    }
    function booked(){
    	if(Auth::check()){
    		$data = orders::where('status', '2')->orderBy('created_at', 'desc')->simplePaginate(50);
    		return view('admin.order.booked', ['databelt' => $data]);
    	}else{
    		return redirect('/admin/login');
    	}
    }
    function delivered(){
    	if(Auth::check()){
    		$data = orders::where('status', '3')->orderBy('created_at', 'desc')->simplePaginate(50);
    		return view('admin.order.delivered', ['databelt' => $data]);
    	}else{
    		return redirect('/admin/login');
    	}
    }
    function collected(){
    	if(Auth::check()){
    		$data = orders::where('status', '4')->orderBy('created_at', 'desc')->simplePaginate(50);
    		return view('admin.order.collected', ['databelt' => $data]);
    	}else{
    		return redirect('/admin/login');
    	}
    }
    function archive(){
    	if(Auth::check()){
    		$data = orders::where('status', '5')->orderBy('created_at', 'desc')->simplePaginate(50);
    		return view('admin.order.archive', ['databelt' => $data]);
    	}else{
    		return redirect('/admin/login');
    	}
    }

    function changeStatus($status, $id){
    	if(Auth::check()){
    		$o = orders::find(base64_decode($id));
    		$o->status = $status;
    		$o->save();

    		return redirect()->back()->with('success', 'Status Changed.');
    	}else{
    		return redirect('/admin/login');
    	}
    }
    
    function deleteOrder($id){
    	if(Auth::check()){
    		$o = orders::find(base64_decode($id));
    		$o->status = '8';
    		$o->save();

    		return redirect()->back()->with('success', 'Order Deleted.');
    	}else{
    		return redirect('/admin/login');
    	}
    }
    
    function addSupplier(Request $request){
    	if(Auth::check()){
    	    $data = $request->all();
    	    $o = orders::find(base64_decode($data['order_id']));
    	    $o->supplier_name = $data['supplier'];
    	    $o->save();
    	    
    	    return redirect()->back()->with('success', 'Supplier Added.');
    	}else{
    		return redirect('/admin/login');
    	}
    }
}
