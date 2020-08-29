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
  <style>
  .height1
  {
	  height:30px;
  }
  </style>
 </head>
<body> 
<?php include("header1.php"); ?>
<?php include("teacher_navbar.php"); ?>

<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
		<?php
			if(isset($_POST['sbmt1']))
			{
				$year = $_POST['year'];
				$stream = $_POST['stream'];
				$sql = "SELECT `registration_number`, `firstname`, `lastname`, `email`, `sex`, `stream`, `address`, `year`, `image` from student_detail where stream = '$stream' && year = '$year'; ";
				$query = mysql_query($sql);
				echo"<table class = 'table-hover table-condensed table-bordered'>
				<tr><th>registeration number</th><th>name</th><th>email</th><th>gender</th><th>stream</th><th>address</th><th>year</th><th>image</th>
				</tr>";
				while($row_data = mysql_fetch_array($query))
				{echo"
				<tr><td>$row_data[0]</td><td>$row_data[1]  $row_data[2]</td><td>$row_data[3]</td><td>$row_data[4]</td><td>$row_data[5]</td><td>$row_data[6]</td><td>$row_data[7]</td><td><img width = '40px' height = '30px' src = '$row_data[8]'/></td>
				</tr>";
				}
				echo"</table>";


			}
else if(isset($_POST['sbmt2']))
{
$sql = "SELECT `registration_number`, `firstname`, `lastname`, `email`, `sex`, `stream`, `address`, `year`, `image` from student_detail where 1; ";
				$query = mysql_query($sql);
				echo"<table class = 'table-hover table-condensed table-bordered'>
				<tr><th>registeration number</th><th>name</th><th>email</th><th>gender</th><th>stream</th><th>address</th><th>year</th><th>image</th>
				</tr>";
				while($row_data = mysql_fetch_array($query))
				{echo"
				<tr><td>$row_data[0]</td><td>$row_data[1]  $row_data[2]</td><td>$row_data[3]</td><td>$row_data[4]</td><td>$row_data[5]</td><td>$row_data[6]</td><td>$row_data[7]</td><td><img width = '40px' height = '30px' src = '$row_data[8]'/></td>
				</tr>";
				}
				echo"</table>";


}
else{
			echo"<div class = 'panel'>";
			echo"<div class = 'panel-body'>";
			echo"<center><table class = 'table-condensed'>";
			echo"<form action = view_all_students.php method = 'post'>";
			echo"<tr><th>enter your year</th><td><select  style='width:200px' name = 'year'>
			<option value = 'first'>first</option>	
			<option value = 'second'>second</option>	
			<option value = 'third'>third</option>	
			<option value = 'fourth'>fourth</option>	
			</select></td></tr>
			<tr><th>Enter your stream</th><td><select  style='width:200px' name = 'stream'>
			<option value = 'IT'>IT</option>	
			<option value = 'CSE'>CSE</option>	
			</select></td></tr>";
			echo"<tr><td></td><td colspan = 2><p align = 'right'><input style = 'width:200px' class = 'form-control btn-success height1' type = 'submit' name = 'sbmt1' value = 'view details of students'><p></td></tr>";
			echo"<tr><td></td><td>OR</td></tr>";
			echo"<tr><td></td><td><p align = 'right'><input class = 'form-control btn-success height1' type = 'submit' name = 'sbmt2' value = 'view details of all students'><p></td></tr>";
			echo"</form>";
			echo"</table></center>";
			
			echo"</div>";
			
			echo"</div>";
}
			?>
		</div>
	</div>
</div>

<?php include("footer1.php") ?>
</body>
</html>
