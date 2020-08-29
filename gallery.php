<?php include("connection.php");?>
<html>
<head>
<title>UIIT</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
  <style>
   img:hover{opacity:0.7;
   };
  </style>
</head>
<body>
<?php include("header1.php"); ?>
<?php include("navbar1.php"); ?>
<?php 

if(isset($_REQUEST['event_name']))
{
	$event=$_REQUEST['event_name'];	
$sql="select * from event where event_name='$event'";
$query=mysql_query($sql);
$row=mysql_fetch_row($query);

echo "<div class='row'><div class='col-md-2'></div><div class='col-md-10'><h2 align='middle' style='color:green;'><u>$row[1]</u></h2></br>";
while($row_data=mysql_fetch_array($query))
{
	echo "
	<img src='$row_data[2]' width='300px' height='300px'  class='img img-square' style='border:2px solid black;'/>";
}
echo "</div>
</div>
<div class='row'><div class='col-md-12'></div></div></div>";
}

else
{
	$sql="select distinct(event_name) from events";
$query=mysql_query($sql);
//echo $query;
echo "
<div class='container-fluid' style='margin-top:100px; min-height:650px;'>
<div class='row'><div class='col-md-1'></div><div class='col-md-10'>
<div class='panel panel-info'>
<div class='panel panel-heading'><h2 align='center'>GALLERY</h2></div>
<div class='panel panel-body'>
<!--<form  method='post' enctype='multipart/form-data' class='from-horizontal'>-->


<!--<select name='event_name' class='col-md-1' >-->
";
while($row_data=mysql_fetch_array($query))
{
$sql1="select * from event where event_name='$row_data[0]'";
$query1=mysql_query($sql1);
$row_data1=mysql_fetch_row($query1);
	echo "<div class='col-md-5'><div class='well'><a href='gallery.php?event_name=$row_data[0]'><img src='$row_data1[2]' width=100/><h3>$row_data[0] </h3>view Gallery</a></div></div>";
}
//echo "<option value='$row_data[0]'></option>";
echo "
</div>
</div></div></div></div>
";
}
?>

<?php  include("footer1.php");?>
</body>
</html>
