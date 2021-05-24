<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\staffmodel;
class staffcontroller extends Controller
{ 
    
    
    
    
    public function serviceData()
    {
        $sta=staffmodel::DropData();
     return view('/addstaff',['service'=>$sta]);
     
    }
    
    public function Insertstaff(Request $req)
    {
        $s_name=$req->staff_name;
        $s_email=$req->staff_email;
        $s_mobile=$req->staff_mobile;
        $s_designation=$req->staff_des;
        $sid=$req->ddlct;
   
        if(isset($_POST["btn"]))
        

            $insert=staffmodel::SData($s_name,$s_email,$s_mobile,$s_designation,$sid);
       
            return  redirect('/addstaff');

     
       
    }

    public function ViewS(Request $req)
    {


        $sta=staffmodel::GridView();
        return view('/addstaff',['sc'=>$sta]);
    }


    public function Delete($did)
    {
        $delt=staffmodel::DelData($did);
        return redirect('/addstaff');
    }


}
