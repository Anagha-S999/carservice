<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mybookingmodel;

class mybookingcontroller extends Controller
{
    public function Mybooking(Request $req,$ci=null)
    {
       
        $ci=$req->session()->get('Cid');

        $sta1=mybookingmodel::GridView($ci);
   
   

       
       return view('/viewrequest',['ci'=>$ci,'bb'=>$sta1]);

    }
}

