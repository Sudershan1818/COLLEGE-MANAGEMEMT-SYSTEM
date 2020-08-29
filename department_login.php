<?php
include("user_info.php");
include("connection.php");
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
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>

<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
		<form class = 'form-group'>
			<center><a href = 'semester.php'><input class = 'form-control btn-success' style = 'width:300px' type ="button" value = "click here for no due's clearence" ></center>
			</form>
			</a>
			
		</div>
		
	</div>
</div>


<?php include("footer1.php") ?>
</body>
</html>
