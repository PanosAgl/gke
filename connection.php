<?php 

$dbhost = "34.116.204.87";
$dbuser = "root";
$dbpass = "panos";
$dbname = "kubernetes";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
}


?>
