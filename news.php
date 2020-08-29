<?php
include("user_info.php");
include("connection.php");
?>
<html>
<head>
  <title>NEWS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
<script>
$(document).ready(function() {
    $('#news').formValidation();
});
</script>
 </head>
 
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>
 
<?php 
$m="";
if(isset($_POST['enter']))
{
	$sub=$_POST['sub'];
	$image=$_FILES['img'];
	$image_name=$image['name'];
	$image_path=$image['tmp_name'];
	//$image_error=$image['error'];
	$temp=explode(".",$image_name);
	$len=count($temp);
$sql="insert into news(subject) values('$sub')";
if(mysql_query($sql))
	{
		$auto_id=mysql_insert_id();
		$new_path="images1/$auto_id".".".$temp[$len-1];
		echo "<hr/>";
		
		echo "<hr/>";
		
		
		if(	move_uploaded_file($image_path,$new_path))
		{
			$sql="update news set img='$new_path' where image_id=$auto_id";
			if(mysql_query($sql))
			{
				echo "<div class='container' style='height:750px'><h3 class='text-center'> NEWS UPLOADED !</h3></div>";
			}
			else
			echo " error";	
			
		
			}
	else{echo "uploading error";}
	
}
	else
	{}
	
echo "</hr></br>";
}
else {
echo<<<html_code
<div class="container-fluid" style="min-height:400px; margin-top:80px;">
	<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class='panel panel-success'>
<div class='panel-heading'><h2><u>NEWS</u></h2></div>
<div class='panel-body'>
<form role='form' class='form-horizontal' action='news.php' id="news" method='post' enctype='multipart/form-data' data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">
<div class='container' align='centre'>
<div class="form-group">
<label class="col-md-2">Subject</label>
<div class="col-md-4"><textarea cols=30 rows=5 name='sub' id='sub' required
                data-fv-notempty-message="The password is required"></textarea></div>
</div>

<div class="form-group">
<label class="col-md-2">Upload file</label>
<div class="col-md-3"><input type="file" name="img" value="img"></div>
</div>
<div class="form-group">
<label class="col-md-2"></label>
<div class="col-md-3"><input type="submit"  class="form-control btn btn-success" name="enter" value="enter"/></div>
</div>
<div class="form-group">
<label class="col-md-2"></label>
<div class="col-md-3"><a href='viewnews.php' class=' form-control btn btn-success '>View News</a></div>
</div>
</div>
</form>
</div>
</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
html_code;
}
?>
<?php include("footer1.php") ?>
</body>
</html>



