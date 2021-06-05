<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postalCode extends Model
{
    use HasFactory;

    protected $table = 'tbl_postal_code_info';

    public static function addCode(array $data){
    	$pc = new postalCode;
    	$pc->county_id = base64_decode($data['county_id']);
    	$pc->postal_code = $data['postal_code'];
    	$pc->save();
    }
}
