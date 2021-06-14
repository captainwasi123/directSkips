<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderDetail;
use App\Models\orderBilling;
use App\Models\serviceType;

class orders extends Model
{
    use HasFactory;

    protected $table = 'tbl_order_info';

    public static function addOrder(array $data){
    	$o = new orders;
    	$ser = explode('|', $data['service_type']);
    	$size = explode('|', $data['skip_size']);
    	$o->postal_code = $data['postcode'].$data['cust_postcode'];
    	$o->dropoff_type = $data['dropoff_type'];
    	$o->service_type = $ser[0];
    	$o->skip_size = $size[0];
    	$o->delivery_date = date('Y-m-d', strtotime($data['delivery_date']));
    	$o->collection_date = date('Y-m-d', strtotime($data['collection_date']));
    	$o->status = '9';
    	$o->save();

    	$id = $o->id;

    	$od = new orderDetail;
    	$od->order_id = $id;
    	$od->first_name = $data['first_name'];
    	$od->last_name = $data['last_name'];
    	$od->email = $data['email'];
    	$od->phone = $data['phone'];
    	$od->address = $data['address'];
    	$od->city = $data['city'];
    	$od->country = $data['country'];
    	$od->comments = $data['comments'];
        $od->b_address = empty($data['b_address']) ? null : $data['b_address'];
        $od->b_city = empty($data['b_city']) ? null : $data['b_city'];
        $od->b_country = empty($data['b_country']) ? null : $data['b_country'];
        $od->b_postal_code = empty($data['b_postal_code']) ? null : $data['b_postal_code'];
        $od->newsletter = empty($data['newsletter']) ? '0' : '1';
    	$od->save();

    	$ob = new orderBilling;
    	$ob->order_id = $id;
    	$ob->amount = $size[1];
    	$ob->vat_amount = $size[2];
    	$ob->total_amount = $size[3];
    	$ob->save();

        return $id.'|'.$size[3];

    }


    public function details()
    {
        return $this->belongsTo(orderDetail::class, 'id', 'order_id');
    }

    public function billing()
    {
        return $this->belongsTo(orderBilling::class, 'id', 'order_id');
    }

    public function sType()
    {
        return $this->belongsTo(serviceType::class, 'service_type', 'id');
    }
}
