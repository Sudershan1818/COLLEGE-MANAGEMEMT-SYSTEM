
<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>THE COORDINATOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css" />
  <script src="library/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css" type="text/css" />
 </head>
 <script type="text/javascript">
var ctr=0;
function info(){
	
	if((ctr%2) == 0){
	 document.getElementById('info').style="visibility:visible";
	 document.getElementById('info').style="display:block";
	 document.getElementById('more').innerHTML= "Click to hide Information";
	}else {
			
			document.getElementById('info').style="visibility:hidden";
			document.getElementById('info').style="display:none";
			document.getElementById('more').innerHTML="Click For more Information";
		}
		
		ctr++;
	}
</script>
 
<body> 
<?php include("header1.php"); ?>
<?php include("navbar1.php"); ?>
<?php
echo "<div class='container-fluid' style='min-height:600px; margin-top:20px;'><div class='row'><div class='col-md-4'>
</div>
<div class='col-md-5'><h2 >PROF. (DR.) WAMIK AZMI</h2><br><h4>PROFESSOR,,<br>
DEPARTMENT OF BIOTECHNOLOGY <br>
HIMACHAL PRADESH UNIVERSITY, <br>
SUMMER-HILL, SHIMLA-171005
</h4></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-8'>
<header class='major'>
									
									<img src='teacher/wamik.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'> 
								</header>
								<h3>Professional Qualifications</h3>
										<ul style='list-style-type: disc; margin-left:20px;'>
											
						                <li>Master's Degree (M. Sc.) from University of Allahabad, Allahabad in Biochemistry in the year 1988 (Ist Division )</li>
										<li>M. Tech. from Institute of Technology, BHU, Varanasi in	Biochemical Engineering in the year	1993 (Ist Division)</li>
										<li>Ph. D.* from Institute of Microbial Technology, Chandigarh in Biotechnology in the year 1998</li>
						            </ul>
										<h3>Professional Experience</h3>
										<ul style='list-style-type: disc; margin-left:20px;'>
										<li>M. Sc. Biotechnology in HP University, Shimla since April 2000</li>
										<li>M. Phil Biotechnology in HP University, Shimla since September 2004</li>
										<li>M. Sc. Microbiology in HP University, Shimla since August, 2007</li>

									</ul>
										<h3>Phone </h3>
											0177-2833706(office)
											<h3>Email</h3>wamikazmi@rediffmail.com


										<i><center><div id='more' onClick='info();' style='text-align: center;
																				    width: 40%;
																				    background-color: #82b440;
																				    color: #FCFBFB;
																				    cursor:pointer;
																				    padding-top: 2px;
																				    padding-bottom: 2px;
																				    border-radius: 7px;'
																				     >
										Click For more Information
										</div></center></i>
										<div id='info' style='visibility:hidden; display:none;'>
											<br>
										<h2>RESEARCH  CONTRIBUTIONS</h2><br> 
										<li>M. Phil. DISSERTATION SUPERVISED		: 20</li>
										<li>Ph. D. THESIS SUPERVISED			: 12</li>
										<li>PUBLICATIONS 
										<ol style='list-style-type:circle; margin-left:30px;'>
							 			<li>Patents					: 2</li>
										<li>Research articles				: 43</li>
										<li>Chapter in Books				: 7</li>
							            </ol>
							            </li>
										<li>GOOGLE SCHOLAR CITATION INDICES 
							            <ol style='list-style-type:circle; margin-left:30px;'>
							            <li>Citations					: 1016 </li>
							            <li>h-index 					: 11 </li>
							            <li>i-index 					: 12</li>
							            </ol>
							            </li>


										<h2>DELIVERED INVITED LECTURES</h2>
										<li>Instrumentation in fermentation technology, 2 Nov, 2007, Department of Biotechnology, GGDSD College Chandigarh.</li>
										<li>Bioprocess control mechanisms, Department of Biotechnology, 3 Nov, 2007, GGDSD College Chandigarh.</li>
										<li>Conducted lecture cum workshop on Introduction to fermentation and its applications, 26 Aug, 2009, Department of Biotechnology GGDSD College Chandigarh.</li>
										<li>Stepping stone in bacterial identification in Refresher Course in Biotechnology (RC-214) on 27 Nov, 2009, Organized by UGC-Academic Staff College, Himachal Pradesh University, Shimla</li>
										<li>Treatment of leukemia with L-asparaginase in Emerging trends in Biochemistry, National conference organized by Department of Biochemistry, University of Allahabad, January 23-24, 2010</li>
										<li>Concept of biobusiness in DBT sponsored special lecture series, 23 Nov, 2010, Department of Biotechnology, GGDSD College Chandigarh.</li>
										<li>Therapeutic Enzymes in Refresher Course in Chemistry (RC-242) on 15 Sep, 2011, Organized by UGC-Academic Staff College, Himachal Pradesh University, Shimla. </li>
										<li>Role of mass transfer in fermentation at DST Sponsored 2nd national workshop on fermentation processes “From Petri plate to bioreactor”, 26 Dec 2011, GGDSD College Chandigarh.</li>
										<li>Miniature bioreactor at DST Sponsored 2nd national workshop on fermentation processes “From Petri plate to bioreactor”27 Dec 2011, GGDSD College Chandigarh.</li>
										<li>Biomolecules through biotechnology at UGC Sponsored national seminar on “Environmental issues and green chemistry in day to day life”, 21-22 Jan 2012, SBPG College Baragaon, Varanasi</li>
										<li>Biocatalysis and biotransformation at UGC Sponsored national conference on “Emerging frontiers in chemical sciences”, 23-24 Jan 2012, SBPG College, Baragaon, Varanasi</li>
										<li>Biocatalysts in the treatment of human diseases, in Refresher Course in Chemistry (RC-260) on 4 Dec, 2012, Organized by UGC-Academic Staff College, Himachal Pradesh University, Shimla </li>
										<li>Microbial growth kinetics and Bioreactor types and applications, at DST Sponsored 3rd  national workshop on fermentation processes “From Petri plate to bioreactor”, 23 Dec, 2012, GGDSD College Chandigarh.</li>
										<li>Indoor pollution in Refresher Course in Environmental Sciences (RC-275) on 10 May, 2014, Organized by UGC-Academic Staff College, Himachal Pradesh University, Shimla </li>
										<li>Batch growth kinetics and Media formulation for fermentation, at DST Sponsored 5th   national workshop on fermentation processes “From Petri plate to bioreactor” 22 Dec, 2014, GGDSD College Chandigarh.</li>
										<li>Immobilization of cells and enzymes and Concept of Biobusiness, at DST Sponsored 5th   national workshop on fermentation processes “From Petri plate to bioreactor” 23 Dec, 2014, GGDSD College Chandigarh.</li>


										
										<i><center><div id='more' onClick='info();' style='text-align: center;
																				    width: 40%;
																				    background-color: #82b440;
																				    color: #FCFBFB;
																				    cursor:pointer;
																				    padding-top: 2px;
																				    padding-bottom: 2px;
																				    border-radius: 7px;'
																				     >
										Click to hide Information
										</div></center></i>

										</div>

									</ul>

									
									
									
									
									
</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>

