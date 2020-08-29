<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>VIEW RESULT</title>
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
 if(isset($_POST['show']))
{
$branch=$_POST['brnch'];
$batch=$_POST['year_batch'];
$percentage="";
 $sql="select * from student_result where batch='$batch' and branch='$branch' ";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
	if($num>0)
	{
		echo  "<table border=5 width=50% height=50%>";
echo "<tr><th>Student ID</th><th>Batch</th><th>Branch</th><th>Marks</th><th>Percentage</th></tr>";
while($row_data=mysql_fetch_array($query))
{
	$percentage=(($row_data[3]/1350)*100).'%';
	echo "<tr><td>$row_data[0]</td><td>$row_data[1]</td><td>$row_data[2]</td><td>$row_data[3]</td><td>$percentage</td></tr>
	";
	}
	echo "</table>";
	}
	else{
		echo "Not found";
	}
}
else{

echo<<<html_code


<div class="container-fluid" style="min-height:400px; margin-top:80px;">
	<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class='panel panel-success'>
<div class='panel-heading'><h2><u>VIEW RESULT</u></h2></div>
<div class='panel-body'>
<form role='form' class='form-horizontal' action='view_result.php' method='post' >
<div class='container' align='centre'>
<div class="form-group">
<label class="col-md-2">Branch</label>
<div class="col-md-3"><select  class="form-control" name="brnch"><option value="cse">CSE</option><option value="it">IT</option></select></div>
</div>

<div class="form-group">
<label class="col-md-2">Year</label>
<div class="col-md-3"><select class="form-control" name="year_batch"><option value="first">First Year</option><option value="second">Second Year</option><option value="third">Third Year</option><option value="fourth">Fourth Year</option></select></div>
</div>

<div class="form-group">
<label class="col-md-2"></label>
<div class="col-md-3"><input type="submit"  class="form-control btn btn-success" name="show" value="show"/></div>
</div>
</div>
</form>
</div>
</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
html_code;
}
?>

<?php include("footer1.php") ?>
</body>
</html>


