<?php
include("user_info.php");
include("connection.php");
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
$(document).ready(function(){
	$('#form').formvalidation();
});
 </script>
 
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>
<?php 

if(isset($_POST['save']))
{
	$name=$_POST['event_name'];
	$auto_id=mysql_insert_id();
	$sql="insert into events(event_name) values('$name')";
	
	//echo $sql;
	if(mysql_query($sql)){
		//echo "event created";
		
	}
	else
	{echo "error<br/>$sql";}
}	
	echo "
	<div class='container-fluid' style='min-height:350px; margin-top:50px;'>
	<div class='row'><div class='col-md-3'></div>
	<div class='col-md-6'><div class='panel panel-info'>
	<div class='panel panel-heading'><h2>CREATE NEW EVENT</h2></div>
	<div class='panel panel-body'>
	<form class='form-horizontal' action='create.php' method='post' id='form' role='form'>
	<div class='form-group'>
	<label class='col-md-3'>Enter New Event Name</label>
	<input type='text' class='col-md-3' name='event_name' class='form-control' required data-fv-notempty-message='please enter name'/></div>
	<div class='form-group'><div class='col-md-3'></div>
	<button class='btn btn-success' align='middle' name='save'>create</button></div>
</form></div></div></div>
<div class='col-md-3'></div></div></div>
	";
?>		
<?php include("footer1.php");?>
</body>
</html>
