<?php

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


function addcat(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$cat=$_POST['catname'];
		$descr=$_POST['catdescr'];
		$sql = "INSERT INTO category (id, cat, descr) VALUES ('', '$cat', '$descr')";
		$result=mysqlexec($sql);
		if ($result) {
		  echo "<script>alert(\"Successfully Added Category\")</script>";
		 
} else {
		  echo "Error: " . $sql . "<br>" . $result;
		}

	}

}
function updateproduct($prodid){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name=$_POST['name'];
		$descr=$_POST['descr'];
		$cat=$_POST['cat'];
		$minbid=$_POST['minbid'];
		$unit=$_POST['unit'];
		$visibility=$_POST['visibility'];
		$bidstartdate=$_POST['start'];
		$bidenddate=$_POST['end'];
				

		$sql="UPDATE product SET name='$name', descr='$descr', category='$cat', minbid='$minbid', unit='$unit', visibility='$visibility',bidstartdate='$bidstartdate', bidenddate='$bidenddate' WHERE id=$prodid";

		$result=mysqlexec($sql);
		if ($result) {
			echo "<script>alert(\"Successfully Updated the Product\")</script>";
		}
		else{
			echo  "Something gone wrong";
		}
		}


}



function addprod(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name=$_POST['name'];
		$descr=$_POST['descr'];
		$cat=$_POST['cat'];
		$minbid=$_POST['minbid'];
		$unit=$_POST['unit'];
		$start=$_POST['start'];
		$end=$_POST['end'];
		$visibility=$_POST['visibility'];
		$seller=$_SESSION['auction_user_id'];

		//photoupload function
		// $verify[]=photoupload($seller);
		// $result=$verify[0];
		// $pic1=$verify[1];
		// $pic2=$verify[2];
		// $pic3=$verify[3];
		// $pic4=$verify[4];
		// $pic5=$verify[5];
//need to refactor this to a fucntion
$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'auction' AND TABLE_NAME = 'product'";
		$result=mysqlexec($sql);

		$row=mysqli_fetch_array($result);
		//finding last inserted row id/product id
		$lastid=$row[0];

		$target = "../products/" . $seller . "/" .  $lastid ."/";
		if (!file_exists($target)) {
		    mkdir($target, 0777, true);
		}
		//specifying target for each file
		$target1 = $target . basename( $_FILES['pic1']['name']);
		$target2 = $target . basename( $_FILES['pic2']['name']);
		$target3 = $target . basename( $_FILES['pic3']['name']);
		$target4 = $target . basename( $_FILES['pic4']['name']);
		$target5 = $target . basename( $_FILES['pic5']['name']);


		// This gets all the other information from the form
		$pic1=($_FILES['pic1']['name']);
		$pic2=($_FILES['pic2']['name']);
		$pic3=($_FILES['pic3']['name']);
		$pic4=($_FILES['pic4']['name']);
		$pic5=($_FILES['pic5']['name']);

		// Writes the photo to the server
		if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1)&&move_uploaded_file($_FILES['pic2']['tmp_name'], $target2)&&move_uploaded_file($_FILES['pic3']['tmp_name'], $target3)&&move_uploaded_file($_FILES['pic4']['tmp_name'], $target4)&&move_uploaded_file($_FILES['pic5']['tmp_name'], $target5))
		{
			
				
		// Tells you if its all ok
			$result=true;
		}
		else {

		// Gives and error if its not
			$result=false;

		}
//end of refactoring needfunction


		if($result){
		$sql="INSERT INTO product (id, name, descr, category, minbid, pic1, pic2, pic3, pic4, pic5, seller, unit, visibility,bidstartdate,bidenddate) VALUES ('', '$name', '$descr', '$cat', '$minbid', '$pic1','$pic2', '$pic3','$pic4', '$pic5', '$seller', '$unit', '$visibility','$start','$end')";

		$result=mysqlexec($sql);
		if ($result) {
			$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'auction' AND TABLE_NAME = 'product'";
			$result=mysqlexec($sql);

			$row=mysqli_fetch_array($result);
			//finding last inserted row id/product id
			$lastid=$row[0]-1;
			$sql="INSERT INTO biddetails (bidid,productid) VALUES('','$lastid')";
			$result=mysqlexec($sql);
			echo "<script>alert(\"Successfully Added the Product\")</script>";
		}
		else{
			echo  "Something gone wrong";
		}
		}


		
	}

}

function photoupload($seller){
		$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'auction' AND TABLE_NAME = 'product'";
		$result=mysqlexec($sql);

		$row=mysqli_fetch_array($result);
		//finding last inserted row id/product id
		$lastid=$row[0];

		$target = "../products/" . $seller . "/" .  $lastid ."/";
		if (!file_exists($target)) {
		    mkdir($target, 0777, true);
		}
		//specifying target for each file
		$target1 = $target . basename( $_FILES['pic1']['name']);
		$target2 = $target . basename( $_FILES['pic2']['name']);
		$target3 = $target . basename( $_FILES['pic3']['name']);
		$target4 = $target . basename( $_FILES['pic4']['name']);
		$target5 = $target . basename( $_FILES['pic5']['name']);


		// This gets all the other information from the form
		$pic1=($_FILES['pic1']['name']);
		$pic2=($_FILES['pic2']['name']);
		$pic3=($_FILES['pic3']['name']);
		$pic4=($_FILES['pic4']['name']);
		$pic5=($_FILES['pic5']['name']);

		// Writes the photo to the server
		if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1)&&move_uploaded_file($_FILES['pic2']['tmp_name'], $target2)&&move_uploaded_file($_FILES['pic3']['tmp_name'], $target3)&&move_uploaded_file($_FILES['pic4']['tmp_name'], $target4)&&move_uploaded_file($_FILES['pic5']['tmp_name'], $target5))
		{
			
				
		// Tells you if its all ok
			return array(true,$pic1,$pic2,$pic3,$pic4,$pic5,$lastid);
		}
		else {

		// Gives and error if its not
			return false;
		}
		
}

function isadmin(){
	if(isset($_SESSION['auction_admin_id'])){
 		return true;
	}
	else{
		return false;
	}
}

function isloggedin(){
	if(isset($_SESSION['auction_admin_id'])||isset($_SESSION['auction_user_id'])){
 		return true;
	}
	else{
		return false;
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
?>