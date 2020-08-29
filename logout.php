<?php
session_start();
ob_start();
unset($_SESSION['uid']);
header("Location:index.php");
?>