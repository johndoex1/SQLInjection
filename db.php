<?php
//1. create a DB connection
$dbhost = "localhost"; 
$dbuser = "your_username";
$dbpassword ="your_password";
$dbname = "valley";
$dbport = 5432;
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname, $dbport); //open a connection to a MySQL Server

//test if connection occurred
if(mysqli_connect_errno()){
   die("Connection failed" . mysqli_connect_error() . " (" .mysqli_connect_errno() . ") " );
}
?>

<html>
<head><title>Hello DB</title></head>
<body>

</body>
</html>


