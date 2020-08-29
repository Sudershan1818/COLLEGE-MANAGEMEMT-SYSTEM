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
  <script>
  function empty_check(reg_id1,reg_id_span)
{
var v1=document.getElementById('reg_id1').value;

if(v1.trim().length==0)
{	var msg = "error";
	document.getElementById('reg_id_span').innerHTML = msg;
}
else{
	
	document.getElementById('reg_id_span').innerHTML = "";
}

}

  </script>
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>

<div class='container-fluid' style='min-height:300px; margin-top:50px;'>
	<div class='row'>
		<div class='col-md-12'>
		<div class = 'panel panel-sm'>
		<div class = 'panel-body'>
		<form class = "form" action = 'clearence.php' method = 'post'>
			<center><table class = 'table' width = '40%' >
			<tr><th>enter the registeration id of the student</th><td><input class = 'form-control' type = 'text' id = 'reg_id1' name = 'reg_id' onkeyup = "empty_check('reg_id1','reg_id_span')"></td><td><span id='reg_id_span' ></span></td></tr>
			<tr><td></td><td><input style = 'width:100px' class = 'form-control btn-success' type = 'submit' name = 'Go' value = 'go'/></td><td></td></tr>
			</table></center> 
		</form>
		</div>
		</div>
		</div>
		
	</div>
</div>

<?php include("footer1.php") ?>
</body>
</html>
