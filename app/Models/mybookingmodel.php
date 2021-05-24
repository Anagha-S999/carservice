<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class mybookingmodel extends Model
{
    public static function GridView($cid)
    {
       

$s=0;
        $data=DB::table('tbl_car')
         
        ->join('tbl_service','tbl_service.id','=','tbl_car.id')
        ->join('customer_models','customer_models.id','=','tbl_car.cust_id')
        ->where('tbl_car.cust_id','=',$cid)
        //    ->where('tbl_bookimg.Status','=',$si)
      
        ->select('*')

        ->get();
    
return $data;



    }






}
