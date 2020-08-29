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
<div class='col-md-4'><h2 >Sh. Balbir Singh Thakur</h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-6'>
<header class='major'>
									
									<img src='teacher/balbir.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'>
								</header>
								<ul style='list-style-type:disc;'>
									Asstt.Prof.(CSE/IT)<br>
           							UIIT, Himachal Pradesh University, Shimla
						            <h3>Education</h3>
						            <li>M.Tech (IT) from Pbi.University Patiala(Pb) in Information Technology (first)</li><br>
						            <li>Ph.D from Himachal PradeshU. Shimla (Pursuing)</li><br>
            
 									<h3>PROFESSIONAL EXPERIENCE</h3>
						            <li>U.G. (B.Tech) at UIIT, HPU (10 years)</li>
						            <li>P.G. (M.Sc. Chemistry, Botany & Zoology) in HPU Shimla (6 years)</li>
						            <li>U.G. (B.Tech) at IEET Baddi (HP)Affiliated with HPU Shimla) (1 year)</li>
						            <li>U.G. (BCA) at Arctic College of Computer science Mohali (affiliated with Pbi.Uni. Patiala) (9 months)</li>
						            <li>U.G. (BCA) at W.C.Institute of Management Dera-Bassi(Pb) (affiliated with Pbi.Uni. Patiala) (10 months)</li>            
								    <li>(PCP of PGDCA, BCA,APGDIT, &B.Ed) in ICDEOL HPU (6 years)</li>
						            <li>Worked as Programmer in RCC Centre Chandigarh (now National Institute of IT and Electronics NIELIT) (3 years)</li>						            
						            <h3>Area of research</h3>
						            <li>Data quality and database</li>
						            <h3>Number of Research papers Published:  <strong><i>10</i></strong></h3>            
									<h3>Phone No</h3>0177-2832571 	 
									<h3>Email</h3>balvir.thakur@gmail.com
								</ul>




</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
