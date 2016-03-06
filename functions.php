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

function placeorder(){
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		if (isset($_GET['placeorder'])) {
			$error=0;
			$userid=$_SESSION['farmercart_user_id'];
			//shipment details
			$title=$_GET['title'];
			$name=$_GET['name'];
			$addr=$_GET['addr1'] . "<br/>" . $_GET['addr2'];
			$pin=$_GET['pin'];
			$city=$_GET['city'];
			$country=$_GET['country'];
			$state=$_GET['state'];
			$phone=$_GET['phone'];
			//building shipto address from the get values
			$shipto= $title . "." .$name . "<br/>";
			$shipto.=$addr . "<br/>";
			$shipto.=$city . " " .$state . "<br/>";
			$shipto.=$country . "<br/>";
			$shipto.=$pin . "<br/>";
			$shipto.=$phone;

			//user id
			$userid=$_SESSION['farmercart_user_id'];
			if(isset($_SESSION['totalcost'])){
				$totalcost=$_SESSION['totalcost'];
			}else{
				echo "<script>alert(\"Add some items to your cart\")";
				echo "</script>";
				header("location:index.php");
			}
			$sql="INSERT INTO orders (orderid,userid,totalcost,shipto,orderstatus,orderdate)VALUES('','$userid','$totalcost','$shipto','0',CURDATE())";
			$result=mysqlexec($sql);
			if ($result) {
				//inserted details to order table then insert to order details table
				$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'farmercart' AND TABLE_NAME = 'orders'";
				$result=mysqlexec($sql);

				$row=mysqli_fetch_array($result);
				//finding last inserted order id
				$orderid=$row[0]-1;

				//Getting product details from shopping cart session;
				if (isset($_SESSION['cart'])) {
					$items=$_SESSION['cart'];
					foreach($items as $key => $product){
						$prodid=$product['id'];
						$price=$product['price'];
						$qty=$product['qty'];
					$sql2="INSERT INTO orderdetails(detailid,orderid,productid,price,qty)VALUES('','$orderid','$prodid','$price','$qty')";
					$result2=mysqlexec($sql2);
					if (!$result2) {
						$error=1;
						break;
					}
					
					}// end of for each loop

				}
			}
		
			if ($error==1) {
				echo "<script>alert(\"Erroir When inserting to order details\")</script>";
			}else{
				echo "<script>alert(\"Your Order Placed Successfully\")</script>";

				unset($_SESSION['cart']);
				unset($_SESSION['totalcost']);
			}
		}
	}

}//end of placeorder function


?>