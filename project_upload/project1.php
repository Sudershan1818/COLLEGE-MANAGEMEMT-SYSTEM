<?php
include("user_info.php");
include("connectdata.php");
?>



<!DOCTYPE html>
<head>
  <title>UIIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
  <script>
function conform(){
var b=document.getElementById('filetoupload').value;
if(b=="")
{
	return false;
}
var a = document.getElementById('dob').value; 
	Check = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/; 
    if(!a.match(Check)) {  
     alert("Error: Date format: yyyy-mm-dd ");  
     return false;  
    }
else{
return true;
}
}
</script>
 </head>
 <body>
 <?php
 mysql_select_db($database);
?>
 <?php include("header1.php"); ?>
<?php include('teacher_navbar.php'); ?>
<div style='min-height:320px;'>
<div class="container" >          
            <div class="panel panel-primary" style="width:70%; margin:20px auto;background-color:#FDFDFD;" >
                    <div class="panel-heading" style="background-color:#648DC3;">
                        <div class="panel-title" ><div class="text-center"><h3>Project Upload</h3></div></div>
                    </div>     
<div class="panel-body" style="background-color:#EAE6E8;">
<form class="form-group" action="project_upload.php" method="post" onsubmit="return conform()" enctype="multipart/form-data" >

     <?php   
	 if(isset($_POST['submit']))
	 {
	 $branchs=$_POST['stream1'];
	$batchs=$_POST['year1'];
                  echo"  <div style='display:none'><div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Batch Year</span></strong>
					</div>
					<div class='col-md-9' >
					<input type='hidden' name='stream1' value='$branchs' />
					</div>
					</div>
					<br>
					
                    <div class='row'>
					<div class='col-md-3'>
					</div>
					<div class='col-md-9' >";
      echo" <input type='hidden'  name='year1' value='$batchs' />
					</div>
					</div>
					<br>
					</div>";
					echo"<div class='row'>
					<div class='col-md-3'>
					<strong><span style='color:#1C093C;'>Subject</span></strong>
					</div>
					<div class='col-md-9' >";
					
	$sqls="select * from syllabus_upload where branch='$branchs' && batch='$batchs' ";
	$querys=mysql_query($sqls);
	$nums=mysql_num_rows($querys);
	if($nums>0){
	echo "<select name='subject1' class='form-control'style='width:80%;' >";
		while($row_datas=mysql_fetch_array($querys)){
			echo"<option value='$row_datas[2]'>$row_datas[2]</option>";
		}
	echo "</select>";
	}
	echo"</div>
					</div>";
	}
	
?>	
	
					<br>
					<div class="row">
					
					<div class="col-md-3">
					<strong><span style="color:#1C093C;">Project File</span></strong>
					</div>
					<div class="col-md-9" >
       <input type="file" name="filetoupload" value="filetoupload" style='width:80%;' required class="form-control">
					<span class="glyphicon glyphicon-paperclip"></span></div>
					</div>
                   <br>
				   <div class="row">
				  
					<div class="col-md-3">
						<strong><span style="color:#1C093C;">Last date<br>
						For Submission</span></strong>
					</div>
					<div class='col-sm-9'>
               
                     <input name="dob" id="dob" type="text" size="11" style='width:80%;' placeholder="yyyy-mm-dd" required class="form-control">

					 </div>
					
</div>
<br>
                    <div class="row">
					
					<div class="col-md-3">
					</div>
					<div class="col-md-9" >
       <input type="submit"  name="submit" class="btn btn-success btn-md">
					</div>
					</div>
					</form>
					</div>
					</div>
					</div>
</div>		
		<?php include("footer1.php"); ?>
					</body>