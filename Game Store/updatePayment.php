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
	
	
	
		$pIdN=$_POST["payId"];
		$methodN=$_POST["method"];
		$amountN=$_POST["amount"];
		$cnumberN=$_POST["CNum"];
		$EdayN=$_POST["txt_ED"];
		$ScodeN=$_POST["SCode"];
		
		$sql="UPDATE payment 
			  SET pay_id=$pIdN,paymentMethod='$methodN',amount=$amountN,cardNumber='$cnumberN',ExpirationDate='$EdayN',securityCode=$ScodeN
			  WHERE pay_id=$pIdN";
			  
		if($con->query($sql))
		{
			header('location:logpay1.php');
		}
		else
		{
			echo "<script>alert('Updating error!')</script>";
		}
	
	
	$con->close();
?>