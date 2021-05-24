<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\viewservicemodel;

    
    class viewservicecontroller extends Controller
    {  
        
        public function Data()
        {
            $sta=viewservicemodel::DropData();
            
            return view('/ViewAllServices',['service'=>$sta]);
        }
    
     
        public function EData()
        {
            $sta=viewservicemodel::DropData();
            return $sta;
           
        }
    
        public function View(Request $req)
        {
          
         
           if(isset($_POST["btn"]))
           {
             $ddl=$req->ddl;
    
            $st=$this->EData();
    
            $sta1=viewservicemodel::GridView($ddl);
            return view('/ViewAllServices',['sc'=>$sta1,'service'=>$st]);
           }
    
        }
    
        public function ViewData($sname=null,$sid=null)
        {
            if(isset($_GET["sid"])) $sid=$_GET["sid"];
            if(isset($_GET["sname"])) $sname=$_GET["sname"];
            return view('/addrequest',['s'=>$sname,'seid'=>$sid]);
        }
    
    
    
    
    }
    

