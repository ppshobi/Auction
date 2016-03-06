<?php session_start();
include_once("../includes/dbconn.php");
include_once("adminfunctions.php");


if(isadminloggedin()){
    //do nothing stay here
}
else{
    header("location:login.php");
}



$seller=$_SESSION['auction_admin_id'];
$orderid=$_GET['orderid'];

$result=shipped($orderid);
if ($result) {
    echo "<script>alert(\"Order Status Changed Successfully\")</script>";
    echo "<script>window.history.back()</script>";
}else{
    echo "<script>alert(\"Order Status Not Changed\")</script>";
    echo "<script>window.history.back()</script>";
}



?>