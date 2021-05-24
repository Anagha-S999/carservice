<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\viewstaffmodel;
class viewstaffcontoller extends Controller
{ 
    
    
    
    


    public function ViewS(Request $req)
    {


        $sta=viewstaffmodel::GridView();
        return view('/viewstaff',['sc'=>$sta]);
    }


    public function Delete($did)
    {
        $delt=viewstaffmodel::DelData($did);
        return redirect('/viewstaff');
    }


}
