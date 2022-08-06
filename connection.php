<?php 

$dbhost = "34.154.12.96";
$dbuser = "root";
$dbpass = "panos";
$dbname = "kubernetes";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
}


?>
