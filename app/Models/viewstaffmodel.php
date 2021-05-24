<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class viewstaffmodel extends Model
{




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
