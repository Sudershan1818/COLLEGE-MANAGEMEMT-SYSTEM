
<?php ob_start(); 
include("connection.php")?>
<html>
<head>
  <title>THE DIRECTOR</title>
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
<div class='col-md-5'><h2 >PROF. (DR.) MANU SOOD</h2><br><h4>PROFESSOR & CHAIRMAN,<br>
DEPARTMENT OF COMPUTER SCIENCE & <br>
DIRECTOR, UIIT</h4></div><div class='col-md-3'></div></div>
<div class='row'><div class='col-md-4'>
<a href='guest.php'><button class='btn btn-success btn-block'>TEACHING(guest)</button></a></br>
		<a href='faculty.php'><button class='btn btn-success btn-block'>TEACHING(regular)</button></a></br>
		<a href='nonteachingstaff.php'><button class='btn btn-success btn-block'>NON-TEACHING</button></a>
		
</div>
<div class='col-md-8'>
<header class='major'>
									
									<img src='teacher/manu.jpg' width='300px' height='300px' style='float:right; border:3px solid green' class='img img-responsive img-circle'> 
								</header>
								<h3>Professional Qualifications</h3>
										<ul style='list-style-type: disc; margin-left:20px;'>
											
						                <li><strong>B.E. (Electronics & Telecommunications)</strong> from Government Engineering College, Jabalpur, M.P. (Rani Durgawati University, Jabalpur) in 1988 with 81% marks</li>
						                <li><strong>Post Graduate Diploma</strong> in Computers Management (Software) in 1991</li>
						                <li><strong>M. Tech. (INFORMATION SYSTEMS)</strong>  from Division of Computer Engineering, Netaji Subhas Institute of Technology, Dwarka, New Delhi in 2001 with Delhi Chief Minister’s Gold Medal</li>
						                <li><strong>Ph.D.</strong> from the Division of Computer Engineering, Netaji Subhas Institute of Technology, Dwarka, New Delhi under the Faculty of Technology, Delhi University, Delhi, the title being “Requirements Model: A Basis for Computation of Metrics and Derivation of Class Diagram and Test Cases” in February 2008</li>
						            </ul>
										<h3>Professional Experience</h3>
										<ul style='list-style-type: disc; margin-left:20px;'>
										<li>More than<strong> 28 years</strong> in different fields at different levels; approx. <strong>5 years in Industry and 23 years with Himachal Pradesh University, Shimla</strong></li>
										<li>Remained <strong>Chairman, Department of Computer Science, Himachal Pradesh University, Shimla</strong> from <strong>02/07/2009 to 01/07/2011</strong></li>
										<li>At present also, working as<strong> Chairman, Department of Computer Science, Himachal Pradesh University, Shimla</strong> since <strong>27th July 2015</strong></li>
										<li>Also working as <strong>Director, University Institute of Information Technology, Himachal Pradesh University, Shimla</strong> since <strong>22nd February 2014</strong></li>
										<h3>Phone </h3>
										0177-2833571(office)

										<h3>Email</h3>soodm_67@yahoo.com

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
										<h2>Research: Some Salient Features</h2>
										<li>Around 50 nos. of publications in International Journals, Conferences & Books chapter & 07 in National Conferences, Journals (Please see the list appended at the end)</li>
										<li>At present, Google Scholar Citation Index 200 (Approx) with h-index of 8 & i10-Index of 7</li>
										<li>Member, Program Committee, 1st, 2nd and 3rd International Conference on Parallel, Distributed and Grid Computing (PDGC 2010, PDGC 2012 & PDGC 2014), JPUIT, Solan, India. </li>
										<li>Member, International Technical Program Committee, International Workshop on Scalable Distributed Research for Grids, Clusters and Clouds (SDR-GCC 2010), 18-19 October 2010, Moscow, Russia.</li>
										<li>Member, Technical Program Committee, International Congress on Ultra Modern Telecommunications and Control Systems (ICUMT 2010), 18-20 October 2010, Moscow, Russia.</li>
										<li>Member, National Advisory Committee, IEEE-MTTS 1st International Conference on Advances in Computing and Communication, 8-10 April 2011, National Institute of Technology, Hamirpur, (Himachal Pradesh), India</li>
										<li>Member, Technical Program Committees for the following conferences: <strong><i>
										UKSim2012, UKSim2011, SDR-GCC 2010, IJSSST-V13, IJSSST-V12, ICUMT 2012, ICUMT-Workshop-40, EMS2012, EMS2011, CIMSim2012, CIMSim2011, CICSyN2012, CICSyN2011, EUROSIM2013, ISMS2013, ICUMT 2011 Budapest, ISMS2012, ISMS2011, ISI2012, CICSyN2010, ISI2013- Mysore, ISI'12, SIMS2013, ISME2013 and many more</i></strong></li>
										<li>Reviewer for the following conferences:<strong><i>
										AMS2011, AMS2012, ISCI 2012, ISCAIE 2012, PDGC 2012, PDGC 2014 and many more</i></strong></li>
										<li>Chaired a Technical Session each at 1st, 2nd & 3rd IEEE International Conference on Parallel, Distributed and Grid Computing (PDGC 2010, PDGC 2012 & PDGC 2014), JPUIT, Solan, India.</li>
										<li>Chaired a Session in National Conference on Emerging Computer Technologies (ECT-05), held at HRMMV, Jalandhar on September 29-30, 2005</li>
										<li>Key Speaker, National Seminar on Enterprise Information Systems (AICTE Sponsored), Apeejay Institute of Management, Jalandhar on May 24, 2008</li>
										<li>Key speaker, National Seminar on “Emerging Trends in   Management” 24th Oct 2009, Himalayan Institute of Management, Kala Amb, (Himachal Pradesh)</li>
										<li>Resource Person, UGC sponsored National Seminar on “Prospects of IT: 2020”, Hindu Girls College, Jagadhari, 14-15 September 2010</li>
										<li>Guided more than 150 Projects of software development of Post Graduate Diploma in Computer Applications and 130 Projects of software development of Master of Computer Applications; and supervised 24 dissertation theses of M. Tech. (Computer Science) and 03 dissertation theses of M. Phil.</li>
										<li>Supervised 04 nos. of Ph.D. students</li>
										<li>At present, supervising 08 Nos. of Ph.D. students in the Department, 03 Nos. of dissertation works of M. Tech. (Computer Science)</li>
										<li>Evaluated a no. of Ph.D. thesis and conducted viva-voce examinations</li>



										<h2>Career: Snapshots</h2>
										<hr>
										<h3><strong>General</strong></h3>
										<li>First division through out the career.</li>
										<li>National Merit Scholarship Holder in X & XI standards</li>
										<li>9th Rank in the merit list in Himachal Pradesh State in X standard</li>
										<li>3rd Rank in the merit list in Himachal Pradesh State in XI standard</li>
										<li>Qualified  GATE – 2000</li>
										<li>Delhi Chief Minister’s Gold Medal in M. Tech.</li><br>
										<h3><strong>Professional</strong></h3><br>
										<ol style='list-style-type: decimal; margin-left:20px;'>
										<h3><li>Himachal Pradesh University</li></h3><br>
												<ul style='list-style-type:square; margin-left:30px;'>

						                <li>Founder Coordinator, Training & Placement Cell, Dept. of Computer Science, Himachal PradeshU. Shimla. Established the Training & Placement Cell in the Department for 6 months training & On-Campus / Off-Campus Recruitment Programme of M.C.A. students</li>
						                <li>Founder Coordinator, M. Tech. Programme, Dept. of Computer Science, Himachal PradeshU. Shimla till April 2008 and as Coordinator, M. Tech. Programme twice after September 2009 till date</li>
						                <li>Subject Expert and also Vice-Chancellor’s Nominee for different Inspection Committees for computer related courses for different colleges in the state</li>
						                <li>Member, Committee for up-gradation of Computer Centre, Himachal PradeshU. Shimla in 1996-97</li>
						                <li>Member, Committee for establishing Computer Centre in Institute of Management Studies (IMS), Himachal PradeshU. Shimla</li>
						                <li>Member, Committee for establishing Computer Centre in International Centre for Distance Education & Open Learning (ICDEOL), Himachal PradeshU. Shimla</li>
						                <li>Member, Committee and Member, Technical Committee for setting up On Campus Optical Fiber Wide Area Network in the Himachal PradeshU. Shimla</li>
						                <li>Member, Board of Studies, Department of Computer Science, Himachal PradeshU. Shimla (Active participation in the design and redesign of various Curricula, introduction of new courses / subjects)</li>
						                <li>Member, Committee for Computerization of Examination System in Himachal PradeshU. Shimla</li>
						                <li>Member, Committee for Computerization of Finance Wing in Himachal PradeshU. Shimla</li>
						                <li>Resource Person for imparting IT training to the Non-Teaching Employees of Himachal PradeshU. Shimla</li>
						                <li>Resource Person / Coordinator for various Orientation Programmes, Refresher Courses and IT Awareness Programmes for college / university teachers of India held regularly by the Academic Staff College, Himachal PradeshU. Shimla</li>
						                <li>Guest Faculty for Dept of Commerce, Dept of Biotechnology, Dept of Biosciences, Institute of Management Studies, Institute of Vocational Studies and ICDEOL on Himachal PradeshU. campus</li>
						                <li>Formerly, approved Academic Counselor for M.C.A. programme of Indira Gandhi National Open University (I.G.N.O.U.) at Shimla Study Centre</li>
						                <li>Project Evaluator for M.C.A. programme of Indira Gandhi National Open University (I.G.N.O.U.) at Regional Centre, Shimla</li>
						                <li>Formerly, Resource Person for different Computer Training Programmes in Himachal Pradesh Institute of Public Administration (HIPA), Shimla. The institute is responsible for fulfilling various training needs of the officers of the state, especially the administrative officers</li>
						                <li>Formerly, Visiting Faculty to the University College of Business Studies, Shimla and Govt. College, Dharamshala for B.C.A. / B.B.A.</li>
						                <li>Active participation in many other on-campus co-curricular activities</li>
						                <li>Initiated the process for Computerized printing of Handbook of Information for admission to various courses of Himachal PradeshU. Shimla for the first time in 1997</li>
						                <li>Active role in the establishment of various Computer Labs in Department of Computer Science, Himachal PradeshU. Shimla</li>
						                <li>Chairman, Department of Computer Science, Himachal Pradesh University, Shimla</li>
						                <li>Chairman, Board of Studies (UG & PG), Department of Computer Science, Himachal Pradesh University, Shimla</li>
						                <li>Member, Faculty of Physical Sciences, Himachal Pradesh University, Shimla</li>
						                <li>Director, University Institute of Information Technology, Himachal Pradesh University, Shimla</li>
						                <li>Chairman, Board of Studies (UG & PG), UIIT, Himachal Pradesh University, Shimla</li>
						                <li>Member, Faculty of Engineering & Technology, UIIT, Himachal Pradesh University, Shimla</li>
						                <li>Member, Academic Council, Himachal Pradesh University, Shimla</li>
						                <li>Ex-Member, Anti Ragging Committee, Faculty of Physical Sciences, Himachal Pradesh University, Shimla</li>
						                <li>Convener, Standing Committee in Computer Science, Himachal Pradesh University, Shimla</li>
						                <li>Convener, Research Degree Committee in Computer Science, Himachal Pradesh University, Shimla</li>
						                <li>Ex-Chairman, Work group on ICT Intervention in Quality Assurance, Internal Quality Assurance Cell, Himachal Pradesh University, Shimla </li>
						     
						     
						                <li>Member, Advisory Committee, Himachal Pradesh University Library</li>
						                
						                </ul>
						                
						                <h3><li>Outside Himachal Pradesh University</li></h3>
						                <ul style='list-style-type:square; margin-left:30px;'>
										<li>Component level repairs exposure</li>
										<li>Designed & developed a prototype of a Banker Machine using Intel Microcontroller for Methodex Systems, New Delhi in 1993</li>
										<li>Subject Expert, Selection Committee for Executive (IT) at SJVNL, Shimla</li>
										<li>Conducted Departmental Examination for promotion of various members of staff (IT Department) at SJVNL, Shimla</li>
										<li>As a Head Examiner, conducted Examination for testing the practical proficiency of applicants for the post of Junior Engineer (IT) for Himachal Pradesh Power Corporation Ltd., Shimla</li>
										<li>Subject Expert, Selection Committees for Computer Faculty at various schools, colleges in the state and universities in India</li>
										<li>Subject Expert, Inspection Committee, Himachal Pradesh Private Education Regulatory Commission, Government of Himachal Pradesh, Shimla</li>
										<li>Subject Expert, Inspection Committee, Himachal Pradesh Technical University, Dharamshala,  Himachal Pradesh</li>
										<li>Observer, DOEACC Shimla Centre for its O, A, B & C Level Exams since last so many years</li>
										<li>Life Member, Computer Society of India (Membership no. 00019010)</li>
										<li>Member, Expert Committee, MCA Hindi medium course for vetting and editing course material of MCA Hindi Programme at SOCIS, IGNOU, New Delhi</li>
										<li>Expert Member, Interview Committee for admission to Ph.D. in Computer Science, IGNOU, 2009, New Delhi</li>
										<li>Ex-Member, Ethics Committee, Indira Gandhi Medical College, Shimla</li>

										</ul>
										</ol>
										<h3>Projects</h3>
										<li>Completed: Dr. Manu Sood, “Development of a Tool to Compute Problem Complexity of an Information System”, 2004 to 2006, UGC (Minor Project), Rs.25,000.00</li>
										<li>Completed: Dr. Manu Sood, “Simulation Based Learning Approach to Software Engineering and Management”, 2009 - 2012, University Grants Commission, New Delhi (Major Research Project) worth Rs.8,46,800.00</li>


										<h3>Experience Profile</h3>
										<li><strong>Joined as Programmer in July 1993 in the Computer Centre, Himachal PradeshU. Shimla</strong>
										<ul style='list-style-type:square; margin-left:30px;'>
										<li>Taught students of M.C.A. and P.G.D.C.A. in the Dept of Computer Science, Himachal PradeshU. Shimla</li>
										<li>Was a member of the team for the computerization of various activities in the University including developing pay-roll system, CPF/GPF System (COBOL & dBase), library system (dBase), office management system in the Vice-Chancellor’s Office etc</li>
										<li>Established a DTP Cell in the Centre for various in-house DTP jobs of the University including Handbooks of Information for various courses in the campus, PMT & CPET entrance test brochures etc</li>
										<li>Participated actively in the up-gradation of then existing hardware & software of the Computer Centre in Himachal PradeshU. and hence ensuring the availability of one of the best platforms to the students of the University</li>
										<li>Spread computer literacy within the University among the students of the departments other than those of Computer Science and also among the Teaching & Non-Teaching staff of the University</li>
										</ul>
										</li>

										<br>
										<li>

										<strong>Joined as Lecturer, Department of Computer Science, Himachal PradeshU. Shimla in June 1997 </strong>
										<ul style='list-style-type:square; margin-left:30px;'>
										<li>Teaching various subjects to the students of M.C.A., M. Tech. & Ph.D.</li>
										<li>Guiding students of M.C.A. in carrying out their 6 months project work in VI Semester and the students of M. Tech. in their dissertation work in III & IV semester</li>
										<li>Question papers setting & Evaluation of Answer Scripts for various examinations</li>
										<li>Invigilator for various examinations in the University</li>
										<li>Centre Superintendent for various examinations in the University</li>
										<li>Carry out practical evaluation of the students of the Department, ICDEOL, Various affiliated Colleges and other Universities</li>
										<li>Conduct seminars/tutorials on various topics in the Department</li>
										<li>Actively contributed in setting up of syllabi for different courses of the Department of Computer Science as well as for the courses related to computers in other departments of Himachal PradeshU. and Colleges affiliated to Himachal PradeshU.</li>
										<li>Looked after the training & placement needs of the students of the department as Training & Placement Coordinator twice, each for a period of 2 years </li>
										<li>Acted as Coordinator, M. Tech. Programme twice  in the department</li>
										<li>Supervising  research work of M. Tech. and Ph.D. students of the Department and M. Phil. students of other Universities</li>
										<li>Guiding students of PGDCA & MCA of the Department and of other Universities</li>

										</ul></li>
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
										
										
										
									</ul>
									
									
									
									
									
</div></div>";
?>
</div>

<?php include("footer1.php") ?>
</body>
</html>
