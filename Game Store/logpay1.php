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
<form class="d1" method="POST" action="readPayment.php">


				<label>Card Number</label><br>
				<input type="password" name="CNum" class="txt" pattern="[0-9]{16}" placeholder="**** **** **** ****" required><br><br>
				<input type="submit" id="subbtn" value="Proceed" class="payB">



</form>
</body>
</html>
		