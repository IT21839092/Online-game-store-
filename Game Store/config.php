<?php

$server="localhost";
$username="root";
$pwd="";
$database="project";

$con=new mysqli($server,$username,$pwd,$database);

if($con->connect_error){
	
	die("Connection failed: " . $con->connect_error);
}
else{
	
	
	echo "connect";
	
}


?>