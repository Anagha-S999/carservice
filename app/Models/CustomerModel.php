<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class CustomerModel extends Model
{
    public static function CheckData($un)
    {
        $sel=DB::table('customer_models')->where(['cusername'=>$un])->get();
        return $sel;
    }
}
