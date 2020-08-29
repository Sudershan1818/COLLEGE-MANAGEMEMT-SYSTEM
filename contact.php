<?php 

ob_start();

 include("connection.php"); ?>
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
<?php include("navbar1.php"); ?>
<div class="container-fluid" style="min-height:300px; margin-top:50px;">
<div class='row'><div class='col-md-12'><h2 class='text-center'><b>CONTACT US!!!!</b></h2></div></div>
	<div class="row"><div class='col-md-2'></div>
		<div class="col-md-3">
			<h3 style='padding-left:20%'>Call Us</h3>
		<a href='phone.php'><img src='phone.png'></a></br>
		<label>Phone No. : 134567 (office)</label>		
	</div>
	<div class="col-md-3">
	<h3 style='padding-left:15%'>Email Us</h3>
		<a href='email.php'><img src='email.png'></a>		
	</div>
	<div class="col-md-3">
	<h3 style='padding-left:5%'>Any Queries</h3>
		<a href='query.php'><img src='query.jfif'></a>
	</div>
	<div class='col-md-1'></div>
</div>

<?php include("footer1.php") ?>
</body>
</html>
