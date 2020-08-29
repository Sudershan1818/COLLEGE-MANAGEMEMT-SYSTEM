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
<div class='col-md-4'><h2 >Er. Akshay Bhardwaj</h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-6'>
<header class='major'>
									
									<img src='teacher/akshay.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'> 
								</header>
								<ul style='list-style-type:disc;'>
									Asstt.Prof.(CSE/IT)<br>
						            UIIT, Himachal Pradesh University, Shimla
						             <h3>Education</h3>
						            <li>Master's Degree from Himachal PradeshUniversity in IT (1<sup>st</sup> with Hons.)</li>
						            <li>Bachelor’s Degree from Karnataka State Open University in IT (1<sup>st</sup> with Hons.)</li>						            
						            <h3>Research Experience and Training:</h3>
						            Platform Independence for Web Applications						           
						            <h3>PROFESSIONAL EXPERIENCE</h3>
						            18 years teaching experience<br>
						            <li>U.G. courses (B.A./B.Sc./B.Tech etc. Pass /Hons.) at UIIT HPU Summerhill Shimla (10 years)</li>
									<li>ICDEOL HPU Summerhill Shimla (8 years)</li>						            
									<h3>Phone No</h3>94184-82826									 	 
									<h3>Email</h3>	akshay@hpuiitshimla.org
								</ul>








</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
