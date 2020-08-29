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
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>
<div class='container-fluid'>
<?php 
if(isset($_POST['show'])){
	$id=$_POST['id'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$sql="select * from student_detail where registration_number=$id";
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);
	
	//echo $query;
	if($num>0){
		echo "<div class='row'><div class='col-md-12'><p align='center'><big><b><u>DETAILS</u></b></big></p></div></div></br>
		<div class='row'><div class='col-md-1'></div><div class='col-md-10'>
		<table class='table table-hover'><tr><th>registration id</th><th>first name</th><th>last name</th><th>email id</th><th>gender</th><th>stream</th><th>address</th><th>year</th></tr>";
	while($row_data=mysql_fetch_array($query)){
		echo "
		<tr><td>$row_data[0]</td><td>$row_data[1]</td><td>$row_data[2]</td><td>$row_data[3]</td><td>$row_data[5]</td><td>$row_data[6]</td><td>$row_data[7]</td><td>$row_data[8]</td>
		</table></div><div class='col-md-1'></div>";
	}	
	echo "</div>";
	}
}
else
{
echo "	

<div class='container-fluid' style='min-height:300px; margin-top:50px;'>
<div class='row'><div class='col-md-2'></div>
<div class='col-md-8'><div class='panel panel-success'>
<div class='panel panel-heading'><h2 align='center'>Student Details</h2></div>
<div class='panel panel-body'>
<form action='search.php' method='post' class='form-horizontal'>
<div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>Registration Id</label>
<input type='text' name='id' class='col-md-3'/></br></div>
<div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>Branch</label>
 <select name='branch' value='CSE'>
 <option name='cse'>CSE</option>
 <option name='it'>IT</option></select>
 </div>
 <div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>Year</label>
 <select name='year' value='First Year'>
 <option name='first'>First year</option>
 <option name='second'>Second year</option>
 <option name='third'>Third year</option>
 <option name='fourth'>Fourth year</option></select>
 </div>
 <div class='form-group'>
 <label class='col-md-3'></label>
 <button class='btn btn-info' name='show'>Search</button>
 
 </div>
</form>
</div>
</div></div>
<div class='col-md-2'></div>
</div></div>
";
}
 ?>
 </div>
<?php include("footer1.php");?>
</body>
</html>
