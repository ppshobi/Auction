<?php

function isloggedin(){
	if(!isset($_SESSION['username'])){
 		header("location:login.php");
	}
}


?>