<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class serviceType extends Model
{
    use HasFactory;

    protected $table = 'tbl_service_type_info';

    public static function addType($type){
    	$t = new serviceType;
    	$t->service = $type;
    	$t->save();
    }
    
    
    public function orders(){
        return $this->hasMany(orders::class, 'service_type', 'id')->where('status', '!=', '9');
    }
}
