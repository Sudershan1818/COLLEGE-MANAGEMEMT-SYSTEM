<?php include('user_info.php');
include('connectdata.php');
 ?>
<!DOCTYPE html>
<head>
  <title>UIIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
  <style>

.container {
    padding: 0 16px;
}

.title {
    color: grey;
    font-size: 18px;
}


img:hover, a:hover {
    opacity: 0.7;
}
  </style>
  </head>
   <body >
<?php include('header1.php'); ?>
<?php include('teacher_navbar.php'); ?>
<?php echo'
<div class="container-fluid" style="background-color:#648DC3;">
<h2 style="text-align:center">UIIT Teacher Profile</h2>
<a href="bg.jpg" target="_blank;">
  <img src="dj.jpg"  alt="John" class="img-thumbnail" style="width:40%; margin-left:30%; height:250px">
  </a>
  <div class="container">
    <h1 class="text-center">Shyam</h1>
    <p class="text-center">Assistent Professor</p>
    <p class="text-center">UIIT</p>
  </div></div>
<hr>
';?>
<?php
echo"
<div class='container' style=' style='background-color:#EAE6E8;'>
<h1 class='text-center'>Teacher Detail</h1>
<p style='font-family:sans-serif;'>
	<ul style='list-style-type:disc;'>
									<br>
						            UIIT, Himachal Pradesh University, Shimla
						             <h3>Education</h3>
						            <li>Master's Degree from Himachal Pradesh University in IT (1<sup>st</sup> with Hons.)</li>
						            <li>Bachelor’s Degree from Karnataka State Open University in IT (1<sup>st</sup> with Hons.)</li>						            
						            <h3>Research Experience and Training:</h3>
						            Platform Independence for Web Applications						           
						            <h3>PROFESSIONAL EXPERIENCE</h3>
						            18 years teaching experience<br>
						            <li>U.G. courses (B.A./B.Sc./B.Tech etc. Pass /Hons.) at UIIT HPU Summerhill Shimla (10 years)</li>
									<li>ICDEOL HPU Summerhill Shimla (8 years)</li>						            
									<h3>Phone No</h3>6543654354									 	 
									<h3>Email</h3>	@hpuiitshimla.org
								</ul>

</p>
</div>
</div>
</div>";
 ?>

<?php include('footer1.php'); ?>

</body>