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

<div class="container-fluid" style="min-height:400px">

<?php


//if(isset ($_POST['brnch']))
{   
	$stuid=$_SESSION['uid'];
	$sql6="select * from student_detail where registration_number='$stuid' ";
	$query6=mysql_query($sql6);
	$row=mysql_fetch_array($query6);
	
	$branch=$row[6];
	$batch=$row[8];
		echo"<div class='panel-group'>";
		echo "<div class='panel panel-info'> ";
			echo "<div class='panel-heading text-center'><h3>Syllabus</h3></div>";
	echo "<div class='panel-body'>";
		$sql1="select subject,subjectcode,syllabus_url from syllabus_upload where batch='$batch' && branch='$branch' ";
		$query1=mysql_query($sql1);
		$num=mysql_num_rows($query1);
		
		if($num>0){
			echo "<table class='table table-hover' >";
			echo "<tr><th>S. No.</th><th>Subject Name</th><th>Subject Code</th><th></th></tr>";
			$i=1;
			while($row_data=mysql_fetch_array($query1))
			{
				
				echo "<tr>
				<td>$i</td>
				<td>$row_data[0]</td>
				<td>$row_data[1]</td>
				<td><a href='$row_data[2]' download>Download Syllabus</a></td>
				 </tr>";
				
				
				$i++;
			}
			echo" </table></div></div>";
		}
		else{
			echo "<div class='panel'>no syllabus found</div>";
		}
	echo "</div>";
	}

/* else {
	echo <<<html_code
<div class="panel panel-info" >
 <div class="panel-heading"><h2 class="text-center">Syllabus</h2></div>
<div class="panel-body">
 <form role="form" class="form-horizontal" action='syllabus_show.php' method='post'>

<div class="form-group">
<label class="col-md-4 text-right">Branch</label>
<div class="col-md-4"><select  class="form-control" name="brnch"><option value="CSE">CSE</option><option value="IT">IT</option></select></div>
</div>

<div class="form-group">
<label class="col-md-4 text-right">Year</label>
<div class="col-md-4"><select class="form-control" name="year_batch"><option value="first">First Year</option><option value="second">Second Year</option><option value="third">Third Year</option><option value="fourth">Fourth Year</option></select></div>
</div>


<div class="form-group">
<label class="col-md-4"></label>
<div class="col-md-4"><input type="submit"  class="form-control btn btn-success " name="show" value="Show Syllaus"/></div>
</div></form>	</div></div>

html_code;
}*/
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
