<!DOCTYPE html> 
<html>
<head>

<script src="fromproject1.js"></script>
<link rel="stylesheet" href="projectform.css">



</head>
<body>

<h3 class="menu4">LOGIN Form</h3>

<?php
   
   
$server="localhost";
$username="root";
$pwd="";
$database="project";

$con=new mysqli($server,$username,$pwd,$database);

/*if($con->connect_error){
	
	die("Connection failed: " . $con->connect_error);
}
else{
	
	
	echo "connect";
	
}*/

   
   $record=$_GET['id'];
   
   
   $sql="select * from customer where user_id=$record";
   
   $result=$con->query($sql);
   
   
   if($result->num_rows>0){
	   
	   while($row=$result->fetch_assoc()){
		   
	             $id= $row["user_id"] ;
	             $usename= $row["username"];
				 $pwd=$row["pwd"];
				 $email=$row["Email"];
		         $gender=$row["gender"];
	             $age= $row["age"];
				 $number=$row["con_number"];
			     $name=$row["name"];
	   
	   }
	   
	   
   }
   
  else{
	  
	  
	 echo"<script>alert('norecords')</script>";
	  
	  
  }


?>
		 <center>
		 
		 <div class="menu5">
		 
		 <form  onSubmit="return checkPassword()" method="POST" action="edit1.php">
		 
		 <label  >USER ID</label><br>
		 <input type="number" name="id" class="menu8"  value="<?php echo $id ?>" readonly><br><br>
		 
         <label for="fName" >Name</label><br>
		 <input type="text" name="fName" class="menu8"  value=<?php echo $name  ?> required><br><br>
		 
		 <label for="lName" >User Name</label><br>
		 <input type="text" name="Uname" class="menu8" value=<?php echo  $usename ?> required ><br><br>
		 
		 
		 <label >Password</label><br>
		 <input type="password"  id="pwd" class="menu8" name="pwd2" value=<?php echo  $pwd ?>  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required><br><br>
		 
		 
		 <label >Re-enter Password</label><br>
		 <input type="password"  id="pwd1" name="pwd3" class="menu8"  value=<?php echo  $pwd ?> pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required><br><br>
		 
		 
		 
		 <label>Gender</label><br>
		 <input type="radio" id="male" name="gender" >
		 <label >Male</label>
		 <input type="radio" id="female" name="gender" >
		 <label >Female</label><br><br>
		 
		 
		 <label >Mobile Number</label><br>
		 <input type="tel"  name="mnumber" class="menu8" maxlength="10" placeholder="0812387059" value=<?php echo  $number  ?>  pattern="[0-9]{10}" required><br><br>
		 
		 <label for="email">Email</label><br>
		 <input type="email" name="femail" class="menu8" value=<?php echo  $email  ?>  pattern="[a-z0-9._%+-]+@[a-z0-9._%+-]+\.[a-z]{2-3}" required><br><br>

		
		
		<label >Enter the age</label><br>
		
		<input type="number" name="fage" class="menu8"  value=<?php echo  $age  ?>>
		
		<br><br>
		
	 
		 <input type="checkbox" id="check" class="menu8"  value="accept" onclick="enableButton()" required >
		 
         <label for="check">Accept Privacy Policy And Terms</label><br><br>		 
		 
		 <input type="submit" id="subbtn" class="menu8"  value="submit" disabled>
		 
		  </form>
		 
		 </div>
		 </center>
		 
		 
		 
		 
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