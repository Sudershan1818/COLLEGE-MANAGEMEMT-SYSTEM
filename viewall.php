<?php ob_start(); 
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
<?php include("navbar1.php"); ?>
<div class="container-fluid" style="min-height:400px; margin-top:30px;">
 <?php 
 $sql="select * from news where status=0";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
	if($num>0)
	{
		echo  "<div class='container'><div class='row'><div class='col-md-3'></div>
		<div class='col-md-6'><table height=50%>";
echo "<tr><th><h1><u>News</u></h1></th></tr>";
while($row_data=mysql_fetch_array($query))
{
	echo "<tr><td><a href='$row_data[2]' target='_blank'><b> $row_data[1]</b></a></td></tr>
	";
	}
	echo "</table></div>
	<div class='col-md-3'></div></div></div>";
	}
	else{
		echo "Not found";
	}
 ?>
</div>
<?php include("footer1.php") ?>
</body>
</html>


