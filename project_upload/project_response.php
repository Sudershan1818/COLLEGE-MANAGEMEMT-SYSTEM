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
function femo()
{
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
<?php include("header1.php"); ?>
<?php include('teacher_navbar.php'); ?>
<?php 
$db=mysql_select_db($database);
?>
<?php
  $sql="select * from project";
  $querry=mysql_query($sql);
 ?>
<body>
<div class="container-fluid">

<div class="panel panel-primary" style="background-color:#FDFDFD;">
<div class="panel-heading" style="background-color:#648DC3;">
<strong>
<h3 class="text-center">
View Project according given Data
</h3>
</strong>
</div>
<div class="panel-body" style="background-color:#EAE6E8;">
<form class="form-group" action="teacherproj_checking.php" method="post" onsubmit='femo();'>
<div class="row">
<div class="col-md-2">
					</div>
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Stream</span></strong>
					</div>
					
					<div class="col-md-7" >
					<select class="selectpicker form-control" style="width:70%" name="stream1">
        <option value="IT">IT</option>
        <option value="CSE">CSE</option>
      </select>
					</div>
					</div>
					<br>
                    <div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-3">
				<strong><span style="color:#1C093C">Batch Year</span></strong>
					</div>
					
					<div class="col-md-7" >
					<select class="selectpicker form-control" style="width:70%" name="year1">
        <option value="first">FIRST</option>
        <option value="second">SECOND</option>
        <option value="third">THIRD</option>
		<option value="fourth">FOURTH</option>
      </select>
					</div>
					</div>
					<br>
					<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-3">
					<strong><span style="color:#1C093C;">Subject</span></strong>
					</div>
					
							<div class="col-md-7" >
		<?php echo"<select  name='subject1' style='width:70%' class='form-control'>";
					while( $result=mysql_fetch_array($querry)){
					echo"<option value='$result[2]' class='form-control' >$result[2]</option>";
					}
					echo"</select>
					</div>
					</div>
					<br>
					";?>
                    <div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-3">
					</div>
					
					<div class="col-md-7" >
       <input type="submit"  name="submit" class="btn btn-success btn-md ">
					</div>
					</div>
					</div>
					</div>
					</div>
<?php include("footer1.php") ?>
</body>
</html>