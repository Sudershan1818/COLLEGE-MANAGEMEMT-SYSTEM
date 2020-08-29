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
<?php include("navbar1.php"); ?>
<div class="text-center">
<?php include('connectdata.php')?>
<?php
$db=mysql_select_db($database);
if (empty($_POST["firstname"])&&empty($_POST["lastname"])&&empty($_POST["email"])&&
	empty($_POST["password"])&&empty($_POST["sex"]) &&empty($_POST["stream"])&& empty($_POST["address"])&&empty($_POST["list"])) {
    echo "Information is Required";
	header('Location: student_registration.php');
  }
if(isset($_POST["submit"]))
{
	$target_dir = "document/".md5(rand());
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
if (file_exists($target_file)) {
      echo"file exist";
	  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$first=$_POST["firstname"];
$last=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$sex=$_POST["sex"];
$stream=$_POST["stream"];
$address=$_POST["address"];
$list=$_POST["list"];

        $sql = "INSERT INTO student_detail( registration_number,firstname,lastname,email,password ,sex,stream,address,year,image)
	VALUES ('','$first','$last','$email','$password','$sex','$stream','$address','$list','$target_file')";
  $retval = mysql_query( $sql);
      $auto_id=mysql_insert_id();
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
    echo'<div class="coontainer" class="text-center">
   <h1>Detail submitted successfully</h1>
	</div>';
	echo "<div class='container-fluid'>
	<div class='row'>
	<div class='col-md-4'>
	<img  style='padding-top:20px;'  class='img-responsive' src='$target_file' alt='Student'>
	<br>
	<br>
	<form action='student_registration.php' method='post' class='text-center'>
<button  type='submit' class='btn btn-success' onclick='femo()'>New Registration</button>
</form>
	</div>
	<div class='col-md-8'>
	<div class='panel panel-primary' style='width:100%; margin:20px auto; background-color:#FDFDFD;' >
                    <div class='panel-heading' style='background-color:#648DC3;' ><h2 class='text-center'>Student Registation with Basic Detail</h2></div>
<div class='panel-body' style='background-color:#EAE6E8;'>
   <div class='row'>
   <div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Registration number:</strong></h3>
	  </div>
		 <div class='col-md-4'>
		 <h3> $auto_id </h3>
		 </div>
		 </div>
		
		 <div class='row'>
		 <div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Firstname:</strong></h3>
	  </div>
		 <div class='col-md-4'>
		 <h3> $first </h3>
		 </div>
		 </div>
		 
		  <div class='row'>
		  <div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Lastname:</strong></h3>
	  </div>
		 <div class='col-md-4'>
		 <h3> $last </h3>
		 </div>
		 </div>
		
        <div class='row'>
		<div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Password:</strong></h3>
	  </div>
		 <div class='col-md-4'>
		 <h3> $password </h3>
		 </div>
		 </div>
		 
	    <div class='row'>
		<div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Sex:</strong></h3>
	  </div>
	     
		 <div class='col-md-4'>
		 <h3> $sex </h3>
		 </div>
		 </div>
		 
		  <div class='row'>
		  <div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Stream:</strong></h3>
	  </div>
	    
		 <div class='col-md-4'>
		 <h3> $stream </h3>
		 </div>
		 </div>
		  <div class='row'>
		  <div class='col-md-2'>
		 </div>
   <div class='col-md-6' >
     <h3><strong> Year:</strong></h3>
	  </div>
		 <div class='col-md-4'>
		 <h3> $list </h3>
		 </div>
		 </div>
  </div>
  </div>
  </div>
  </div>
  ";
}
mysql_close($conn); 
?>
<?php include("footer1.php"); ?>
</body>
</html>