<?php
include("user_info.php");
include("connectdata.php");
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
<?php include("nav_bar_student_up_proj.php"); ?>
 <?php 
 $db=mysql_select_db($database);
?>
<div class="container">          
<div class='panel panel-primary' style='width:70%; margin:20px auto; background-color:#FDFDFD;' >
                    <div class='panel-heading' style='background-color:#648DC3;' >
                        <div class="panel-title" ><div class="text-center"><h3>Student Updaing Project</h3></div></div>
                    </div>     
<div class='panel-body' style='background-color:#EAE6E8;'>
<form class="form-group" action="updating_student_projectupload.php" method="post" onsubmit="return femo()" enctype="multipart/form-data" >
<div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Registration Number</span></strong>
					</div>
					<div class="col-md-9" >
					<?php 
					$stid=$_SESSION['uid'];
					echo"<input type='number' class='form-control' name='reg_no' style='width:80%' value='$stid' required  readonly >";
					
					?>
					</div>
					</div>
					<br>
					<div class="row">
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Subject</span></strong>
					</div>
					<div class="col-md-9" >
					<input type="text"  name='subject' value='<?php echo $_SESSION['subject12']; ?>' style='width:80%' class="form-control" readonly >
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