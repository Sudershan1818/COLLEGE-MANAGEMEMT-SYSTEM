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
  <script src="bootstrap/js/bootstrap.min.js" type="javascript/text"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
 <script>
$(document).ready(function(){
	$('#form').formvalidation();
});
 </script>
 </head>
 
<body> 
<?php include("header1.php"); ?>
<?php include("navbar1.php"); ?>
<?php 
$m2="";
if(isset($_POST['send'])){
	$email=$_POST['email'];
	$tomail="thakurshikha636@gmail.com";
	$msg=$_POST['text'];
	$sub=$_POST['subject'];
	if(mail($tomail,$sub ,$msg,"From:".$email)){	
		$m2="<h2 style='color:green'>MESSAGE SENT</h2>";
	echo $m2;}
	else {echo "not sent!!!!";}
	}
?>
<div class="container-fluid" style="min-height:300px; margin-top:50px;">
<div class='row'><div class='col-md-2'></div>
<div class='col-md-8'><div class='panel panel-success'>
<div class='panel panel-heading'><h2 align='center'>Email details</h2></div>
<div class='panel panel-body'>
<form action='email.php' method='post' class='form-horizontal' id='form'>
<div class='form-group'> 
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>Enter Your Email-Id</label>
<input type='text' name='email'  class='col-md-5' required data-fv-notempty-message='enter valid email'/></br></div>
<div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>Subject</label>
 <input type='text' name='subject' class='col-md-5'/></div>
 <div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>Type Message</label>
 <textarea cols='49' rows='8' maxlength='70' name='text' required data-fv-notempty-message='enter valid message'></textarea></div>
 <div class='form-group'>
 <label class='col-md-3'></label>
 <button class='btn btn-success' name='send' >Send Mail</button>
 <!--<div class='form-group'>
<div class='col-md-3'></div>
<span class='col-md-5'><?php echo $m2; ?></span></div>-->

 </div>
</form>
</div>
</div></div>
</div>
<?php include("footer1.php") ?>
</body>
</html>
