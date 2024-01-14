<html>
<head>
<head>

<body>

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

$id=$_POST['id'];
$use=$_POST["Uname"];
$pw=$_POST["pwd2"];

$i=0;
       
    $value="select user_id,username,pwd from customer";
    $result=$con->query($value);



   if($result->num_rows>0)
            {
                
        while($row=$result->fetch_assoc())
                {
             if(($id==$row["user_id"] AND $use==$row["username"])or ($id==$row["user_id"] AND $pw==$row["pwd"]) or($id==$row["user_id"] AND $use==$row["username"] AND $pw==$row["pwd"])){
                    
					
	
						
						
						break;
						
					}
                    
					else if($id!=$row["user_id"] AND $use!=$row["username"] AND $pw!=$row["pwd"]){
						
						
						continue;
						
						
						
					}
                    
                   else{


                         $i++;
						 
						 
				   }					   
                    
                }
                                    
                        
                }
                
            
  else
        {
				
				
            echo "<script>alert('No records')</script>";
			
				
				
        }
			

if($i<1){
		        
				$id=$_POST['id'];
				$name=$_POST["fName"];
				$use=$_POST["Uname"];
				$pw=$_POST["pwd2"];
				$gender=$_POST["gender"];
				$email=$_POST["femail"];
				$age=$_POST["fage"];
				$phone=$_POST["mnumber"];
			    
	
	   $sql="update customer 
	       set user_id =$id,username='$use', pwd='$pw',	Email='$email',	gender='$gender',age=$age,con_number='$phone',name='$name'
		   where user_id =$id  ";
	
	if($con->query($sql)){
		
		        header('location:login1.php');
				
				
				
	          }
	
	        else{
	

                 echo "<script>alert('error update')</script>"	;
		
	             }
	
}

else{
	
	
	echo"<script>alert('password or user name alredy extit')</script>";
	header('location:edit.php');
	
	

}




?>

</body>
</html>
