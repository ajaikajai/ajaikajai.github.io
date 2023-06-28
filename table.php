<?php
require("connection.php");
$name = $_REQUEST["productName"];
$price = $_REQUEST["price"];
$Quandity = $_REQUEST["Quandity"];
$file = $_FILES["img"]["name"];
$res = $con->query("INSERT INTO `product_id` (`Product Name`, `Price`, `Quandity`, `image`) VALUES ('$name',  '$price', '$Quandity', '$file')");
$count=mysqli_affected_rows($con);

if($count>0)
{
	
move_uploaded_file($_FILES["img"]["tmp_name"],"prd/".$file);
header("location: add products.php");
}
?>