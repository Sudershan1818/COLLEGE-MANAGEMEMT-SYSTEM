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
 </head>
<body >
<?php include('header1.php'); ?>
<?php include('teacher_navbar.php'); ?>

<?php
$db=mysql_select_db($database);
if(isset($_POST['submit']))
{
	$stream2=$_POST['stream1'];
$year2=$_POST['year1'];
$subject2=$_POST['subject1'];
}
?>
<?php 
mysql_select_db($database);
$sql27="select * from assignment where subject='$subject2' && batch='$year2' && stream='$stream2'";
$querry27=mysql_query($sql27);
$num27=mysql_num_rows($querry27);
if($num27>0)
{
$sql = "SELECT * FROM student_detail where stream='$stream2' && year='$year2'";
$result = mysql_query($sql);

echo"<div class='panel panel-primary' style='width:100%;background-color:#FDFDFD; ' >
                    <div class='panel-heading'style='background-color:#648DC3;' >
                        <div class='panel-title' ><h3 class='text-center'>Student Project Detail</h3></div>
                    </div>  				
<div class='panel-body' style='background-color:#EAE6E8;font-size:17px;'>
		<div class='container'>
		<div class='row'>
		<div class='col-md-3' style='color:black'>
      <strong>  Registration Number</strong>
		</div>
	<div class='col-md-3' style='color:black'>
      <strong>   First Name</strong> 
		</div>
		<div class='col-md-3' style='color:black'>
       <strong>    [Subject]&nbsp;&nbsp;[batch]&nbsp;&nbsp;[stream] </strong> 
		</div>
		<div class='col-md-3' style='color:black'>
     <strong>    Project </strong> 
		</div>
		</div>
		</div>
		<hr>
		";



if (mysql_num_rows($result) > 0) {
  
    while($row = mysql_fetch_array($result)) 
	{
		$r=$row[0];
		$f=$row[1];
		$b=$row[8];
		$s=$row[6];
		$sql6= "SELECT  * FROM project_upload where registration_number='$r' && subject='$subject2'";
		$query6=mysql_query($sql6);
		
		$url=mysql_fetch_array($query6);
		
			$y=$url[4];
		$x=$url[5];
			
		echo"<div class='container-fluid'>
		<div class='row'>
		<div class='col-md-3' style='color:black'>
		
        $r
		</div>
		<div class='col-md-3'>
		$f
		</div>
		<div class='col-md-3'>
		[$subject2]&nbsp;&nbsp;&nbsp;[$b]&nbsp;&nbsp;&nbsp; [$s]
		</div>
		
		<div class='col-md-3' style='color:red'>";
		if(!$x)
		{
		echo"Assignment Not Submitted";
		}
		else
		{
			echo"<a href='$x' style='color:green'>Download Assignment</a>";
		}
		echo "</div>
		</div>
		</div>
		<hr>";
    }
} else {
    echo "<div class='panel panel-primary' style='width:100%;background-color:#FDFDFD; ' >
	<div class='panel-body' style='background-color:#EAE6E8;font-size:17px; min-height:200px;'>
	<div class='text-center'>No Student Present</div>
	</div>
	</div>
	";
}
echo"</div></div>";
}
else{
	echo "<div class='panel panel-primary' style='width:100%;background-color:#FDFDFD; ' >
	<div class='panel-body' style='background-color:#EAE6E8;font-size:17px; min-height:200px;'>
	<div class='text-center'>No Assignment Present</div>
	</div>
	</div>
	";
	
}
 ?>
 <?php include("footer1.php") ?>
 </body>