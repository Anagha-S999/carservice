<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class LoginController extends Controller
{
    public function CustomerLog(Request $req,$cid=null,$un=null)
    {
        $un=$req->txtusername;
        $pw=$req->txtpassword;

        $log=LoginModel::LogData($un,$pw);

        if(count($log)>0)
        {


            foreach($log as $row)
            {
                $cid=$row->id;
                $un=$row->cusername;
            }
            

            $req->session()->put('username',$un);
            $req->session()->put('Cid',$cid);
            return redirect("customer");
        }


        
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/custlogin'},100);
        </script>
<?php
        }
        
    }
    public function AdminLog(Request $req)
    {
        $un=$req->Username;
        $pw=$req->Password;

        $log=LoginModel::LogAdmin($un,$pw);

        if(count($log)>0)
        {
            $req->session()->put('Name',$un);
            
            return redirect("adminhome");
        }
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/adminlogin'},100);
        </script>
<?php
        }
        
    }

}

    