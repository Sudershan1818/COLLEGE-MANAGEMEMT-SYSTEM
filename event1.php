<?php 

ob_start();

 include("connection.php"); ?>
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
<?php include("navbar1.php"); ?>
<div class='row'><div class='col-md-8'><div class='well' width='100%' height='35%' align='center'>
<p align='middle'>EVENTS</p>

<?php 

if(isset($_POST['save']))
{
	
$name=$_POST['event_name'];
	$img=$_FILES['event_img'];
	//$image_name=$_FILES['empimage']['name'];
	$image_name=$img['name'];
	$image_size=$img['size'];
	$image_path=$img['tmp_name'];
	$image_type=$img['type'];
	$image_error=$img['error'];
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
		if(	move_uploaded_file($image_path,$new_path))
		{
			$sql="update event set event_img='$new_path' where image_id=$auto_id";
			if(mysql_query($sql))
			echo "saved";
			else
			echo " error";	
			}
	else{echo "uploading error";}
	

}
	else
	{echo "error<br/>$sql";}
	$sql="select distinct(event_name) from events";
$query=mysql_query($sql);
echo $sql;
while($row_data=mysql_fetch_array($query))
//echo $row_data;
echo "<option value='$row_data[0]'>$row_data[0]</option>";

//echo $sql;
echo "<form action='image.php' method='post' enctype='multipart/form-data' class='form-horizontal' >";
echo "<div class='form-group' >
<label class='col-md-3'>Event</label>
<select name='event_name' class='col-md-3'>
<option  value='select'>select</option>";
echo "</select></div";

echo"
<div class='form-group'>
<label class='col-md-3'>Images</label>
<input type='file' class='col-md-3' name='event_img' value='event_img'/></div>
<div class=form-group'>
<input type='submit' value='save' name='save' class='btn btn-info'/>
<input type='reset' class='btn btn-info'/></div></form>
";
echo "</table>";
echo "</form>";
echo "</div>";
?>			
	</div>	
</body>
</html>
