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
<?php include("teacher_navbar.php"); ?>

<div class='container' style='background-color:white; min-height:320px'>

<?php
 if(isset($_POST['show1']))
{
 
$branch=$_POST['brnch'];
$batch=$_POST['year_batch'];
 $subjects=$_POST['subjects'];
 $mnth=date('M');
 $sql="select * from attend_student where batch='$batch' && branch='$branch' && month='$mnth' && subjectcode='$subjects' ";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
 
 
 
 
 
 if($num>0){
	echo "<div class='text-center'><h3>Attendance Status</h3></div>";
	
	echo "<div class='container'><table class='table table-hover' >";
echo "<tr><th>Sudentid</th><th>Name</th><th>$mnth</th></tr>";
while($row_data=mysql_fetch_array($query) ){
	$gh;
	$tnp=0;
	$tna=0;
	
	$sql1="select firstname from student_detail where registration_number=$row_data[0] ";
 $query1=mysql_query($sql1);
	$row_data1=mysql_fetch_array($query1);
	echo "<tr>
	<td>$row_data[0]</td>
	<td>$row_data1[0]</td>";
	for($gh=5;$gh<36;$gh++){
		if($row_data[$gh]=='present')
		{ $tnp++; }
		else if($row_data[$gh]=='absent')
		{ $tna++; }
	}
	$tn=$tnp+$tna;
	echo"<td>"
	
	.$tnp."/".$tn.
	
	"</td>
	</tr>
	";
	

	}
echo "</table></div></div>";


}
else{ echo "no record";}
 }	
 
 else  if(isset($_POST['show2']))
 {
	 
	$branchs=$_POST['brnch'];
	$batchs=$_POST['year_batch'];
	$sqls="select * from syllabus_upload where branch='$branchs'	&& batch='$batchs' ";
	$querys=mysql_query($sqls);
	$nums=mysql_num_rows($querys);
    echo "<div class='panel panel-info' >
 <div class='panel-heading'><h2 class='text-center'>Attendance Status</h2></div>
	<div class='panel-body'>
	<form role='form'	class='form-horizontal' action='attend_show.php' method='post'>
	<div style='display:none'><input name='brnch' value='$branchs' /><input name='year_batch' value='$batchs' /></div>";
    echo "<div class='form-group'>
<label class='col-md-4 text-center'>Subject</label>
<div class='col-md-4'>";
	
	
	
	echo "<select name='subjects' class='form-control'>";
   if($nums>0){
		while($row_datas=mysql_fetch_array($querys)){
			echo"<option value='$row_datas[3]'>$row_datas[2]</option>";
		}
	echo "</select>";
	
	echo"</div></div>";
	
	echo "<div class='form-group'>
<label class='col-md-4 text-center'></label>
<div class='col-md-4'>";
	echo "<input type='submit' class='form-control btn btn-success ' name='show1' value='show'>";	
	echo "</div></div>";
	
	echo "</form></div></div>";	
	}
	
	else{echo "no subject found";}
	 
	 
 }
 
else{
echo<<<html_code
<div class="panel panel-info" >
 <div class="panel-heading"><h2 class="text-center"> Student Attendance Status </h2></div>
<form role="form" class="form-horizontal" action='attend_show.php' method='post'>
<div class="panel-body">
<div class="form-group">
<label class="col-md-4 text-center">Branch</label>
<div class="col-md-4"><select  class="form-control" name="brnch"><option value="CSE">CSE</option><option value="IT">IT</option></select></div>
</div>

<div class="form-group">
<label class="col-md-4 text-center">Year</label>
<div class="col-md-4"><select class="form-control" name="year_batch"><option value="first">First Year</option><option value="second">Second Year</option><option value="third">Third Year</option><option value="fourth">Fourth Year</option></select></div>
</div>


<div class="form-group">
<label class="col-md-4"></label>
<div class="col-md-4"><input type="submit"  class="form-control btn btn-success " name="show2" value="show"/></div>
</div></form>	</div></div>

html_code;
}
?>

</div>
<?php
include("footer1.php");
?>
</body>
</html>