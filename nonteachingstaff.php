<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>NON-TEACHING STAFF</title>
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
<div class="container-fluid" style="min-height:600px; margin-top:20px;"><div class='row'><div class='col-md-5'>
</div>
<div class='col-md-4'><h2><u>STAFF</u></h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-3'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a>
		
</div>
<div class='col-md-1'></div>
<div class='col-md-6'><h2>COMPUTER LABORATORY</h2>
<table class='table table-hover' style="height:30%;">
<tr>
<td style="width: 70%;">* Sh.  Mahender Kumar</td><td>Laboratory Technician<br></tr>
<tr>
<td>* Sh.  Naresh   Kumar</td><td>Laboratory Technician <br></td></tr>
<tr>									
<td>* Mr. Vijay Thakur</td><td>Laboratory Technician<br></td></tr>
<tr>									
<td>* Mr. Vikas Kumar</td><td>Laboratory  attendant<br></tr>
<tr>								
<td>* Mr. Babu Ram</td><td>Laboratory  attendant<br></td></tr>
<tr>									 
<td>* Mrs. Sarla</td><td>Laboratory  attendant<br></td></tr>
</table></div></div>

<div class='row'><div class='col-md-2'></div>
<div class='col-md-2'></div>
<div class='col-md-6'><h2>OFFICE &amp; LIBRARY STAFF</h2>
<table class='table table-hover' style="height:30%;">
<tr>
<td style="width: 70%;">* Sh.Gian Chand</td><td>Superitendend<br></tr>
<tr>																	
<td>* Sh. Naresh Kumar</td><td>Store Keeper cum Clerk<br></td></tr>
<tr>								
<td>* Mr. Deshraj</td><td>Junior Office Assistant (I.T.) <br></td></tr>									
<tr>									
<td>* Sh. Sanjeev Kumar</td><td>Library  Attendant<br></tr>
<tr>									
<td>* Mrs. Poonam Panta</td><td>Cleark cum Data Entry Operator<br></td></tr>								       								      
<tr>							
<td>* Mrs. Sunita Devi</td><td>Peon<br></td></tr>									
</table></div><div class='col-md-3'></div></div>
</div>

<?php include("footer1.php") ?>
</body>
</html>
