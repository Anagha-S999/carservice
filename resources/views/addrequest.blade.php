@extends("theme")

@section("content")

<div class="container">
<div class="row">
<div class="col <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6">
<form  method="post">

{{csrf_field()}}

<table class="table">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2><center>SERVICE REQUEST</center></h2>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<tr>
    <td>Vehicle Name</td>
    <input type="hidden" class="form-control" name="sid" value="<?php  if(isset($seid)){ echo $seid; }?>">
    <td><input name="vname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Vehicle Brand</td>
    <td><input name="vbrand" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Vehicle Model</td>
    <td><input name="vmodel" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Registration Number</td>
    <td><input name="vreg" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Reason for repair</td>
    <td><textarea name="vreason" id="reason" cols="50" rows="10"></textarea></td>
</tr>
<tr>
    <td>Service Date</td>
    <td><input name="vdate" type="date" name="date" id="date"></td>
</tr>
<tr>
    <td>Manufacturing Year</td>
    <td><input name="vman" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-danger" name="btn" type="submit">Submit</button></td>
</tr>
</table>

</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
@endsection