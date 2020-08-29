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
<body>
<?php include("header1.php"); ?>
<?php include("nav_bar_student_up_proj.php"); ?>
<?php

$db=mysql_select_db($database);
?>
<?php

if(isset($_POST['submit']))
{
	$reg_no=$_POST['reg_no'];
	$subject=$_POST['subject'];
	$sql="select * from student_detail where registration_number='$reg_no'";
	$query=mysql_query($sql);
	$Student=mysql_fetch_array($query);
	$firstname= $Student[1];
	$stream=$Student[6];;
	$batch=$Student[8];
	$file_name=$_FILES['upload']['name'];
	$target_dir = "student_project/".md5(rand());
$target_file = $target_dir .$_FILES["upload"]["name"];
$s= $_FILES["upload"]["name"];
$uploadOk = 1;
if (file_exists($target_file)) {
      echo"file exist";
	  $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
$sql1="INSERT INTO `project_upload`(`registration_number`,`firstname`,`stream`,`batch`,`subject`,`file_url`) VALUES ('$reg_no','$firstname','$stream','$batch','$subject','$target_file')";
  $retval = mysql_query( $sql1);
   if(! $retval ) {
      die('Could not submit: ' . mysql_error());
   }
    echo'<br><br><br><div class="container-fluid" >
	<div class="panel panel-primary" >
	<div class="panel-body" style="min-height:320px; background-color:#EAE6E8;">
   <h3 class="text-center">Student Project uploaded successfully</h3>
	</div>
	</div>
	</div>';
	?>
	<?php include("footer1.php") ?>
	</body>