<?php
include("user_info.php");
include("connectdata.php");
?>
<!DOCTYPE html>
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
<?php include('header1.php'); ?>
<?php include('teacher_navbar.php'); ?>
<?php
$db=mysql_select_db($database);
if(isset($_POST['submit']))
{
	$stream2=$_POST['stream1'];
$year2=$_POST['year1'];
$subject2=$_POST['subject1'];
$dob2=$_POST['dob'];
}
?>
<?php
$sql="delete from project where subject='$subject2' && stream='$stream2' && batch='$year2' && last_date='$dob2'";
$querry=mysql_query($sql);
echo"<div class='panel panel-primary'>
<div class='panel-body' style='min-width:320px'>
";
echo "<div  class='text-center'><h3>Project Deleted Successfully</h3></div>
</div>
</div>
";
?>
</body>
<?php include('footer1.php'); ?>
</html>