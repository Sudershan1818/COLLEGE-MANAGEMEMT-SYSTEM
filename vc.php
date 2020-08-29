<?php ob_start(); 
include('connection.php')?>
<html>
<head>
  <title>TEACHING STAFF</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1' />
  <link rel='stylesheet'  href='bootstrap/css/bootstrap.min.css' />
  <script src='library/jquery.min.js'></script>
  <script src='bootstrap/js/bootstrap.min.js'></script>
  <link rel='stylesheet' href='style1.css' type='text/css' />
 </head>
 
<body> 
<?php include('header1.php'); ?>
<?php include('navbar1.php'); ?>
<?php
echo "
   <div class='container-fluid' style='min-height:600px; margin-top:20px;'><div class='row'>
<div class='col-md-4'></div>
<div class='col-md-4'><h2 class=' font-face:tahoma;'>Vice Chancellor's Message</h2></div><div class='col-md-4'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-8'>
 <table class='table table-hover'>
			    
	         
			<TR>
			  <td style='padding: 4px; font-size: 14px; color:blue; font-family:arial,serif;'><br />
			    <p align='center' class='color:black'><span><strong><img  src='teacher/vc.jpg' width='200px' height='200px' class='img img-responsive img-circle' style='border:5px solid #3AA0E7  ' align='top' title='Prof. A. D. N. Bajpai, Vice Chancellor'  /></strong></span></p>
			    <p align='justify'>It is my proud privilege to welcome  you to this University picturesque campus <em>having </em>majestic buildings of  the University, complemented by rhododendron, silver oak, pine and deodar trees  offering a salubrious climate and amiable atmosphere for higher studies and  research. <br />
			      <br />
			      With a <em>Centre with Potential for Excellence in Himalayan Studies known as  Integrated Institute of </em>Himalayan Studies (IIHS) by UGC for <em>vast </em>research  on the Himalayas, this university has a well established Human Resource  Development Centre for updating the knowledge of the faculty especially for the  teachers of the colleges. Special Assistance Programme (SAP) has been <em>provided </em>by the UGC to the departments of Physics, Bio- Technology, Chemistry,  Bio-Sciences and Institute of Vocational Studies IVS-MTA. <br />
  <br />
			      The new Campus of the University at Ghanahati near Shimla is being developed in  about 40 Acres for BBA, BCA, UILS, UIIT and many more UG and PG Courses. The <em>University </em>collaborates with many National and International research and academic institutions.  During the last three years a number of MOUs with International and National  Institutes of Repute <em>have </em>been signed. Many scholars, philosophers,  academicians and environmentalists <em>visited </em>the University in the  recent years. <br />
  <br />
			      I <em class='font-size:5px;'>invite </em>you to enter this <em>university </em>to fulfill your  academic thrust with a motto of come to learn and go to <em>serve. </em></p>
			    <p align='justify'><br />
			      <img width='100px' height='20px' src='teacher/vcsign.gif' alt='Created by DPE, Copyright IRIS 2009  Created by DPE, Copyright IRIS 2009' /><br />
			      <strong>Prof. Rajinder Singh Chauhan <br/>
			      Vice Chancellor</strong><br/>
			      Himachal Pradesh University<br/>
			      Summer Hill, Shimla - 171 005</p>
<p align='justify'>&nbsp;</p></td>
		  </TR>
		</table>
		
</div></div>
";
?>
</div>

<?php include('footer1.php') ?>
</body>
</html>
