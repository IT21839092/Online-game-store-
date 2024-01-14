<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">

	<title>KIDSHERO</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!---.CSS--->
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="Stylesheet" href="style/paymentPage.css">
	
	<!---.js--->
	<script src="js/pay.js"></script> 

</head>
<body>
<table class="tab1" border="2" width="100%">

		<tr>
		<th>
			<img class="Logo" src="image/logo.jpg"width="50px"height="50px" align="left">

				<p>KIDHERO</p>
				<a class="set1" href="#">Home</a>
				<a class="set2" href="#">Game Upload</a>
				<a class="set3" href="#">News</a>
				<a class="set4" href="#">Rewards</a>
				<a class="set5" href="#">Profile</a>
				<a class="set6" href="#"><img src="image/user.jpg"width="25px"height="25px"></a>
				<a class="set7" href="#"><img src="image/cart1.jpg"width="25px"height="25px"></a>

		</th>
		</tr>
</table>
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
	$i=0;
	
	$sql="SELECT * FROM payment WHERE cardNumber LIKE '$cardN'";
	
	$result=$con->query($sql);
	
	if($result->num_rows>0)
	{
		echo "<table border='1'style='color:white;'>
				<tr>
					<th>pay_id</th>
					<th>paymentMethod</th>
					<th>amount</th>
					<th>cardNumber</th>
					<th>ExpirationDate</th>
					<th>securityCode</th>
					<th>Edit Record</th>
					<th>Delete Record</th>
				</tr>";
				
		while($row=$result->fetch_assoc())
		{
				//if($cardN==$row["cardNumber"] && $cart==$row["cart_id"])
			{
				$id=$row["pay_id"];
				
				echo "<tr>
						<td>".$row["pay_id"]."</td>
						<td>".$row["paymentMethod"]."</td>
						<td>".$row["amount"]."</td>
						<td>".$row["cardNumber"]."</td>
						<td>".$row["ExpirationDate"]."</td>
						<td>".$row["securityCode"]."</td>
						<td><button type='submit'><a href='editPayment.php?id=$id'>Edit</a></button></td>
						<td><button type='submit'><a href='deletePayment.php?id=$id'>Delete</a></button></td>
					</tr>";
					echo "</table>";
					break;

			}
			// if($cardN!=$row["cardNumber"])
			// {
				// continue;
					
			// }
			// else
			// {         	   
				// //echo "<script>alert('Already exist')</script>";
				
			// }				
		}
	}
	else
	{
		echo "<script>alert('No Records!')</script>";
	}
	
	$con->close();

?>
<br><br>


</body>
</html>