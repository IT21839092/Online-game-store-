<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="project";
	
	$con=new mysqli($server,$username,$password,$database);
	
	if($con->connect_error)
	{
		die("Connection Failed!".$con->connect_error);
	}
	
	else
	{
		echo "Connected Successfully!";
	}
	
	$recordId=$_GET['id'];
	
	$sql="DELETE FROM payment WHERE pay_id=$recordId";
	
	if($con->query($sql))
	{
		echo "<script>alert('Deleted successfully!')</script>";
		header ("location:payment.php");
	}
	
	else
	{
		echo "<script>alert('Error Deleting!')</script>";
	}
	
	$con->close();
	
?>