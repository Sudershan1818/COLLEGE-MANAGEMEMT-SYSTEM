<?php
include("user_info.php");
include("connection.php");
?>
<html>
<head>
  <title>WELCOME</title>
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
<div class="container-fluid" style="min-height:400px; margin-top:80px;">
	<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class='panel panel-warning'>
<div class='panel-heading'><h2><u>WELCOME</u></h2></div>
<div class='panel-body'>
<form role='form' class='form-horizontal' method='post'>
<div class='form-group'>
<div class="col-md-4"></div>
<div class='col-md-6'>
<a href='news.php' class='btn btn-warning'>Upload new news</a>
</div>
<div class="col-md-2"></div>
</div>
<div class='form-group'>
<div class="col-md-4"></div>
<div class='col-md-6'>
<a href='menu.php' class='btn btn-warning'>Upload new event</a>
</div>
<div class="col-md-2"></div>
</div>
<div class='form-group'>
<div class="col-md-4"></div>
<div class='col-md-6'>
<a href='syllabus_upload4.php' class='btn btn-warning'> Upload syllabus  &nbsp;</a>
</div>
<div class="col-md-2"></div>
</div>
<div class='form-group'>
<div class="col-md-4"></div>
<div class='col-md-6'>
<a href='semester.php' class='btn btn-warning'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clearance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
</div>
<div class="col-md-2"></div>
</div>
</div>
</form>
</div>
</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php include("footer1.php") ?>
</body>
</html>

