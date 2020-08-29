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
  <style>
   img:hover{opacity:0.7;
   };
  </style>
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>

<?php 

if(isset($_POST['save']))
{
	
$name=$_POST['event_name'];
	$img=$_FILES['event_img'];
	//$image_name=$_FILES['empimage']['name'];
	$image_name=$img['name'];
	$image_size=$img['size'];
	//echo $image_name;
	$image_path=$img['tmp_name'];
	//echo $image_path;
	$image_type=$img['type'];
	$image_error=$img['error'];
	//echo $image_path;
	//echo "image_name=".$image_name;
	//echo "<br/>image_path=".$image_path;
	$temp=explode(".",$image_name);
	$len=count($temp);
	//print_r($temp);
	//echo $new_path;
$sql="insert into event(event_name) values('$name')";
if(mysql_query($sql))
	{
		$auto_id=mysql_insert_id();
		$new_path="images/$auto_id".".".$temp[$len-1];
		echo "<hr/>";
		//echo $image_path;
		echo "<hr/>";
		//echo $new_path;
		
		if(	move_uploaded_file($image_path,$new_path))
		{
			$sql="update event set event_img='$new_path' where image_id=$auto_id";
			if(mysql_query($sql))
			{
				echo "saved";
			
			header("Location:image.php?event_name=$name");
			}
			else
			echo " error";	
			
			
			echo "uploaded";
			}
	else{echo "uploading error</br>$sql";}
	
}
	else
	{echo "error<br/>$sql";}
	
echo "</hr></br>";




}

//echo $sql;
echo "
<div class='container-fluid' style='min-height:350px; margin-top:50px;'>
<div class='row'><div class='col-md-3'></div>
<div class='col-md-6'><div class='panel panel-info'>
<div class='panel panel-heading'><h2 align='center'>EVENTS</h2></div>
<div class='panel panel-body'>
<form action='image.php' method='post' enctype='multipart/form-data' class='form-horizontal'>
<div class='form-group'>
<label class='col-md-3'>Event Name</label>
<select name='event_name' class='col-md-3'>
<option  value='select'>select</option>";
$sql="select distinct(event_name) from events";
$query=mysql_query($sql);
//echo $sql;
while($row_data=mysql_fetch_array($query))
echo "<option value='$row_data[0]'>$row_data[0]</option>";
echo "</select></div>";
echo "<div class='form-group'>
<label class='col-md-3'>Select Image</label>
<input type='file'  class='col-md-3' name='event_img' value='event_img'/></div>
<div class=form-group'><div class='col-md-4'></div>
<input type='submit' value='save' name='save' class='btn btn-info'/>
<input type='reset' class='btn btn-info'/></div></form></div></div></div></div>
<div class='col-md-3'></div>";

//echo "<form action='image.php' method='post' enctype='multipart/form-data' class='form-horizontal' >";
if(isset($_REQUEST['event_name']))
{
	$name=$_REQUEST['event_name'];
$sql="select * from event where event_name='$name'";
$query=mysql_query($sql);
echo "<div class='row'><div class='col-md-12'><h2 align='center'>IMAGES</h2>";
while($row_data=mysql_fetch_array($query))
{
	echo "
	<img src='$row_data[2]' width='300px' height='300px' class='img  img-square' style='border:5px solid #20ADA4;'/>";
}
echo "</div></div>";
}
echo "</div>";
	?>
	<?php include("footer1.php");?>
</body>
</html>
