<?php

function mysqlexec($sql){
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="farmercart"; // Database name

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
		  echo "Successfully Added Category";
		  echo "<a href=\"addcat.php\">";
		  echo "Add another category";
		  echo "</a>";
		} else {
		  echo "Error: " . $sql . "<br>" . $result;
		}

	}

}
?>