<?php
include("user_info.php");
include("connection.php");
?>
<html>
<head>
  <title>UIIT</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>
<?php
echo "
<div class='container-fluid' style='height:300px; margin-top:50px;'>
<div class='row'><div class='col-md-3'></div>
<div class='col-md-6'><div class='panel panel-info'>
<div class='panel panel-heading'><h2 align='center'>EVENT WINDOW</h2></div>
<div class='panel panel-body'><div class='col-md-1'></div>
<div class='col-md-10'>
<a href='create.php' class='btn btn-info'>Create New Event</a>
<a href='image.php' class='btn btn-info'>Insert Images </a>
<a href='gallery.php' class='btn btn-info'>View Gallery</a></div>
<div class='col-md-1'></div>
</div></div>
</div>	
<div class='col-md-3'></div>
</div>
</div>";
?>

<?php include("footer1.php");?>
</body>
</html>
