<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\postalCode;

class counties extends Model
{
    use HasFactory;

    protected $table = 'tbl_counties_info';

    public static function addCounty($label){
    	$c = new counties;
    	$c->label = $label;
    	$c->save();
    }

    public function postCodes()
    {
        return $this->hasMany(postalCode::class, 'county_id', 'id');
    }
    
    
}
