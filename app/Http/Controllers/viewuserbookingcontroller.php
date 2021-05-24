<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\viewuserbookinmodel;

class viewuserbookingcontroller extends Controller
{
    public function Viewbookingnew(Request $req,$s=null,$aid=null,$rid=null)
    {
      
     
      

        $sta1=viewuserbookinmodel::GridView();


        if(isset($_GET["aid"]))
        {
         $s=1;
        $aid=$_GET["aid"];
       
            $upQ=viewuserbookinmodel::UpDataA($s,$aid);
            $sta1=viewuserbookinmodel::GridView();
          
        }
        else if(isset($_GET["rid"]))
        {
        
          $s=2;
         $rid=$_GET["rid"];
        
             $upQ=viewuserbookinmodel::UpDataR($s,$rid);
            
             $sta1=viewuserbookinmodel::GridView();
         }




        return view('/ViewUserBooking',['booking'=>$sta1]);
       }
    

       

        }