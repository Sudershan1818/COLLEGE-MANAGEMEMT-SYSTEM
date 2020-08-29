<?php
include("user_info.php");
include("connectdata.php");
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
<?php include("nav_bar_student_up_proj.php"); ?>
<?php

$db=mysql_select_db($database);
?>
<div>
<?php
$stid=$_SESSION['uid'];
if(isset($_POST['submit']))
{
	$subject=$_POST['subject'];
	$batch=$_POST['batch'];
	$stream=$_POST['stream'];
	
}
$_SESSION['subject12']=$subject;
$sql20= "SELECT  * FROM student_upload where registration_number='$stid'";;
$query20=mysql_query($sql20);
		
		$url=mysql_fetch_array($query20);
		$x=$url[5];
$sql="select * from project where subject='$subject' && stream='$stream'&& batch='$batch'";
$query=mysql_query($sql);
$num8=mysql_num_rows($query);
echo "<div  class='panel-group'>";
if($num8>0)
{
while($result=mysql_fetch_array($query))
{	
if(date("Y-m-d")<=$result[4])
{  
$sql4="select file_url from project_upload where registration_number='$stid' && subject='$subject' ";
	$querry4=mysql_query($sql4);
	$num=mysql_num_rows($querry4);
	if($num==0)
	{
echo "          
            <div class='panel panel-primary' style='width:70%; margin:20px auto; background-color:#FDFDFD;' >
                    <div class='panel-heading' style='background-color:#648DC3;' >
                        <div class='panel-title' ><div class='text-center'<h3>Student Project $result[2]</h3></div></div>
                    </div>     
<div class='panel-body' style='background-color:#EAE6E8;'>

					<br>
                    <div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Download</span></strong>
					</div>
					<div class='col-md-9' >
					<strong>Assignment of Student due to last date $result[4] </strong>
					<br/>
						<a href='$result[3]' target='_blank'>View File</a>
						<br/>
   <a href='$result[3]' download>Download</a>
						<br/>
						<a href='student_project.php'>Upload Project</a>
					</div>
					</div>
					
</div>
</div>";
}
	else{
		echo"         
           <div class='panel panel-primary' style='width:70%; margin:20px auto; background-color:#FDFDFD;' >
                    <div class='panel-heading' style='background-color:#648DC3;' >
                        <div class='panel-title' ><div class='text-center'<h3>Student Project $result[2] </h3></div></div>
                    </div>     
<div class='panel-body' style='background-color:#EAE6E8;'>
					<br>
                    <div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Download</span></strong>
					</div>
					<div class='col-md-9' >
					<a href='$result[3]' target='_blank'>View File</a>
						<br/>
   <a href='$result[3]' download>Download</a>
						<br/>
						<a href='updating_student_project.php'>Updating Project</a>
						<br>
					Last Date of Project is $result[4].<br/>
				     Last updated Project is<br>
                      <a href='$x'>View File</a> 
					</div>
					</div>
					
</div>
</div>";
	}

}

else
{
	echo"         
            <div class='panel panel-primary' style='width:70%; margin:20px auto; background-color:#FDFDFD;' >
                    <div class='panel-heading' style='background-color:#648DC3;' >
                        <div class='panel-title' ><div class='text-center'<h3>Student Project $result[2]</h3></div></div>
                    </div>     
<div class='panel-body' style='background-color:#EAE6E8;'>

					<br>
                    <div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Download</span></strong>
					</div>
					<div class='col-md-9' >
					Last Date of Project is $result[4].<br/>
					Sorry you can't upload Project. 
					</div>
					</div>
					
</div>
</div>";
}
}
}
else{
	echo'<br><br><br><div class="container-fluid" >
	<div class="panel panel-primary">
	<div class="panel-body" style="min-height:320px; background-color:#EAE6E8;">
   <h2 class="text-center">Project not given</h2>
	</div>
	</div>
	</div>';
}
echo "</div>";
?>
</div>
<?php include("footer1.php") ?>
</body>