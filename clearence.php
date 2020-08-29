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
 /* function ValidateForm()
  {

if ( ( document.getElementById('radio1').checked == false) && ( document.getElementById('radio2').checked == false) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}
else 

	return true;
}*/
  
  </script>
  <style>
   .height1
  {
	  height:30px;
  }
  </style>
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("admin_navbar.php"); ?>

<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
		<?php
		if(isset($_POST['reg_id']))
		{
		$reg_id =$_POST['reg_id'];
		
		
		$sql2 = "select * from student_detail where registration_number = $reg_id";
			$query2 = mysql_query($sql2);
			error_reporting(0);
			$row_data2 = mysql_fetch_row($query2);
			$sql1 = "select * from students where registration_id = '$reg_id'";
			$query1 =  mysql_query($sql1);
			$rows = mysql_num_rows($query1);
			//error_reporting(0);
			if($query2)
			{if($rows == 0)
				{
					$sql3 = "INSERT INTO `students`(`name`, `clearence`, `year`, `stream`, `registration_id`) VALUES ('$row_data2[1]   $row_data2[2]', NULL, '$row_data2[8]', '$row_data2[6]', '$row_data2[0]') ";
					;
					mysql_query($sql3);
					$sql4 = "delete from students where registration_id = '';";
					mysql_query($sql4);
				}}
		
		
		$sql = "select clearence, name, registration_id, year, stream, lib, fee, can  from students where registration_id = '$reg_id'";
		
		$query = mysql_query($sql);
		$row_data = mysql_fetch_array($query);
		$num = mysql_num_rows($query);
		if($num>0)
		{
		
		//print_r($row_data);
		if($row_data[0] == 'allowed')
		{
			echo"<center>clearence already allowed for this student</center>";
			echo"<form class = 'form-group'>
			<center><a href = 'semester.php'><input class = 'form-control btn-success' style = 'width:300px' type ='button' value = 'update another record' ></center>
			</form>";
		}
		else
		{
		echo"
		<form >
			  <center><h1>student detail</h1>
			<table class = 'table table-hover' >
			  <tr><th>name</th></th><th>registration id</th><th>year</th><th>stream</th></tr>";
		
		
		      echo"
		      <tr><td>$row_data[1]</td><td>$row_data[2]</td><td>$row_data[3]</td><td>$row_data[4]</td>
		
		      </tr>
			  <tr><td></td><td></td><td></td><td></td></tr>
		    </table></center>
			</form>
			  <center><h2>clearence allowence</h2></center>
		   <center><form action ='submitted.php?reg_id=$reg_id' method = 'post'> <table  class = 'table table-hover'>
				<tr><th>Department</th><th>clearence allowed </th><th>clearence not allowed</th></tr>";
		
				if(!($row_data[5] == 'allowed'))
				{
		        echo"<tr><td>library</td><td><input type = 'radio' name = 'lib' id = 'radio1' required value = 'allowed'></td><td><input type = 'radio' id = 'radio2' name = 'lib' required  value = 'not allowed'></td></tr>";
				}
				if(	!($row_data[6] == 'allowed'))
				{
				echo"<tr><td>fee</td><td><input type = 'radio' name = 'fee' id = 'radio3' required value = 'allowed'></td><td><input type = 'radio' id = 'radio4' name = 'fee' required  value = 'not allowed'></td></tr>";
				}
		        if(	!($row_data[7] == 'allowed'))
				{
				echo"<tr><td>canteen</td><td><input type = 'radio' name = 'can' id = 'radio5' required value = 'allowed'></td><td><input type = 'radio' id = 'radio6' name = 'can' required  value = 'not allowed'></td></tr>";
				}
		        echo"<tr><td> </td><td></td><td><input type = 'submit' style = 'width:200px' class = 'form-control height1 btn-success'></td></tr>
		
		     </table></center>";
		echo"	
		</form>";
		
		}
		}
		
		else
		{
			echo"<center>record not found!<br/></br><form>
			<a href = 'semester.php'><input class = 'form-control btn-success' style = 'width:300px' type ='button' value = 'update another record' >
			</form></center>
			
			";
		}
		}
		?>
		</div>
		
	</div>
</div>


<?php include("footer1.php") ?>
</body>
</html>