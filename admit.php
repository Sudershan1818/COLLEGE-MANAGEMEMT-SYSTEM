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
<?php include("nav_bar_student.php"); ?>

<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		
		
		<div class="col-md-12">
		<?php
		$uid=$_SESSION['uid'];
		
		
		echo"<form class = 'form-group'>";
		echo"<center><a href = 'admit_card.php?reg_id=$uid'>
		<input  type = 'button' style = 'width:300px' class = 'form-control btn btn-success' name = 'btn' value = 'click here to download admit card'/></a></center>
	</form>";
	?>
		</div>
	</div>
</div>
<?php include("footer1.php") ?>
</body>
</html>
