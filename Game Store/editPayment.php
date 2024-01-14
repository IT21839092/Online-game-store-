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



<!---HEADER SECTION-->

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
<br>
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
	
	$record=$_GET['id'];
	
	$sql="SELECT * FROM payment WHERE pay_id=$record";
	$result=$con->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$Pid=$row["pay_id"];
			$Pm=$row["paymentMethod"];
			$Am=$row["amount"];
			$Cnum=$row["cardNumber"];
			$Ed=$row["ExpirationDate"];
			$Sc=$row["securityCode"];
			
			break;
		}
		//header('location:readPayment.php');
	}
	else
	{
		echo "<script>alert('No Records!')</script>";
	}
?>

<div>
			<form class="d1" method="POST" action="updatePayment.php">
			
				<h2><b>Payment</b></h2>
				
				<label><h3>Choose payment method below</h3></label>
				<select class="txt" name="method" value="<?php echo $Pm?>">
				<option>Credit Card</option>
				<option>Debit Card</option>
				</select>
				
				<label><h3>Payment Details</h3></label>
				<label>Payment Id</label><br>
				<input type="text" name="payId" value="<?php echo $Pid?>" class="txt" readonly><br><br>
				
				<label>Card Number</label><br>
				<input type="password" name="CNum" value="<?php echo $Cnum?>" class="txt" pattern="[0-9]{16}" placeholder="**** **** **** ****" required><br><br>
				
				<label>Expiration date</label><br>
				<input type="date" name="txt_ED" value="<?php echo $Ed?>" class="txt"><br><br>
				
				<label>Security Code</label><br>
				<input type="password" name="SCode" value="<?php echo $Sc?>" class="txt" pattern="[0-9]{4}" placeholder="****" required><br><br>
				
				<label>Amount</label><br>
				<input type="text" name="amount" value="<?php echo $Am?>" class="txt" readonly required><br><br>
				
				<div style="color:white;"><input type="checkbox" name="myCheck" id="chkB" onclick="enableButton()" required>
				I'm not a robot</div><br><br>
				
				
					<div>
						<button type="button" id="btn1"><a href="#" style="text-decoration:none;color:black;">Return to cart</a></button>
						<input type="submit" id="subbtn" value="Proceed" class="payB" disabled>
					</div>
					
				
			</form>
		</div>
		<br><br>



<!----FOOTER---->

<footer>
  <div class="footer-top">
    <div class="footer-top-body footer-flex">
      <div class="contact-body footer-body-div">
        <h3>Contant Us</h3>
        <p>+94 705523653</p>
      </div>
      <div class="email-body footer-body-div">
        <h3>Email</h3>
        <p>learning@gmail.com</p>
      </div>
      <div class="follow-us-body footer-body-div">
        <h3>Follow Us</h3>
        <div class="footer-social-media">
          <a href="#facebook" class="fa fa-facebook-official"></a>
          <a href="#twitter" class="fa fa-twitter-square"></a>
          <a href="#instagram" class="fa fa-instagram"></a>
          <a href="#google-plus" class="fa fa-google-plus-square"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-bottom-body footer-flex">
      <div class="privacy-policy footer-body-div"><a href="#privacy-policy">Privacy Policy</a></div>
      <div class="help footer-body-div"><a href="#">Help</a></div>
      <div class="about footer-body-div"><a href="#">About</a></div>
    </div>
  </div>
</footer>


</body>
</html>