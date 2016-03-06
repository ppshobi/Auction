<?php
session_start();
include_once("includes/dbconn.php");
include_once("functions.php");
$prodid=$_GET['prodid'];
$bid=$_GET['sendbid'];
$minbid=$_GET['minbid'];
$bidder=$_SESSION['auction_user_id'];
if($bid<=$minbid){
	echo "<script>alert(\"Your Bid is too low . Please Raise Your Bid\")</script>";
	echo "<script>window.history.back()</script>";
}
else{
	if(bidnow($prodid,$bid,$bidder)){
		echo "<script>alert(\"Successfully Placed your bid\")</script>";
		echo "<script>window.history.back()</script>";
	}else{
		echo "<script>alert(\"There was some problem in placing your bid\")</script>";
		echo "<script>window.history.back()</script>";
	}
}

?>