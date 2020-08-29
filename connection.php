<?php
ob_start();
$server="localhost";
$uid_root="root";
$pwd="";
$database="uiit";
$con= mysql_connect($server,$uid_root,$pwd);
if($con)
{
	$mydb=mysql_select_db($database);
	if($mydb)
	{
	}
	else{
		
		
		header("Location:error_page.php?err_no=2");
	}
}
else
{
		header("Location:error_page.php?err_no=1");
}
?>