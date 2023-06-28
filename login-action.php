<?php
session_start();
require("connection.php");
$u = $_REQUEST["Username"];
$pass = $_REQUEST["Password"];
$res = $con->query("select * from `login_page`WHERE `emailid`='$u' AND `admin_password`='$pass'");
$count = $res->num_rows;

if ($count>0)
	{	
	$_SESSION["em"]= $u;	
		header("location:dashboard.php");
	}
	else
	{
		   echo "<script>alert('Invalid email or password. Please try again.'); window.location='index.php';</script>";
}

?>