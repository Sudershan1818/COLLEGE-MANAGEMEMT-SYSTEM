<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>RESULT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
<script>
$(document).ready(function() {
    $('#result').formValidation();
});
</script>
 </head>
 
<body> 
<?php include("header1.php"); ?>
<?php include("navbar1.php"); ?>

<?php 
if(isset($_POST['submit']))
{
	$branch2=$_POST['branch1'];
	$batch2=$_POST['batch1'];
	$stuid=$_POST['stuid'];
	$marks=$_POST['marks'];
    $max=$_POST['max_stu'];

	$errr=0;
	for($i=0;$i<$max;$i++)
{
	
	$sql1="select studentid from student_result where studentid=$stuid[$i]";
	$query2=mysql_query($sql1);
	$numrow=mysql_num_rows($query2);
	if($numrow>0){
	$sql="update student_result set marks=$marks[$i] where studentid=$stuid[$i]";
	}
	else{
	$sql="insert into student_result(studentid,batch,branch,marks) 
	values('$stuid[$i]','$batch2','$branch2','$marks[$i]')" ;
	}
	if(mysql_query($sql)){
	}
	else{;
	 $errr++;
	}
}
	if($errr==0)
	{echo "<div class='container' style='height:750px'><h3 class='text-center'> RESULT SAVED !</h3></div>";}
else{ echo "<div class='container' style='height:750px'><h3 class='text-center'>Error On Updating Data Of $errr Students</h3></div>"; }
}
	


else if(isset($_POST['select']))
{
$branch=$_POST['brnch'];
$batch=$_POST['year_batch'];
 $sql="select registration_number,firstname,stream,year from student_detail where year='$batch' and stream='$branch' ";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
if($num>0){
	echo "<div class='text-center'><h3>Result</h3></div><form action='result.php' method='post' id='result'
    data-fv-framework='bootstrap'
    data-fv-icon-valid='glyphicon glyphicon-ok'
    data-fv-icon-invalid='glyphicon glyphicon-remove'
    data-fv-icon-validating='glyphicon glyphicon-refresh'>";
	
echo "<div style='display:none'><input type='hiddden' name='branch1' value='$branch' />
<input type='hiddden' name='batch1' value='$batch' /></div>";
echo "<div class='container'><table class='table table-hover' >";
echo "<tr><th>SudentId</th><th>Name</th><th>Marks</th><tr>";
$i=1;
while($row_data=mysql_fetch_array($query)){

	echo "<tr>
	<td><input type='hidden' name='stuid[]' value=$row_data[0] />$row_data[0]</td>
	<td>$row_data[1]</td>
	<td><input type='text' name='marks[]' required
                data-fv-notempty-message='The marks are required'/></td>
	</tr>
	";
	$i++;

	}
	$i--;
echo "<input type='hidden' name='max_stu' value=$i />";	
echo "</table></div>";
echo "<div class='container row'><div class='col-md-4'></div><div class='col-md-4'>
<input type='submit' name='submit' class='form-control btn btn-success text-center'/></div><div class='col-md-4'></div></div>";
echo "</form>";
}
else{ echo "no record";}
 }	
else{

echo<<<html_code


<div class="container-fluid" style="min-height:400px; margin-top:80px;">
	<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class='panel panel-success'>
<div class='panel-heading'><h2><u>RESULT</u></h2></div>
<div class='panel-body'>
<form role='form' class='form-horizontal' action='result.php' method='post' >
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
<div class="col-md-3"><input type="submit"  class="form-control btn btn-success" name="select" value="select"/></div>
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

