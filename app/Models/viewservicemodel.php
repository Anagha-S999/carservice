<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class viewservicemodel extends Model
{
    public static function DropData()
    {
        $st=DB::table('tbl_service')->get();
        return $st;
    }


 


    public static function GridView($id)
    {

       
        $st=DB::table('tbl_service')->where(['id'=>$id])->get();
        return $st;
       
    }

}
