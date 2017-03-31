<?php
//1. create a DB connection
$dbhost = "localhost:3306"; 
$dbuser = "root";
$dbpassword ="Bu24";
$dbname = "valley";
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname); //open a connection to a MySQL Server

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


