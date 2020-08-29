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
<div class='col-md-4'><h2 >Dr. Dhirendra Sharma</h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-6'><header class='major'>
									
									<img src='teacher/dhirender.jpg' class='img img-responsive img-circle' style='float:right; border:3px solid green' width='300px' height='300px'>
								</header>
								<ul style='list-style-type:disc;'>
									<li>Associate Professor (Programming)
									<br>and Incharge- Training and Placements
								    <br>University Institute of Information Technology
								    <br>Himachal Pradesh University, Shimla </li>
									<li>Incharge- HPU, Campus Wide Optical Fibre Networking, UIIT, Himachal Pradesh University, Shimla</li>
									
								    <h3>Research Interests:</h3>
									<li>Computer  Networking (Wired, Wi-Fi and Wireless Sensor Network): Design, Performance and Efficiency </li>		
									<li>Smart City Solution: In respect of Environmental Monitoring & Disasters Preparedness using ICT and WSN.</li>
									<li>Diffusion of Innovation (ICT)</li>

									<h3>EDUCATION</h3>

									<li>Ph.D, Computer Science and Engineering. (Faculty of Engineering & Tech) C.D.L. University, Sirsa, Haryana, India (2011) on 'ICT Application in the universities of western Himalayan Region (Based on Networking, its performance & efficiency)'</li>
									<li>MBA, Maastricht School of Management, Netherlands.(1998).</li> 
									<li>MS (Software Systems), Birla Institute of Technology & Science, Pilani (1996)</li>
									<li>MSc Physics (Spl- Electronics), H. P. University, Shimla, India (1989). </li>
									<li>B.Sc Physics (Honors) (Spl Electronics, Sri Sathya Sai Institute of Higher Learning, Prashanti Nilayam, A.P</li>


									<h3>PROFESSIONAL EXPERIENCE</h3>
									20 years( 15 yrs- Teaching  and 5 yrs Industrial)<br>
									Working with University Institute of Information Technology, Himachal Pradesh University, Shimla, India since 2001:
									<h3>Phone No</h3>
										2833681(office)
									 	 
									<h3>Email:</h3>
										uiit.shimla@rediffmail.com
							</ul>
</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
