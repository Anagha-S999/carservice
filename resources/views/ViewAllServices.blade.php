@extends("theme")

@section("content")

<br>


<div class="container">



<div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" align="center">

<form method="post">

{{csrf_field()}}

<table class="table" align="left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2><center>Search Service</center></h2>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

    <select class="form-select" aria-label="Default select example" name="ddl" >
  <option selected>Select service</option>
  <?php
                        if(isset($service))
                        {
                            foreach($service as $s)
                            {

                        
                    ?>
                    
                    <option value="<?php echo $s->id;?>"><?php echo $s->service_name;?></option>
                    
                        <?php
                                }
                            }
    
                    ?>
  
</select>
<br/><br/>

<button class="btn btn-info"  type="submit" name="btn" width="120">Submit</button>




<table style="box-shadow: 10px 10px 18px;" width="100%"> 
    

        <tr>
                <?php $i=0;
                    if(isset($sc))
                   
                    {
                        foreach($sc as $st1)
                        {

                            $i++;

                ?> 
                
                <td align="center"><h1> <?php echo $st1->service_name;?></h1></br>
                <img src="data:image/png;base64,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" alt="" height="120"  class="d-inline-block align-text-top">
 </br>
        <h1 style="color:red">Amount: <?php echo $st1->service_rate;?>/-</h1><br>
               
               
        <a href="/addrequest?sname=<?php echo $st1->service_name;?>&sid=<?php echo $st1->id;?>" class="btn btn-danger">Book Now</a></td>
              
                              
        </tr>

                <?php
                           }
                        }
    

                ?>
        <tr></tr>

    </table>



</form>











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