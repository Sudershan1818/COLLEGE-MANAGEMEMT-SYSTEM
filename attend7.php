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

<div class='container' style='background-color:white;'>

<?php 
if(isset($_POST['submit']))
{
	$branch2=$_POST['branch1'];
	$batch2=$_POST['batch1'];
	$subjectss=$_POST['subjects'];
	$today_year=date("Y");
	$today_month=date("M");
	$today_date=date("d");
	$today_date_str="d".$today_date ;
	$stuid=$_POST['stuid'];
	$max=$_POST['max_stu'];
	for($j=0;$j<$max;$j++){ $str1=$stuid[$j]; }
	$s;
	$errr=0;
	$stp=0;
	$sta=0;
	for($i=1,$j=0;$i<=$max;$i++,$j++)
{
	$str="stu".$i;
	$s[$i]=$_POST[$str];
	$str_id=$stuid[$j];
    $sql1="select studentid from attend_student where studentid=$str_id && year=$today_year&&month='$today_month' && subjectcode='$subjectss' ";
	$query2=mysql_query($sql1);
	$numrow=mysql_num_rows($query2);
	if($numrow>0){
	$sql="update attend_student set $today_date_str='$s[$i]' where studentid=$str_id && year=$today_year&&month='$today_month' && subjectcode='$subjectss' ";
	
	}
	else{
		
	$sql="insert into attend_student(studentid,batch,branch,year,month,$today_date_str,subjectcode) values('$str_id','$batch2','$branch2','$today_year','$today_month','$s[$i]','$subjectss')" ;
	}
	
	if($s[$i]=='present'){
	$stp++;
	}else{
		$sta++;
	}
	
	
	
	
	if(mysql_query($sql)){
		
	}
	else{echo"error on saving";
	 $errr++;
	 
	}
	}	
if($errr==0){
	echo "<div class='container' style='height:320px'><h3 class='text-center'> Today attendance is Successfully Saved !</h3>";
	echo "<div class='row'><div class='col-md-5' ><p class='text-right'><b class=' text-success' >Present:</b></p></div><div class='col-md-5'><span class='text-left'>$stp</span></div></div> ";
	echo "<div class='row'><div class='col-md-5' ><p class='text-right'><b class=' text-success'>Absent:</b></p></div><div class='col-md-5'><span class='text-left'>$sta</span></div></div> ";
	
	
	
	
	echo "</div>";
	}
else{ echo "error on updating data of". $errr ."students"; }	
	
	
	}
else if(isset($_POST['show1']))
{
 
$branch=$_POST['brnch'];
$batch=$_POST['year_batch'];
 $subjects=$_POST['subjects'];
 $sql="select registration_number,firstname,stream,year from student_detail where year='$batch' && stream='$branch' ";
 $query=mysql_query($sql);
 $num=mysql_num_rows($query);
if($num>0){
	echo "<div class='text-center'><h3>Attendance</h3></div><form action='attend7.php' method='post'>";
	
echo "<div style='display:none'><input type='hiddden' name='branch1' value='$branch' />
<input type='hiddden' name='batch1' value='$batch' /><input type='hiddden' name='subjects' value='$subjects' /></div>";
echo "<div class='container'><table class='table table-hover' >";
echo "<tr><th>Sudentid</th><th>Name</th><th>Attendance</th><tr>";
$r_name;
$i=1;
while($row_data=mysql_fetch_array($query)){
	$r_name="stu".$i;
	echo "<tr>
	<td><input type='hidden' name='stuid[]' value=$row_data[0] />$row_data[0]</td>
	<td>$row_data[1]</td>
	<td><input type='radio' name='$r_name' value='present' checked /><span>Present</span>
	<input type='radio' name='$r_name' value='absent'/><span>absent</span></td>
	</tr>
	";
	$i++;

	}
	$i--;
echo "<input type='hidden' name='max_stu' value=$i />";	

echo "</table></div>";
echo "<div class='container row'><div class='col-md-4'></div><div class='col-md-4'><input type='submit' name='submit' class='form-control btn btn-success text-center'/></div><div class='col-md-4'></div></div>";
echo "</form>";
}
else{ echo "no record";}
 }	

else if(isset($_POST['show2'])) {
	
	$branchs=$_POST['brnch'];
	$batchs=$_POST['year_batch'];
	$sqls="select * from syllabus_upload where branch='$branchs'	&& batch='$batchs' ";
	$querys=mysql_query($sqls);
	$nums=mysql_num_rows($querys);
    echo "<div class='panel panel-info' >
 <div class='panel-heading'><h2 class='text-center'>Attendance</h2></div>
	<div class='panel-body'>
	<form role='form'	class='form-horizontal' action='attend7.php' method='post'>
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
 <div class="panel-heading"><h2 class="text-center">Attendance</h2></div>
<form role="form" class="form-horizontal" action='attend7.php' method='post'>
<div class="panel-body">
<div class="form-group">
<label class="col-md-4 text-center">Branch</label>
<div class="col-md-4"><select  class="form-control" name="brnch"><option value="CSE">CSE</option><option value="IT">IT</option></select></div>
</div>

<div class="form-group">
<label class="col-md-4 text-center">Year</label>
<div class="col-md-4"><select class="form-control" name="year_batch"><option value="first">First Year</option><option value="second">Second Year</option><option value="third">Third Year</option><option value="fourth">Fourth Year</option></select></div>
</div>
html_code;

echo<<<html_code
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