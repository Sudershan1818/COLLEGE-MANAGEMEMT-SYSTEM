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
<?php 
$m2="";
$m3="";
if(isset($_POST['send'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['text'];
	$email_exp='/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/';
	 $string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($email_exp , $email) && !preg_match($string_exp,$msg)){
		$m2="<b style='color:red'>* invalid..please enter valid entry</b>";
	}
	else{
	$sql="insert into query(name,email,subject,message) values('$name','$email','$subject','$msg')";
	if(mysql_query($sql)){
		header("location:query.php?name=$name");
	}
	}
	//else echo "error</br>$sql";
}
?>
<div class="container-fluid" style="min-height:300px; margin-top:50px;">
<div class='row'><div class='col-md-2'></div>
<div class='col-md-8'><div class='panel panel-success'>
<div class='panel panel-heading'><h2 align='center'>QUERIES</h2><hr style='border:2px solid'/></div>
<div class='panel panel-body'>
<form action='query.php' method='post' class='form-horizontal'>
<div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>NAME</label>
<input type='text' name='name' class='col-md-4'/></br></div>
<div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>EMAIL</label>
<input type='text' name='email' class='col-md-4'/></br></div>
<div class='form-group'>
<div class='col-md-3'></div>
<span class='col-md-4'><?php echo $m2;?></span></div>
<div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>SUBJECT</label>
 <input type='text' name='subject' class='col-md-4'/></div>
 <div class='form-group'>
<label style='font-size:15px; font-style:arial,cursive;' class='col-md-3'>MESSAGE</label>
 <textarea cols='49' rows='8' maxlength='70' name='text'></textarea></div>
 <div class='form-group'>
<div class='col-md-3'></div>
<span class='col-md-4'><?php echo $m2;?></span></div>

 </div>
 <div class='panel panel-footer'>
 <div class='form-group'>
 <label class='col-md-3'></label>
 <button class='btn btn-success' name='send'>Send Query</button>
 </div>
 </div></form>
 </div></div></div></div>

<?php include("footer1.php") ?>
</body>
</html>
