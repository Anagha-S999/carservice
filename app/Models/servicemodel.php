<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class servicemodel extends Model
{
    public static function ServiceData($sc,$sn,$sr)
    {
        $ins=DB::table('tbl_service')->insert(['service_code'=>$sc,'service_name'=>$sn,'service_rate'=>$sr]);
        return $ins;
    }
    public static function GridView()
    {
        $st=DB::table('tbl_service')->get();
        return $st;
    }


    public static function DelData($did)
    {
        $del=DB::table('tbl_service')->where(['id'=>$did])->delete();
        return $del;
    }

}
