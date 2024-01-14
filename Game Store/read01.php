<html>
<head>


<link rel="stylesheet" href="projectform.css">

</head>

<body>

<?php

session_start();

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



$use=$_POST["fname"];
$pas=$_POST["paw"];
$i=0;

$sql="select * from customer";

$result=$con->query($sql);

if($result->num_rows>0){
	
	
	while($row=$result->fetch_assoc()){
		
	if($use==$row["username"] && $pas==$row["pwd"]){
		
	$_session["username"]=$_POST["fname"];
		
	if(isset($_session["username"])){
		
	echo"<p style='color:white;'>HI"."  ".$_session["username"]."</p><br><br>";
		
	}	
		
		$use=$row["user_id"];
		
		echo"<table border='1' style='color:white;'><tr>
		<th>USERID</th>
		<th>USername</th>
		<th>password</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Contac-number</th>
		<th>Name</th>
		<th>EDIT THE PROFILE</th>
		<th>DELETE PROFILE</th></tr><tr>";
		
		
		
               echo"<td>".$row["user_id"]."</td>"; 
	           echo"<td>".$row["username"]."</td>";
				echo"<td>".$row["pwd"]."</td>";
				echo"<td>".$row["Email"]."</td>";
				echo"<td>".$row["gender"]."</td>";
				echo"<td>".$row["age"]."</td>";
				echo"<td>".$row["con_number"]."</td>";
				echo"<td>".$row["name"]."</td>";
				echo"<td><button type='submit'><a href='edit.php?id=$use'>EDIT</a></button></td>";
		        echo"<td><button type='submit'><a href='delete.php?id=$use'>DELETE</a></button></td>";
		
		
		
		echo"</tr></table>";
		
		
		
		
		
		
		
		break;
		
		
	}
		
	
	else{
		
		//echo"<script>alert('plese create account')</script>";
	    //require 'fromproject1.php';
		
		
	}
	
	
	
	}
		
}

else{
	
	
	echo"<script>alert('no recode avilable')</script>";
	  //require 'fromproject1.php';
	
	
}


?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<br><br><input type="submit" value="LOGOUT" name="subbtn"><br><br>


</form>


<?php

if(isset($_POST["subbtn"])){
	
	
	Session_destroy();
    header('location:login1.php');
		
	
	
}






?>




















</body>

</html>
