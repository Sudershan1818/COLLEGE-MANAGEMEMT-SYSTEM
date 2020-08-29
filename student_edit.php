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
<div class="container-fluid" style="min-height:320px;">
<?php
 echo"
 <div class='panel panel-info'>
  
  <div class='panel-heading'><h3 class='text-center text-success'>Detail</h3></div>
  <div  class='panel-body'>
    <div class='row'>";
 $rno=$_SESSION['uid'];
   if(isset($_POST['s1'])){
	    $rno=$_SESSION['uid'];  //   registration number 
		$firstname=$_POST['f1'];
		$lastname=$_POST['l1'];
		$sex=$_POST['sexedit'];
		$address=$_POST['a1'];
		$email=$_POST['email'];
		$sql="update  student_detail set firstname='$firstname' , lastname='$lastname' , sex='$sex' , address='$address' , email='$email' where registration_number='$rno' ";
		$query=mysql_query($sql);
		
		$new_sfile=$_FILES['img1'];
		$new_sfile_name=$new_sfile['name'];
		$old_url=$_POST['old_url'];
		
		
		if($new_sfile_name!="")
		{
		$sfile_path=$new_sfile['tmp_name'];
		
		
		
		$temp=explode(".",$new_sfile_name);
		$len=count($temp);
		$new_sfile_path="document/".$rno.".".$temp[$len-1];
		
		$sql1="update  student_detail set image='$new_sfile_path' where registration_number='$rno'";
		
		
		if(mysql_query($sql1))
		{
		if($new_sfile_name!="")	
		{
        unlink($old_url);			
		move_uploaded_file($sfile_path,$new_sfile_path);
		}
			
		}}
		
   
   
   
   }
	if(isset($_REQUEST['act'])){
		$sql="select * from student_detail where registration_number='$rno' ";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		$rowdata=mysql_fetch_array($query);
	echo"<div class='col-md-4'>";
		
		
		echo "<form action='student_edit.php' method='post' enctype='multipart/form-data'>
		<strong>select image</strong><br /><input type='file' class='form-control' name='img1'/></div>
		<input type='hidden' name='old_url' value='$rowdata[9]'/>";
	echo"
	<div class='col-md-8'>
	
	<table class='table'>
	<tr><th>Registration number</th><td> $rowdata[0] </td></tr>
	<tr><th>First Name</th><td><input type='text' class='form-control' name='f1' value='$rowdata[1]' /></td></tr>
	<tr><th>Last Name</th><td> <input type='text' class='form-control' name='l1' value='$rowdata[2]' /></td></tr>
	<tr><th>Sex</th><td> "; 
	if($rowdata[5]=='male'){
	echo"<input type='radio' name='sexedit' value='male'  checked />male<input type='radio' name='sexedit' value='female' />female";
	}
	else{
	echo "<input type='radio' name='sexedit' value='male'/>male<input type='radio' name='sexedit' value='female' checked />female";
		
	}
	
	
	echo"</td></tr>
	<tr><th>Stream</th><td>$rowdata[6] </td></tr>
	<tr><th>Year</th><td>  $rowdata[8] </td></tr>
		<tr><th>Address</th><td> <input type='text' class='form-control' name='a1' value='$rowdata[7]' /></td></tr>
	<tr><th>Email</th><td>   <input type='text' class='form-control' name='email' value='$rowdata[3]' /> </td></tr>
	
	</table>
	<div class='row'><div class='col-md-3'></div><div class='col-md-3'><input type='submit' name='s1' value='save' class='form-control btn btn-success'/></div><div class='col-md-6'></div></div>
	
	</form></div>";
	
	
	
	}
	else
	{
	$sql="select * from student_detail where registration_number='$rno'";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
 $rowdata=mysql_fetch_array($query);
	echo"<div class='col-md-4'>";
		
		
		echo "<img src='$rowdata[9]' class='img img-responsive img-circle'/></div>";
		
		
		echo"
	<div class='col-md-8'>
	
	<table class='table'>
	<thead><tr><th>Registration number</th><td>  $rowdata[0] </td></tr></thead>
	<tr><th>First Name</th><td>  $rowdata[1] </td></tr>
	<tr><th>Last Name</th><td>  $rowdata[2] </td></tr>
	<tr><th>Sex</th><td>  $rowdata[5] </td></tr>
	<tr><th>Stream</th><td>$rowdata[6] </td></tr>
	<tr><th>Year</th><td>  $rowdata[8] </td></tr>
	<tr><th>Address</th><td>  $rowdata[7] </td></tr>
	<tr><th>Email</th><td>  $rowdata[3] </td></tr>
	
	</table>
	<a href='student_edit.php?act=0' class='btn btn-warning' role='button'><strong> &nbsp &nbsp Edit &nbsp &nbsp <strong></a>
	</div>";
  
	}
  echo"</div>
  </div>

</div>";

?> 
</div>

<?php include("footer1.php") ?>
</body>
</html>