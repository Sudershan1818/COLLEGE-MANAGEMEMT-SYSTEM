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
<body>
<?php include("header1.php"); ?>
<?php include('teacher_navbar.php'); ?>


<div class="panel panel-primary" style="background-color:#FDFDFD;;width:70%; margin:20px auto; min-height:320px;">
<div class='panel-heading' style="background-color:#648DC3;">
<div class='text-center'>
Detail of Project
</div>
</div>
<div class='panel-body'>
<div class='container' style=' font-size:17px; width:70%;margin:10px auto; padding-left:20%'>
<div class='row'>
<div class='col-md-4'>
<strong>
Stream:</strong>
</div>
<div class='col-md-8'>
<?php
echo $_SESSION['stream'];?>
</div>
</div>
<div class='row'>
<div class='col-md-4'>
<strong>
Subject:</strong>
</div>
<div class='col-md-8'>
<?php
echo $_SESSION['subject'];?>
</div>
</div>
<div class='row'>
<div class='col-md-4'>
<strong>
Batch:
</strong>
</div>
<div class='col-md-8'>
<?php
echo $_SESSION['year']; ?>
</div>
</div>
<div class='row'>
<div class='col-md-4'>
<strong>
Last Date:
</strong>
</div>
<div class='col-md-8'>
<?php
echo $_SESSION['dob']; ?>
</div>
</div>
<div class='row'>
<div class='col-md-4'>
<strong>
View File:
<br>Download:
</strong>
</div>
<div class='col-md-8'>
<a href='<?php
echo $_SESSION['file'];?>'>View File</a>
<br>
<a href='<?php
echo $_SESSION['file'];?>' style="color:red;" download>Download File</a>
</div>
</div>
</div>
</div>
</div>
<?php include("footer1.php") ?>
</body>