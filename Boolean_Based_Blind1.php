<?php
//Boolean-Based SQLi
include('header.php');
include('db.php');

$id = $_GET["company"];
	$sql = "SELECT * FROM company WHERE name= '$id';";
	$result = mysqli_query($sql); //sends a mysql query
	if($result){
		if($row = mysqli_fetch_assoc($result)){ //returns an associative array that corresponds to the fetched row
			//attacker shouldn't see any output on the web application
			//he's all alone in the backyard :)
		}else{
			echo "Try again looser!";
		}
	}
include_once('footer.php');

?>