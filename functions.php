<?php

function registration() {
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$address = $_POST['address'];

		$sql = "INSERT INTO users(id, username, password, email, userlevel, name, pic, phone,address) VALUES ('', '$username', '$password', '$email', '3', '$name', '', '$phone','$address')";
		$result = mysqlexec($sql);
		if($result) {
			echo "<script>alert(\"Successfully registered\")</script>";
		} else{
			echo "<script>alert(\"Error while registering\")</script>";
		}
	}
}

function getuser(){
if (isset($_SESSION['auction_user_id'])) {
	$bidder=$_SESSION['auction_user_id'];
	return $bidder;
}else{
	return false;
}
}

function mysqlexec($sql){
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="auction"; // Database name

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		return false;
	}


}

function bidnow($prodid,$bid,$bidder){
	$sql="UPDATE biddetails SET bid='$bid',bidder='$bidder' WHERE productid=$prodid";
	$result=mysqlexec($sql);
	if ($result) {
		$sql2="INSERT INTO bidparticipation(id,productid,userid) VALUES('','$prodid','$bidder')";
		$result2=mysqlexec($sql2);
		if($result2){
			//GENERate Message for other participated users
			$msg="A user Raised Bid amount By &#8377; " .$bid. "<a href=\"../viewsingleproduct.php?prodid={$prodid}\">"." for the product with Product id". $prodid ."</a> Please Rise your bid ASAP";

			$sql3="SELECT * FROM bidparticipation WHERE productid=$prodid";
			$result3=mysqlexec($sql3);
			while($row3=mysqli_fetch_assoc($result3)){
				$msgto=$row3['userid'];
				$sql4="INSERT INTO messages(msgid,msgto,msg)VALUES('','$msgto','$msg')";
				$result4=mysqlexec($sql4);
			}
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}


}


function isuserloggedin(){
	if(isset($_SESSION['auction_user_id'])){
 		return true;
	}
	else{
		return false;
	}
}



?>