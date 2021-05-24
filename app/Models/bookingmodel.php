<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class bookingmodel extends Model
{
    public static function InsApp($cust_id,$c_name,$c_band,$c_model,$c_regno,$c_reson,$c_servicedate,$c_man_year,$status,$sid)
    {
        $ins=DB::table('tbl_car')->insert(['cust_id'=>$cust_id,'c_name'=>$c_name,'c_band'=>$c_band,'c_model'=>$c_model,'c_regno'=>$c_regno,'c_reson'=>$c_reson,'c_servicedate'=>$c_servicedate,'c_man_year'=>$c_man_year,'status'=>$status,'id'=>$sid]);
        return $ins;
    }

}
