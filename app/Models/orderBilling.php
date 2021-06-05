<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderBilling extends Model
{
    use HasFactory;

    protected $table = 'tbl_order_billing_info';

    public $timestamps = false;
}
