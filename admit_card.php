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
div .container
  {
	  position:absolute;
	  top:50px;
	  width:1000px;
	  min-height:1000px;
	 
	  
  }
  .container
  {
	 background-image:url('admit.png');
	 background-size:100%;
  }
  div.img_stu
  {
	  position:absolute;
	  top:150px;
	  left:600px;
	  width:190px;
	  height:200px;
	  
	  
  }
  </style>
  
 </head>
<body> 
<div class="container-fluid" style="min-height:300px; margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
			<?php
			$reg_no = $_REQUEST['reg_id'];
			$sql = "select * from student_detail where registration_number = $reg_no";
			$query = mysql_query($sql);
			$num = mysql_num_rows($query);
			$row_data = mysql_fetch_row($query);
			$sql1 = "select * from students where registration_id = '$reg_no'";
			$query1 =  mysql_query($sql1);
			$rows = mysql_num_rows($query1);
			//error_reporting(0);
			if($query)
			{if($rows == 0)
				{
					$sql3 = "INSERT INTO `students`(`name`, `clearence`, `year`, `stream`, `registration_id`) VALUES ('$row_data[1]   $row_data[2]', NULL, '$row_data[8]', '$row_data[6]', '$row_data[0]') ";
					mysql_query($sql3);
					$sql4 = "delete from students where registration_id = '';";
					mysql_query($sql4);
				}}
				
			$sql2 = "select * from students where registration_id = '$reg_no'";
			$query2 =  mysql_query($sql2);
			$num1 = mysql_num_rows($query2);
			$row_data1 = mysql_fetch_row($query2);
			if($num1>0)
			{
			if($row_data1[4] == $row_data[0])
			{
				if ($row_data1[1] == 'allowed')
				{
			echo"<div  class = 'container ' style = ' background-color:#ffffff; border-style:solid; min-height:1200px; margin:50px 0px 50px 50px' >";
			
			echo"<h1 style = 'text-align:center'>Admit Card</h1><br/><br/>";
			echo"<div class = 'row' >";
			echo"<div class = 'col-md-6'><table  width = '500px' height = '300px' style = 'font-size:12'>
			<tr><th>name</th><th>:</th><td>$row_data[1] $row_data[2]</td></tr>
			<tr><th>Registeration number</th><th>:</th><td>$row_data[0]</td></tr>
			<tr><th>Year</th><th>:</th><td>$row_data[8]</td></tr>
			<tr><th>Stream</th><th>:</th><td>$row_data[6]</td></tr>
			<tr><th>Month of Examination</th><th>:</td><td>june</td></tr>
			<tr><th>Date of Due's clearence</th><th>:</td><td>$row_data1[8]</td></tr>
			<tr><th>Place of Examination</th><th>:</td><td>Uiit Summerhill Shimla</td></tr>
			
			

			</table></div>";
			echo"<div class = 'img_stu' >";
			echo"<img src = '$row_data[9]' width = '100%' height = '100%' >";
			echo"</div>";
			echo"</div>";
			echo"<h4 style = 'text-align:center'><u>Instructions</u></h4><br/><br/>";
			echo"
			<ul><li>Check the exam timetable carefully. Make sure you know the time and locations of your exams. Check whether you should go directly to an exam hall or a waiting room. </li>
			<li>Do not bring any unauthorised material (e.g. written notes, notes in dictionaries, paper, and sticky tape eraser). Pencil cases and glasses cases must not be taken to your desks. These will be checked and confiscated.</li>
			<li>Normally, you are required to answer questions using blue or black ink. Make sure you bring some spare pens with you. Do not bring a pencil case. </li>
			<li>Arrive at least 15 minutes before the exam is due to start (30 minutes before if your exam is in the Auditorium; TB329 or SSB329) and wait outside until you are allowed in. If you have to go to a holding room first, please arrive at the time stated.  </li>
			<li>Keep your eyes on your own paper. Remember, copying is cheating! </li>
			<li>Stop writing immediately when the teacher says it is the end of the exam. </li>
			<li>Unless specifically indicated in instructions from the module convenor either on the examination paper itself or in a separate note from the module convenor, no extra pages of any sort will be provided for rough work. You should normally be required to do any rough work in the exam answer books provided and to draw a line through any such work not considered part of your answer</li>
			<li>Where permitted you may use one standard translation dictionary. Dictionaries that have any English-English definitions are not allowed (e.g. The Oxford Advanced Learners’ English-Chinese Dictionary is not allowed; subject specific or specialised dictionaries are not allowed). Dictionaries are not allowed in CELE English language exams. </li>
			<li>Make sure your mobile phone is switched off and place it at the front together with any bags, books, coats etc. Then find your seat. </li>
			<li> Everything you write (including any notes and rough work) must be in the answer booklet. Do not write large bold letters, numbers or equivalent marks on the question paper. Do not use sticky tape or any kind of eraser fluid to hide anything you write. You must draw a line with a pen through rough work or other notes not considered part of your answer.  
 </li>
			<li>Keep your eyes on your own paper. Remember, copying is cheating! </li>
			</ul><br/><br/><br/><br/><br/><br/><br/>
			
			";
			echo"<table border = '2' width = '100%' style = 'table-layout:fixed'><tr ><th style = 'padding:50px'>invigilator's signature  </th><th>authorised signature</th><th>signature of student</th></tr></table>";
			echo"</div >";
				}
				else 
				{
					echo"<div class = 'panel' style ='width:500px;min-height:300px;margin:auto;' >
					<div class = 'panel-header' style = 'background-color:#eeddcc'  align = 'center'>";
					echo"due's not cleared";
					echo"</div>
					<div class = 'panel-body'>";
					if($row_data1[1] == 'not allowed')
					{
						if($row_data1[5]=='not allowed')
						{
							echo">>please clear all the library dues<br/><br/>";
						}
						if($row_data1[6]=='not allowed')
						{
							echo">>please clear all the canteen dues<br/><br/>";
						}
						if($row_data1[7]=='not allowed')
						{
							echo">>please clear all the fee dues<br/><br/>";
						}
					}
					else
					echo">>please clear all your dues first";
					echo"</div>
					</div>";
					
				}
			}	
			}
				else
				{
					echo"record not found in due clearence records";
				}
			?>
		</div>
	</div>
</div>

</body>
</html>

