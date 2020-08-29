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
 
 <script>
		function empty_check1(id_value,span_id)
{
var v1=document.getElementById(id_value).value;
var regx;
regx=/\S/;
var msg="";
if(!v1.match(regx)){
msg="*enter valid text";
}
document.getElementById(span_id).innerHTML=msg;
return msg;
}

function upload()
{

var msg="";
var page_error="";
msg=empty_check1("subject","subject1");
if(msg!=""){page_error=msg;}
msg=empty_check1("scode","scode1");
if(msg!=""){page_error +=msg;}

if(page_error!=""){
alert("Fill all the fields");
return false;
}
else
{
return true;
}

}

 
	</script>
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>

<div class="container-fluid" style="min-height:400px">

<?php

if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
	switch($act)
	{
		case 2:
		
		 
		$sid=$_REQUEST['sno'];
		$sql1="select syllabus_url from syllabus_upload  where sid='$sid' ";
		$query11=mysql_query($sql1);
		$old_url1=mysql_fetch_row($query11);
		unlink($old_url1[0]);
		$sql="delete from syllabus_upload  where sid='$sid' ";
		mysql_query($sql);
echo "<div class='panel panel-success text-center text-success'><strong>Syllabus is Deleted successfully!</strong></div>";		

		echo" <p onload='alert(\"deleted\")'></p>"	;		
		break;
		
		
		case 3:
		$branch31=$_REQUEST['brnch'];
		$batch31=$_REQUEST['year_batch'];
		
		$new_subject=$_POST['subject'];
		$scode=$_POST['scode'];
		
		
		$new_sfile=$_FILES['sfile'];
		$new_sfile_name=$new_sfile['name'];
		$old_url=$_POST['old_url'];
		if($new_sfile_name!="")
		{
		$new_sfile_name=$new_sfile['name'];
		$sfile_path=$new_sfile['tmp_name'];
		
		
		
		$temp=explode(".",$new_sfile_name);
		$len=count($temp);
		$new_sfile_path="syllabus/".$scode.".".$temp[$len-1];
		}
		
		
		if($new_sfile_name!="")	
		{
		$sql="update syllabus_upload set subject='$new_subject' , syllabus_url='$new_sfile_path' where branch='$branch31' && batch='$batch31' && subjectcode='$scode' ";
		
		
		}
		else
		{
		$sql="update syllabus_upload set subject='$new_subject' where branch='$branch31' && batch='$batch31' && subjectcode='$scode' ";
		
		}
		if(mysql_query($sql))
		{
		if($new_sfile_name!="")	
		{
        unlink($old_url);			
		move_uploaded_file($sfile_path,$new_sfile_path);
		}
			
		}
		

		echo "<div class='container text-center text-success'><strong>Syllabus Updated Successfully!</strong></div>";
			break;
		case 4:
		echo"<div class='panel panel-success text-center text-success'><strong>Syllabus is uploaded successfully!</strong></div>";
		break;
	
	
	}
}




if (isset($_POST['upload_syllabus']))
	{
		echo "saved";
	$branch21=$_POST['branch11'];
	$batch21=$_POST['batch11'];
	$subject_name=$_POST['subject_name'];
	$subject_code=$_POST['subject_code'];
	$attendfile=$_FILES['subject_file'];
	$file_name=$attendfile['name'];
	$file_path=$attendfile['tmp_name'];
	
	$temp=explode(".",$file_name);
	$len=count($temp);
	$newpath="syllabus/".$subject_code.".".$temp[$len-1];

	move_uploaded_file($file_path,$newpath);
	$sql="insert into syllabus_upload(branch,batch,subject,subjectcode,syllabus_url)
	values('$branch21','$batch21','$subject_name','$subject_code','$newpath')";
	
	if(mysql_query($sql))
		{
			header("Location:syllabus_upload4.php?act=4&brnch=$branch21&year_batch=$batch21 ");	
			}
		else{
		echo"error on uploading syllabus";
		}
	}




else if(isset ($_POST['brnch']) || isset($_REQUEST['brnch']))
{

	if(isset($_POST['brnch']))
	{
	$branch=$_POST['brnch'];
	$batch=$_POST['year_batch'];
	}
	else
	{
	$branch=$_REQUEST['brnch'];
	$batch=$_REQUEST['year_batch'];
		
	}

	echo"<div class='panel-group'>";
		echo "<div class='panel panel-info'> ";
			echo "<div class='panel-heading text-center'><h3>Syllabus</h3></div>";
	echo "<div class='panel-body'>";
	
	
	if($_REQUEST['act']!=1)
	
	{
echo<<<html_code
	<div><h3><strong>Upload new Syllabus</strong></h3></div>
	<div class='container-fluid'>
	<form action='syllabus_upload4.php' method='post' enctype='multipart/form-data' onsubmit="return upload()">
	
	<div class='form-group row'>
<label class='col-md-4 text-right'>Subject Name</label>
<div class='col-md-4'><input type='text' class='form-control' name='subject_name' id='subject' onkeyup='empty_check1(this.id,"subject1")'/><span id='subject1' style="color:red"><span></div>
</div>

<div style='display:none'><input type='text' name='branch11' value='$branch' /><input type='text' name='batch11' value='$batch' /></div>

<div class='form-group row'>
<label class='col-md-4 text-right'>Subject Code</label>
<div class='col-md-4'><input type='text' class='form-control' name='subject_code'  id='scode' onkeyup='empty_check1(this.id,"scode1")'/><span id='scode1' style="color:red"><span></div>
</div>

<div class='form-group row'>
<label class='col-md-4 text-right'>Select File</label>
<div class='col-md-4'><input type='file' class='form-control' name='subject_file' required /></div>
</div>

<div class='form-group row'>
<label class='col-md-4'></label>
<div class='col-md-4'><input type='submit'  class='form-control btn btn-success' name='upload_syllabus' value='Upload New Syllaus'/></div>
</div></form></div> 
html_code;
	}

	
	
		
		
		$sql1="select * from syllabus_upload where batch='$batch' && branch='$branch' ";

	$query1=mysql_query($sql1);
		$num=mysql_num_rows($query1);
		
		if($num>0){
			echo "<div><h3><strong>Update Syllabus</strong></h3></div>";
			echo "<table class='table table-hover' >";
			echo "<tr><th>S. No.</th><th>Subject Name</th><th>Subject Code</th><th></th><th></th></tr>";
			$i=1;
			while($row_data=mysql_fetch_array($query1))
			{
				if(isset($_REQUEST['act']) && $_REQUEST['act']==1 && $_REQUEST['sno']==$row_data[5])
				{
					echo<<<html_code
					<form action='syllabus_upload4.php?act=3&brnch=$branch&year_batch=$batch' method='post' enctype='multipart/form-data' onsubmit="return upload()"><tr>
				<td>$i</td>
				<td><input type='text' name='subject' value='$row_data[2]' id="subject" onkeyup="empty_check1(this.id,'subject1')"/><span id="subject1" style="color:red"></span></td>
				<td><div style='display:none'><input type='text' name='scode' value='$row_data[3]' id='scode' /><span id="scode1" style="color:red"></div>$row_data[3]</td>
				
				
				
				<td> 	<input type='file' name='sfile' />
				<input type='hidden' name='old_url' value='$row_data[4]'/>
				
				</td>
				
				
				
				<td><input type='submit' class='form-control' value='update'/>
	                <a href='syllabus_upload4.php?brnch=$branch&year_batch=$batch'>cancel</a></td> </tr></form> 
html_code;
				
				
				}
				else{
				echo<<<html_code
				<tr>
				<td>$i</td>
				<td>$row_data[2]</td>
				<td>$row_data[3]</td>
				<td><a href='$row_data[4]' download>Download Syllabus</a></td>
				<td><a href='syllabus_upload4.php?act=1&sno=$row_data[5]&brnch=$branch&year_batch=$batch'>Edit</a>
	                <a href='syllabus_upload4.php?act=2&sno=$row_data[5]&brnch=$branch&year_batch=$batch' onclick='return  confirm("Are you sure  to delete the syllabus !" )'>Delete</a></td> </tr>
html_code;
				}
				
				$i++;
			}
			echo" </table></div></div>";
		}
		else{
			echo "<div class='panel'>no syllabus found</div>";
		}
	echo "</div>";
	}

else {
	echo <<<html_code
<div class="panel panel-info" >
 <div class="panel-heading"><h2 class="text-center">Syllabus Upload</h2></div>
<div class="panel-body">
 <form role="form" class="form-horizontal" action='syllabus_upload4.php?act=0' method='post'>

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
<div class="col-md-4"><input type="submit"  class="form-control btn btn-success " name="show" value="Upload/Update Syllaus"/></div>
</div></form>	</div></div>

html_code;
}
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
