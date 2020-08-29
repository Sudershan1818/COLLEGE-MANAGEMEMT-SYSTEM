<script>
function get_reg()
{
regx=/\S/;		
return regx;
}
function empty_check1(id_value,span_id)
{
var v1=document.getElementById(id_value).value;
var regx;
regx=get_reg();
var msg="";
if(!v1.match(regx)){
document.getElementById(span_id).style.display="block";
return false;
}
else{
	document.getElementById(span_id).style.display="none";
}
}
function confo()
{
	
var x=document.getElementById('password').value;
var y=document.getElementById('conformpassword').value;
var z=document.getElementsByName('sex');
if(!((z[0].checked||z[1].checked)&&!(z[0].checked&&z[1].checked)))
{
document.getElementById('span2').style.display="block";
return false;
}
var c=document.getElementsByName('stream');
if(!((c[0].checked||c[1].checked)&&!(c[0].checked&&c[1].checked)))
{
document.getElementById('span3').style.display="block";
return false;
}
if(x!=y)
{
document.getElementById('span1').style.display="block";
return false;
}
var regx=/\S/;	
var v1=document.getElementById('firstname').value;
var v2=document.getElementById('textar').value;
if(!v1.match(regx))
{
return false;
}
if(!v2.match(regx))
{
return false;	
}
var regy=/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
var v3=document.getElementById('email').value;
if(!v3.match(regy))
{
	alert('Please Insert Valid Email');
	return false;
}
else{ 
	return true;
}
	}
</script>
<div class="container-fluid" ">
<div class='panel panel-primary' style="background-color:#FDFDFD;">

<div class="panel-heading" class="text-center" style="background-color:#648DC3;">
<h1 class="text-center">Student Registration</h1>
</div>



<div class='panel-body' style="background-color:#EAE6E8;">
<form class="form-group" action="registration_upload.php"  method="post" onsubmit="return confo()" enctype="multipart/form-data">
<div class="row">
<div class="col-md-2">
<h4>First Name:</h4>
</div>
<div class="col-md-10">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input type="text" name="firstname" placeholder="First Name" id="firstname"  class="form-control" style="width:80%" onkeyup="empty_check1(this.id,'span5')" required />
<span style="color:red; display:none;" id="span5">Please Enter Name</span>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Last Name:</h4>
</div>
<div class="col-md-10">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control" style="width:80%" required />
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Email:</h4>
</div>
<div class="col-md-10">
 <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input type="email" name="email" id="email"  class="form-control" placeholder="Email" style="width:80%" required />
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Password:</h4>
</div>
<div class="col-md-10">
<div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" name="password" id="password"  class="form-control" placeholder="Password" style="width:80%" required "/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Conform Password:</h4>
</div>
<div class="col-md-10">
<div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" name="conformpassword" id="conformpassword" placeholder="Conform Password"  class="form-control" style="width:80%" required />
<span style="color:red; display:none;" id="span1">Password not matched</span>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Sex:</h4>
</div>
<div class="col-md-10">
<input type="radio" name="sex" id="female" value="female" checked />&nbsp; Female &nbsp;&nbsp;&nbsp;
<input type="radio" name="sex" id="male" value="male"  />&nbsp; Male
<span style="color:red; display:none;" id="span2">Please select sex</span>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Stream:</h4>
</div>
<div class="col-md-10">
<input type="radio" name="stream" id="CSE" value="CSE" checked />&nbsp; CSE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="stream" id="IT" value="IT"  />&nbsp; IT
<span style="color:red; display:none;" id="span3">Please select stream</span>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Address</h4>
</div>
<div class="col-md-10">
<div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input  type="text" name="address" id="textar" rows="3" placeholder="Address" style="width:80%" class="form-control" onkeyup="empty_check1(this.id,'span6')" required  >
<span style="color:red; display:none;" id="span6">Please Enter Address</span>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Year</h4>
</div>
<div class="col-md-10">
<div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select class="selectpicker" name="list" class="form-control" style="height:30px;">
  <option selected value="first">first</option>
  <option value="second">second</option>
  <option value="third">third</option>
  <option value="fourth">fourth</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h4>Image</h4>
</div>
<div class="col-md-10">
<div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<input type="file" name="fileToUpload" style="width:80%" value="fileToUpload" class="form-control" required />
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-10">
<button type="submit" class="btn btn-success btn-md" value="Submit" class="form-control" name="submit">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>   <!--panel -->
</div>  <!-- container fluid  -->