<?php
//Union-Based SQLi
include('header.php');
include('db.php');

if(preg_match('/#/', $_GET["company"])){    //we can block # comment character, so the attacker can only use -- (double dash) 
	die("We don't like abundant spaces");
}

$id = $_GET["company"];
	$sql = "SELECT * FROM company WHERE name= '$id';";
	$result = mysqli_query($sql); //sends a mysql query
	if($result){
		while($row = mysqli_fetch_assoc($result)){ //returns an associative array that corresponds to the fetched row
			echo '<ul>';
			echo '<li>' . $row["name"] . '</li>';
			echo '<li>' . $row["founder"] . '</li>';
			echo '<li>' . $row["date"] . '</li>';
			echo '</ul>';
		}
	}else{
			echo "Try again looser!";
		}
include_once('footer.php');

?>