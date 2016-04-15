<?php
include_once("includes/dbconn.php");
include_once("functions.php");

updatebid();

function updatebid(){
	echo "function triggered";
	$today=date("Y-m-d");
$sql="SELECT * FROM product";
$result=mysqlexec($sql);
if ($result) {
	while($row=mysqli_fetch_assoc($result)){
		if ($today>$row['bidenddate']) {
				$prodid=$row['id'];
				$sql2="SELECT * FROM biddetails WHERE productid=$prodid";
				$result2=mysqlexec($sql2);
				$row2=mysqli_fetch_assoc($result2);
				$wonuserid=$row2['bidder'];
				$sql3="UPDATE product SET bidstatus='$wonuserid'";
				$result3=mysqlexec($sql3);
				if ($result3) {
					echo "The" . $row['name'] . "Was Won By" . $wonuserid;
					echo "\n";
				}
		}
	}
}

echo "\n";

}


?>