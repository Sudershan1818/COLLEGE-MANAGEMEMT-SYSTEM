<?php
session_start();
ob_start();
?>
<html>
<head>
  <title>UIIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
  <script>
  function femo(){
  var y=document.getElementById('subject').value;
var regx=/\S/;
if(!y.match(regx))
{
document.getElementById('span1').style.display="block";
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
<?php include("navbar1.php"); ?>
<div class="container">          
            <div class="panel panel-info" style="width:70%; margin:20px auto;" >
                    <div class="panel-heading" >
                        <div class="panel-title" ><div class="text-center"><h3>Student Assignment Upload</h3></div></div>
                    </div>     
<div class="panel-body" style="background-color:#EAE6E8;">
<form class="form-group" action="student_upload.php" method="post" onsubmit="return femo()" enctype="multipart/form-data" >
<div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Registration Number</span></strong>
					</div>
					<div class="col-md-9" >
					<input type="number" name='reg_no' style='width:80%' required >
					</div>
					</div>
					<br>
					<div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Subject</span></strong>
					</div>
					<div class="col-md-9" >
					<input type="text" name='subject' id='subject' style='width:80%' required >
					<span style="color:red; display:none" id='span1'>Subject Name is Required</span>
					</div>
					</div>
					<br>
					<br>
                    <div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">File</span></strong>
					</div>
					<div class="col-md-9" >
					<input type="file" name="upload" value="upload" style='width:80%' class="form-control" required>
					</div>
					</div>
					<br/>
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
<?php include("footer1.php") ?>
</body>