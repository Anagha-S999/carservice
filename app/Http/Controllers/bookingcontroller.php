<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\bookingmodel;

class bookingcontroller extends Controller
{

    public function ApptIns(Request $req)
    {

        $cid=session()->get('Cid');


        $seid=$req->sid;
        $cname=$req->vname;
        $cbrand=$req->vbrand;
        $cmodel=$req->vmodel;
        $creg=$req->vreg;
       $creason=$req->vreason;
        $date=$req->vdate;
        $cman=$req->vman;
        $sta=0;
      if(isset($_POST["btn"]))
      {
          $apins=bookingmodel::InsApp($cid,$cname,$cbrand,$cmodel,$creg,$creason,$date,$cman,$sta,$seid);
           return redirect('/addrequest');
      }

    }
}
