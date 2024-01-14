<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">

	<title>KIDSHERO</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!---.CSS--->
	<link rel="stylesheet" type="text/css" href="projectform.css">




</head>
<body>



<!---HEADER SECTION-->

<table class="tab1" border="2" width="100%">

		<tr>
		<th>
			<img class="Logo" src="img/logo.jpg"width="50px"height="50px" align="left">

				<p>KIDHERO</p>
				<a class="set1" href="#">Home</a>
				<a class="set2" href="game.html">Game Upload</a>
				<a class="set3" href="news.html">News</a>
				<a class="set4" href="rewards.html">Rewards</a>
				<a class="set5" href="profile.html">Profile</a>
				<a class="set6" href="user.html"><img src="img/user.jpg"width="25px"height="25px"></a>
				<a class="set7" href="cart.html"><img src="img/cart1.jpg"width="25px"height="25px"></a>

		</th>
		</tr>
</table>
<br>


<div class="menu5">
<center>
<form method="POST" action="read01.php">

<h2 class="menu4">LOGIN</h2>

<h3><label>USER NAME</label>
<input type="text" name="fname"  class="menu6" placeholder="USER NAME" ></h3><br><br>

<h3><label>PASSWORD</label>
<input type="password" name="paw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" class="menu6" placeholder="PASSWORD" ></h3><br><br>


<input type="submit" value="LOGIN" class="menu7"><br><br>


</form>

<hr><br><br>
<!--<button name="btn2" class="menu7"><a href="projectform1.html" style="text-decoration:none;color:white;">SING UP</a></button><br><br>-->


</div>
<center>







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
      <div class="help footer-body-div"><a href="#help">Help</a></div>
      <div class="about footer-body-div"><a href="#about">About</a></div>
    </div>
  </div>
</footer>


</body>
</html>