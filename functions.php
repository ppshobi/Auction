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

function addtocart($prodname,$prodid,$price,$qty,$img){
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart']= array();
		$_SESSION['totalcost']=0;
	} 
	$product = array('name'=>$prodname,'id' => $prodid,'price'=>$price,'qty'=>$qty,'img'=>$img);
	if(array_push($_SESSION['cart'],$product)){
		$_SESSION['totalcost']+=$price*$qty;
		return true;
	}else{
		return false;
	}
	
}




function isuserloggedin(){
	if(isset($_SESSION['farmercart_user_id'])){
 		return true;
	}
	else{
		return false;
	}
}


?>