@extends("theme")

@section("content")
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
<br>


<div class="container">



<div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" align="center">



<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">


<div id="divToPrint">

<br>
<br>
<h1>BookingReport</h1>
<br>
<br>
<br>
<table class="table table-bordered" style="border:1px solid black" width="100%">
        <tr>
                <th>Sl.No</th>
                <th>ServiceCode</th>
                <th>ServiceName</th>
                <th>ServiceRate</th>
                <th>carName</th>
                <th>Model</th>
                <th>RegisterNo</th>
                <th>ResonforService</th>
                <th>ServiceDate</th>
                <th>UserName</th>
                <th>Contact</th>
               
            
        </tr>

        <tr>
                <?php
                    if(isset($bb))
                    $i=0;
                    {
                        foreach($bb as $st1)
                        {

                            $i++;

                ?>
                <td><?php echo $i;?></td>
                <td><?php echo $st1->service_code;?></td>
                <td><?php echo $st1->service_name;?></td>
                <td><?php echo $st1->service_rate;?></td>
                <td><?php echo $st1->c_name;?></td>
                <td><?php echo $st1->c_model;?></td>
                <td><?php echo $st1->c_regno;?></td>
                <td><?php echo $st1->c_reson;?></td>
                <td><?php echo $st1->c_servicedate;?></td>
                <td><?php echo $st1->cname;?></td>
                <td><?php echo $st1->cmobile;?></td>

               
              
               
             
                
              
                
        </tr>

                <?php
                           }
                        }
    

                ?>
        <tr></tr>
      
    </table>
    </div>
  
            

   <center> <input  class="btn btn-danger" type="button" value="Download" onclick="PrintDiv();" /></center>
 











</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
@endsection
