<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>TEACHING STAFF</title>
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
<?php
echo "<div class='container-fluid' style='min-height:600px; margin-top:20px;'><div class='row'><div class='col-md-5'>
</div>
<div class='col-md-4'><h2 >Dr. Rajesh Chauhan</h2></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-6'>
<header class='major'>
									
									<img src='teacher/rajesh.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'> 
								</header>
								<ul style='list-style-type:disc;'>
									 Assistant Professor
						            <br>University Institute of Information Technology(UIIT)
						            <br>Himachal Pradesh University, Shimla-171005 
									<h3>Education</h3>
									<li>Doctorate </li>
									<li>MCA 2002</li>
									<h3>Research Papers:</h3>
									<li>Generalizing Metadata Elements For e-Government In India, ICEG-2010 Conference on April 22-24, 2010.</li>
									<li>Retrospective of e-government databases, IJCSE Vol 1 No 2, 66-73, 2011.</li>
									<li>Generalizing Meta-Data Elements: Global Scenario and Indian Perspective, JOAAG, Vol. 5. No. 1, 2011.</li>
									<li>Technology Challenges In E-Services Accessibility, Journal of Engineering and Technology., Vol. 2, Issue 1, January - June 2012.</li>
									<li>Theoretical categorization of Interoperability in e-Government, AKGEC JOURNAL OF TECHNOLOGY, Vol. 2, No. 1, 2011.</li>
									<li>General Language for Entity Definition (GLEDe): A Consistent Approach for Interoperable Data Repositories, RJCSE (Research Journal and Engineering), ISSN 2230-8563, e-ISSN 2230-8571, Volume 02, Issue 03, June-2011.</li>
									<li>Comprehensive  Framework for quality Database Applications, National Conference on Recent Trends in Information Technology and its Application in Industry , University of Jammu at Bhaderwah , 2011.</li>
									<li>Unified Approach for Structural Coherence in Data Layer of E-Government Services, International Journal of Engineering Science,  ISSN : 2229-6913., 27th Sept 2011.</li>
									<li>A Consistent Approach for Structurally Interoperable Data Layer, International Journal of Computer Information Systems , ISSN: 2229-5208, Proceedings are also available at ICEG 2011.</li>
									<li>Perspective on XML Schema, RDF and Ontology in Unification of Information Resources in e-Governance, Under Review.</li>
									<li>Service Based Information Framework For E governance , paper-id 728-JATIT-2k9, Under Review in JATIT (Journal of Theoretical & Applied Information Technology). </li>
									<li>Coherent Data layer for Federated Data Silos, Under Review</li>

									<h3>PROFESSIONAL EXPERIENCE</h3>
									<li>About 14 Years (B. Tech. classes).</li>
									<li>Taught PGDCA classes of ICDEOL, HPU.</li>
									<li>Taught BCA classes of ICDEOL, HPU.</li>
									<li>Taught MCA classes of ICDEOL, HPU</li>
									<h3>Phone No</h3>2833681(office)
									<h3>Email</h3>	rajesh@hpuiitshimla.org

							</ul>
</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
