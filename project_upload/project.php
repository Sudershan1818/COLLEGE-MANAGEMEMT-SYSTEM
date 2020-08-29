<?php
include("user_info.php");
include("connectdata.php");
?>

<!DOCTYPE html>
<head>
  <title>UIIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
  <script>
function conform(){
var y=document.getElementById('subject').value;
var regx=/\S/;
if(!y.match(regx))
{
document.getElementById('span1').style.display="block";
return false;
}
var a = document.getElementById('dob').value; 
	Check = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/; 
    if(!a.match(Check)) {  
     alert("Error: Date format: yyyy-mm-dd ");  
     return false;  
    }
else{
return true;
}
}
</script>
 </head>
 <body>
  <?php include("header1.php"); ?>
<?php include('teacher_navbar.php'); ?>
<div style="min-height:320px;">
	<div class="container">          
            <div class="panel panel-primary" style="width:70%; margin:20px auto; background-color:#FDFDFD;" >
                    <div class="panel-heading" style="background-color:#648DC3;" >
                        <div class="panel-title" ><div class="text-center"><h3>Project Upload</h3></div></div>
                    </div>     
<div class="panel-body" style="background-color:#EAE6E8;">
<form class="form-group" action="project1.php" method="post" onsubmit="return conform()" enctype="multipart/form-data" >
<div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Stream</span></strong>
					</div>
					<div class="col-md-9" >
					<select class="selectpicker form-control" name="stream1">
        <option value="IT">IT</option>
        <option value="CSE">CSE</option>
      </select>
					</div>
					</div>
					<br>
                    <div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Batch Year</span></strong>
					</div>
					<div class="col-md-9" >
					<select class="selectpicker form-control" name="year1">
        <option value="first">FIRST</option>
        <option value="second">SECOND</option>
        <option value="third">THIRD</option>
		<option value="fourth">FOURTH</option>
      </select>
					</div>
					</div>
					<br>
					
                    <div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-9" >
       <input type="submit"  name="submit" class="btn btn-success btn-md">
					</div>
					</div>
</form>	
</div>				
</div>
</div>
</div>
<?php include("footer1.php") ?>
 </body> 
 