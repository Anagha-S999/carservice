<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class staffmodel extends Model
{



    public static function DropData()
    {
       

        $st=DB::table('tbl_service')
       
        ->get();
        return $st;
    }

    public static function SData($s_name,$s_email,$s_mobile,$s_designation,$st)
    {
        $ins=DB::table('tbl_staff')->insert(['s_name'=>$s_name,'s_email'=>$s_email,'s_mobile'=>$s_mobile,'s_designation'=>$s_designation,'sid'=>$st]);
        return $ins;
    }
    public static function GridView()
    {
        $st=DB::table('tbl_staff')->get();
        return $st;
    }


    public static function DelData($did)
    {
        $del=DB::table('tbl_staff')->where(['s_id'=>$did])->delete();
        return $del;
    }

}
