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
 $sql11="select * from student_detail where registration_number='$uid'";
 $query11=mysql_query($sql11);
 $rowdata11=mysql_fetch_array($query11);
 $stream11=$rowdata11[6];
 $batch11=$rowdata11[8];
 
 ?>
  <?php
  $sql="select * from project";
  $querry=mysql_query($sql);
 
  echo"<div class='container' style='min-height:320px'>

<div class='panel panel-primary' style='width:70%; margin:20px auto; background-color:#FDFDFD;' >
                    <div class='panel-heading' style='background-color:#648DC3;' >
<strong >
<h3 class='text-center'>
Select the Subject
</h3>
</strong>
</div>
<div class='panel-body' style='background-color:#EAE6E8;'>
<form class='form-group' action='studentproj_check.php' method='post' onsubmit='femo();'>";
echo"<div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Stream</span></strong>
					</div>
					<div class='col-md-9' >
					<select class='selectpicker form-control' name='stream' style='width:70%'>";
         if($stream11=='CSE'){
		 echo" <option value='CSE'>CSE</option>"; }
		else{
       echo"<option value='IT'>IT</option>";
	    }
    echo"  </select>
					</div>
					</div>
					<br>
					<div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Batch</span></strong>
					</div>
					<div class='col-md-9' >
					
					<select class='selectpicker form-control' name='batch' style='width:70%'>";
         if($batch11=='first'){
		echo"<option value='first'>FIRST</option>";}
		else if($batch11=='second'){
        echo"<option value='second'>SECOND</option>";}
		else if($batch11=='third'){
        echo"<option value='third'>THIRD</option>";}
		else if($batch11=='fourth'){
		echo"<option value='fourth'>FOURTH</option>";}
     echo" </select>
					</div>
					</div>
					<br>
					<div class='row'>
					<div class='col-md-3'>
				<strong><span style='color:#1C093C'>Subject</span></strong>
					</div>
					<div class='col-md-9' >
					<select  name='subject' style='width:70%' class='form-control'>";
					while( $result=mysql_fetch_array($querry)){
					echo"<option value='$result[2]' class='form-control' >$result[2]</option>";
					}
					echo"</select>
					</div>
					</div>
					<br>
					";
					echo"<div class='row'>
					<div class='col-md-3'>
				
					</div>
					<div class='col-md-9' >
					<input type='submit' name='submit' class='btn btn-success' class='btn-md'/>
					</div>
					</div>
					</form>
</div>		
</div>
</div>";
?>
<?php include("footer1.php") ?>
		</body>
					</html>