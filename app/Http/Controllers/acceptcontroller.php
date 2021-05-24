<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\acceptmodel;

class acceptcontroller extends Controller
{
    public function Viewbook(Request $req)
    {
      
     
      

        $sta1=acceptmodel::GridView();





        return view('/AcceptedBooking',['booking'=>$sta1]);
       }
    

       

        }