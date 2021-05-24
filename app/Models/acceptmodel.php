<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class acceptmodel extends Model
{
    public static function GridView($s=null)
    {
       

$s=1;
        $data=DB::table('tbl_car')
         
        ->join('tbl_service','tbl_service.id','=','tbl_car.id')
        ->join('customer_models','customer_models.id','=','tbl_car.cust_id')
    
        ->where('tbl_car.status','=',$s)
        ->select('*')

        ->get();
    
return $data;



    }


   


   
  
}
