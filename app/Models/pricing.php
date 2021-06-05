<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\serviceType;

class pricing extends Model
{
    use HasFactory;

    protected $table = 'tbl_counties_pricing_info';

    public static function addPricing(array $data){
    	$p = new pricing;
    	$p->county_id = base64_decode($data['county_id']);
    	$p->type_id = $data['service_type'];
    	$p->four_yd = $data['four_yd'];
    	$p->six_yd = $data['six_yd'];
    	$p->eight_yd = $data['eight_yd'];
    	$p->twelve_yd = $data['twelve_yd'];
    	$p->save();
    }

    public static function updatePricing($id, array $data){
    	$p = pricing::find($id);
    	$p->four_yd = $data['four_yd'];
    	$p->six_yd = $data['six_yd'];
    	$p->eight_yd = $data['eight_yd'];
    	$p->twelve_yd = $data['twelve_yd'];
    	$p->save();
    }

    public function type()
    {
        return $this->belongsTo(serviceType::class, 'type_id', 'id');
    }
}
