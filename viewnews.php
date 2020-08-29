<?php include("user_info.php"); 
include("connection.php")?>
<html>
<head>
  <title>NEWS</title>
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
<div class="container-fluid" style="min-height:400px; margin-top:30px;">
 <?php 
 if(isset($_REQUEST['newid']))
	{
		$id=$_REQUEST['newid'];
		$sql1="update news set status='1' where image_id='$id'";
		$query=mysql_query($sql1);
		if(mysql_query($sql1))
			{
				echo "<div class='container' style='height:750px'><h3 class='text-center'> NEWS DISABLED !</h3></div>";
			}
			else
			echo " error";
		
	}
	if(isset($_REQUEST['oldid']))
	{
		$id=$_REQUEST['oldid'];
		$sql2="update news set status='0' where image_id='$id'";
		$query1=mysql_query($sql2);
		if(mysql_query($sql2))
			{
				echo "<div class='container'><h3 class='text-center'> NEWS ENABLED !</h3></div>";
			}
			else
			echo " error";
	}
 $sql="select * from news";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
	if($num>0)
	{
		echo  "<div class='panel panel-primary'>
		<div class='panel-heading'><h3 class='text-center'>News</h3></div>
	<div class='panel-body'>
		<div class=' row'><div class='col-md-2'></div>
		<div class='col-md-8'><table class='table table-hover'>";
      echo"<thead>";
while($row_data=mysql_fetch_array($query))
{
	echo "<tr><td><b> $row_data[1]</b></td>
	<td><a href='viewnews.php?newid=$row_data[0]' style='color:red;'>Disable</a></td>
	<td><a href='viewnews.php?oldid=$row_data[0]' style='color:green'>Enable</a></td></tr>
	";
	}
	echo "</table></div>
	<div class='col-md-2'></div></div></div></div>";
	}
	else{
		echo "Not found";
	}
	
 ?>
</div>
<?php include("footer1.php") ?>
</body>
</html>


