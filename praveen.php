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
<div class='col-md-4'><h2 >Er. Praveen Kumar Sharma</h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-6'>
<header class='major'>
									
									<img src='teacher/praveen.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'> 
								</header>
								<ul style='list-style-type:disc;'>
									 Assistant Professor (Mathematics),<br>University Institute of Information Technology(UIIT)<br>Himachal Pradesh University, Shimla-171005 
            						<h3>Education</h3>      
									<li>CSIR-UGC NET (Lectureship) Qualified. </li>
									<li>Ph. D.  in Mathematics  from Himachal Pradesh University, Shimla-5 in 2003.</li> 
									<h3>PROFESSIONAL EXPERIENCE</h3>
									<li>Eleven Years 
									<h3>Phone No</h3>	0177-2832571 (office)
									<h3>Email</h3>	praveen.hpu@gmail.com

							</ul>
</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
