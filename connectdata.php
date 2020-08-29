<?php
$server="localhost";
$useriid="root";
$pwd="";
$database="uiit";
$conn= mysql_connect($server,$useriid,$pwd);
if (!$conn) 
{
    die('Could not connect: ' . mysql_error());
}
?>