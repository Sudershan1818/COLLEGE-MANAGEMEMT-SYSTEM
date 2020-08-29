<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>TEACHING STAFF</title>
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
<?php
echo "<div class='container-fluid' style='min-height:600px; margin-top:20px;'><div class='row'><div class='col-md-5'>
</div>
<div class='col-md-4'><h2 >Er. Anu Mahindru</h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-6'>
<header class='major'>
									
									<img src='teacher/anu.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'> 
								</header>
								<ul style='list-style-type:disc;'>
									Asstt.Prof.(ECE)<br>
						            UIIT, Himachal Pradesh University, Shimla
						            <h3>Education</h3>
						            <li>Diploma from HPTEB in Electronics and Telecommunication (First)</li><br>
						            <li>Bachelor’s Degree(s) from HPU in Electronics and Communication (First)</li><br>
						            <li>Master’s Degree(s) from KSOU in Electronics and Communication (First)</li><br>
						            
						            <h3>Research Experience and Training:</h3>
						            Analysis of vision based and hand tracking Gesture Recognition
						            
						            <h3>PROFESSIONAL EXPERIENCE</h3>
										U.G. (B.A./B.Sc./B.Tech etc. Pass /Hons.) at UIIT (11 years)
								</ul>
</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
