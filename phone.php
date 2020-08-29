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
<div class='row'><div class='col-md-12'><table><tr><td><img src='phone1.png'></td><td><h2 align='center'>Telephone Directory!!</h2></td></table><hr style='border:1px solid;'></hr></div></div>
<div class='row'><div class='col-md-2'></div>
	<div class='col-md-8'><p><b>PROFFESSORS</b></p><hr style='border:1px solid;'></hr>
	<ul><li><h4>Prof. Manu Sood : 01975-2445252</h4></li>
	<li><h4>Prof. A: 01975-2445252</h4></li>
	<li><h4>Prof. B : 01975-2445252</h4></li>
	<li><h4>Prof. C : 01975-2445252</h4></li>
	<li><h4>Prof. D : 01975-2445252</h4></li>
	<li><h4>Prof. E : 01975-2445252</h4></li>
	</ul>
</div><div class='col-md-2'></div></div>

<?php include("footer1.php") ?>
</body>
</html>
