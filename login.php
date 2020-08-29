<?php ob_start(); 
session_start();
include("connection.php")?>
<html>
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
<script>
$(document).ready(function() {
    $('#login').formValidation();
});
</script>
 </head>
 
<body> 
<?php include("header1.php"); ?>
<?php include("navbar1.php"); ?>

<?php 
$msg="";
$msg1="";
 if(isset($_POST['login']))
 {
$uid=$_POST['uID'];
$pwd=$_POST['pwd'];
$table=$_POST['table'];
$sql="Select password from $table where registration_number='$uid'";
//echo $sql;
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
	$row_data=mysql_fetch_row($result);
	if($row_data[0]==$pwd)
	{
	echo"Welcome<br>";
	$_SESSION['uid']=$uid;
	if($table=="student_detail"){
	$url="student_edit.php";
	}
	else if($table=="teacher"){
	$url="teachernavbar_view.php";
	}
	else if($table=="admin"){
		$url="admin_profile.php";
	}
	header("Location:$url");
	}
	else
	{
    $msg=" <b style='color:red'>* Incorrect password</b>";
	}
}
else
{
	$msg1="<b style='color:red'>* Incorrect username</b>";
}
 }
?>

<div class="container-fluid" style="min-height:400px; margin-top:80px;">
	<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-7">
			<div class='panel panel-danger'>
<div class='panel-heading'><h2 class='text-center'>LOG IN</h2></div>
<div class='panel-body'style="background-color:#EAE6E8;">
<form role='form' class='form-horizontal' action='login.php' method='post' id="login" 
    data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">
<div class='form-group row'>
<label class='col-md-4'>User ID</label>
<div class='col-md-8'>
<input type='text' name='uID' id='uID' placeholder='Enter your user ID'  class='form-control' 
required  data-fv-notempty-message="The username is required" /></div>
</div>
<div class='form-group'>
<div class='col-md-2'></div>
<span class='col-md-2'><?php
echo $msg1 ;?></span></div>
<div class='form-group row'>
<label class='col-md-4'>Password</label>
<div class="col-md-8">
<input type='password' name='pwd' id='pwd' placeholder='Enter your password' class='form-control'
required
                data-fv-notempty-message="The password is required"/></div>
</div>
<div class='form-group'>
<div class='col-md-2'></div>
<span class='col-md-2'><?php
echo $msg ;?></span></div>
<div class='form-group'>
<label class='col-md-4'>User</label>
<div class="col-md-8">
<select name='table' id='dropdown'  class='form-control'>
<option value='admin'><b>Admin</b></option>
<option value='teacher'><b>Teacher</b></option>
<option value='student_detail'><b>Student</b></option>
</select></div>
</div>
<div class='form-group'>
<div class='col-md-4'></div>
<div class='col-md-3'><input type='submit' value='login' class='form-control btn btn-danger' name='login' /></div>
<div class='col-md-6'></div>
</div>

</form>
</div>
</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>


<?php include("footer1.php") ?>
</body>
</html>
