<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class holiday extends Model
{
    use HasFactory;

    protected $table = 'tbl_holidays_info';

    public static function addHoliday(array $data){
    	$h = new holiday;
    	$h->holiday = $data['holi_date'];
    	$h->remarks = $data['remarks'];
    	$h->save();
    }
}
