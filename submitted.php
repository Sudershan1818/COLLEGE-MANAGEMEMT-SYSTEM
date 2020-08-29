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
<?php include("admin_navbar.php"); ?>

<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
		<?php
		if(isset($_REQUEST['case']))
		{

				$sql = "SELECT * from students where 1 order by registration_id asc; ";
				$query = mysql_query($sql);
				echo"<table class = 'table-hover table'>
				<tr><th>name</th><th>clearence</th><th>year</th><th>stream</th><th>registration id</th>
				</tr>";
				while($row_data = mysql_fetch_array($query))
				{echo"
				<tr><td>$row_data[0]</td><td>$row_data[1] </td> <td> $row_data[2]</td><td>$row_data[3]</td><td>$row_data[4]</td>
				</tr>";
				}
				echo"</table>";		
		}
		
		else
		{
			$registeration_id = $_REQUEST['reg_id'];	
			$sql1 = "select * from students where registration_id = $registeration_id";
			$query1 = mysql_query($sql1);
			$row_data = mysql_fetch_row($query1);
			$date;
			error_reporting(0);
			$lib = $_POST['lib'];
			if($lib == "")
				$lib = $row_data[5];
			error_reporting(0);
			$fee = $_POST['fee'];
			if($fee == "")
				$fee = $row_data[7];
			error_reporting(0);
			$can = $_POST['can'];
			if($can == "")
				$can = $row_data[6];

			if(($lib == 'allowed')&&($fee == 'allowed')&&($can == 'allowed'))
			{$date = date("Y-m-d");
			 $radio = 'allowed';	
			 }
			 else
			 {
				$date = date("Y-m-d");
				$radio = 'not allowed';
			 }
		$clearence = $radio;
		$sql = "update students set clearence = '$clearence', date = '$date', lib = '$lib', fee = '$fee', can = '$can' where registration_id = $registeration_id";
		$query = mysql_query($sql);
		if($query)
		{
			echo"
			<center><form class = 'form'>
			<font size = 5>records updated successfully!!...</font><br/><br/><br/>
			<a href = 'submitted.php?case=1'><input class = 'form-control btn-success' style = 'width:300px' type ='button' value = 'view details of all students' name = 'submit' ><br/><br/>
			
			<a href = 'semester.php'><input class = 'btn-success form-control' style = 'width:250px' type ='button' value = 'update another record' ></center>
			</form>";
		}
		else
		{
			echo"error";
		}
		}
		?>
		</div>
		
	</div>
</div>


<?php include("footer1.php") ?>
</body>
</html>
