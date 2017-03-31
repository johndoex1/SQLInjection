<?php
//Error-Based SQLi
include ('header.php');
include ('db.php');
	$id = $_GET["company"];
	$sql = "SELECT * FROM company WHERE name= '$id';";
	$result = mysqli_query($connection,$sql); //sends a mysql query

	if($result){
		while($row = mysqli_fetch_assoc($result)){   //returns an associative array that corresponds to the fetched row
			echo '<ul>';
			echo '<li>' . $row["name"] . '</li>';
			echo '<li>' . $row["founder"] . '</li>';
			echo '<li>' . $row["date"] . '</li>';
			echo '</ul>';
		}
	}else{
		echo "The error is " . mysqli_error() . " (" . mysqli_errno() . ") " ;
	}
	

include('footer.php');
?>