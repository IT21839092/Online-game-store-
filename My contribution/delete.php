<html>
<head>


</head>


<body>


<?php


require 'config.php';


$record=$_GET['id'];

$sql="delete from customer where user_id=$record";


if($con->query($sql)){
	
	
	echo"<script>alert('DELETE SUCCSESFULL')</script>";
	header("location:fromproject1.php");
	
	
}




	header("location:fromproject1.php");









?>
</body>
</html>