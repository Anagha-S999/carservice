<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\servicemodel;
class serviccontroller extends Controller
{ 
     public function InsertService(Request $req)
    {
        $name=$req->sname;
        $code=$req->scode;
     
        $rate=$req->srate;
        if(isset($_POST["btnsave"]))
        

            $insert=servicemodel::ServiceData($code,$name,$rate);
       
            return  redirect('/addservices');

     
       
    }

    public function ViewService(Request $req)
    {


        $sta=servicemodel::GridView();
        return view('/addservices',['service'=>$sta]);
    }


    public function DeleteService($did)
    {
        $delt=servicemodel::DelData($did);
        return redirect('/addservices');
    }


}
