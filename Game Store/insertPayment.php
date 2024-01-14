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
	
	$cardN=$_POST["CNum"];
	$i=1;
	
	$val="SELECT cardNumber FROM payment";
	$result=$con->query($val);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			if($cardN!=$row["cardNumber"])
			{
					continue;
				
			}
			else
			{
				$i=0;
				break;
			}
		}
	}
	else
	{
		echo "<script>alert('No records!')</script>";
	}
	
	if($i!=0)
	{
	
		$method=$_POST["method"];
		$amount=$_POST["amount"];
		$cnumber=$_POST["CNum"];
		$Eday=$_POST["txt_ED"];
		$Scode=$_POST["SCode"];
		
		$sql="INSERT INTO payment(pay_id,paymentMethod,amount,cardNumber,ExpirationDate,securityCode) VALUES ('','$method','$amount','$cnumber','$Eday','$Scode')";
		
		if($con->query($sql))
		{
			echo "<script>alert('Inserted Successfully!')</script>";
			header('location:logpay1.php');
		}
		else
		{
			echo "Error!".$con->error;
		}
	}
	else
	{
		echo "<script>alert('Insertion is unsuccessful!')</script>";
		header('location:payment.php');
	}


	$con->close();

?>