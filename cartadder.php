<?php
session_start();
include_once("includes/dbconn.php");
include_once("functions.php");
$prodname=$_GET['prodname'];
$prodid=$_GET['prodid'];
$price=$_GET['price'];
$qty=$_GET['req_qty'];
$img=$_GET['img'];

if(addtocart($prodname,$prodid,$price,$qty,$img)){
	echo "<script>alert(\"Successfully Added the Product to cart\")</script>";
	echo "<script>window.history.back()</script>";
}else{
	echo "<script>alert(\"There was some problem in adding the product to cart\")</script>";
	echo "<script>window.history.back()</script>";
}

?>