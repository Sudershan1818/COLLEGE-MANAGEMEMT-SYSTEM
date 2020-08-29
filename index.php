<?php
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
<?php include("navbar1.php"); ?>
<?php include("slide1.php"); ?>
<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		<div class="col-md-8">
			<h1 style='font-family:cursive; color:#C69872;'>Welcome</h1>
			<p style='font-size:18px; font-family:arial,sans-serif;' class='text-justify'>University Institute of Information Technology (UIIT) is located on the campus of Himachal Pradesh University at Summer Hill, Shimla. This institute started functioning on 11th September 2000 through the orders of the Executive Council of Himachal Pradesh University after approval from All India Council for Technical Education (AICTE). 
			Initially, it was started with a batch of 60 students for B. Tech. (Information Technology) whereas B. Tech. (Computer Science Engineering) had also been introduced in 2013
			with an intake of 60 seats and, it now is well known established institute throughout not only in India but abroad also for its quality product.</p>
		</div>
		<div class="col-md-4">
		<br><br><br><br>
			<div class="panel panel-primary ">
				<div class="panel-heading">
				NEWS
				</div>
				<div class="panel-body" style='background-color:#465568;'>
				<?php 
				$pageno=0;
				$size=5;
$offset=$pageno * $size;
$sql="select * from news";
$query=mysql_query($sql);
$total_row=mysql_num_rows($query);
$total_page=$total_row/$size;
$sql="select * from news where status=0 limit $offset,$size";


$query=mysql_query($sql);
$num=mysql_num_rows($query);
if($num>0)
	{
		echo  "<div class='container-fluid'><marquee width='350px' direction='up' height='200px' onmouseover='this.stop()' onmouseout='this.start()'>";
		echo"<table>";
echo "<tr></tr>";
while($row_data=mysql_fetch_array($query))
{
	echo "<tr><td><a href='$row_data[2]' target='_blank'><p style='color:#F9802D;'> *$row_data[1]</p></a></td></tr>
	";
	}
	echo "</table>";

	echo"</marquee>
	</div></div>";
	}
	else{
		echo "No news";
	}
				?>
				
				<div class="panel-footer" style='background-color:#6F6876;'>
				<a href="viewall.php" style='color:#F9802D;'>View All >>></a>
				</div>
			</div>
		</div>
		</div>
	</div>

<?php include("foundation.php"); ?>
<?php include("about1.php"); ?>
<?php include("footer1.php") ?>
</body>
</html>
