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
<body style="background-color:#B4BDC1;"> 
<?php include("header1.php"); ?>
<?php include('teacher_navbar.php'); ?>
<div class="text-center">

<?php
$db=mysql_select_db($database);
if (empty($_POST["stream1"])&&empty($_POST["year1"])&&empty($_POST["subject1"])&&empty($_POST["dob"])) {
    echo "Information is Required";
	header('Location: project.php');
  }
if(isset($_POST["submit"]))
{
	$target_dir = "project/".md5(rand());
$target_file = $target_dir .$_FILES["filetoupload"]["name"];
$s= $_FILES["filetoupload"]["name"];
$uploadOk = 1;
if (file_exists($target_file)) {
      echo"file exist";
	  $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
      
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$_SESSION['file']=$target_file;
$stream=$_POST["stream1"];
$_SESSION['stream']=$stream;
$year=$_POST["year1"];
$_SESSION['year']=$year;
$subject=$_POST["subject1"];
$_SESSION['subject']=$subject;
$dob=$_POST["dob"];
$_SESSION["dob"]=$dob;
        $sql = "INSERT INTO project( stream,batch,subject,file_url,last_date)
	VALUES ('$stream','$year','$subject','$target_file','$dob')";
  $retval = mysql_query( $sql);
   if(! $retval ) {
      die('Could not submit: ' . mysql_error());
   }
    echo'<br><br><br><div class="container-fluid" >
	<div class="panel panel-primary" class="text-center" >
	<div class="panel-body" style="min-height:200px; background-color:#EAE6E8;">
   <h1>Project inserted successfully</h1>
	</div>
	</div>
	</div>';
	
}
?>
<form action="teacherproj_view.php" method="post" class="text-center" enctype="multipart/form-data">
<button  type="submit" class="btn btn-success" >View Project</button>
</form>
<?php include("footer1.php"); ?>
</body>
</html>