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

$use=$_POST["Uname"];
$pw=($_POST["pwd2"]);
$i=1;
       
    $value="select username,pwd from customer";
    $result=$con->query($value);



   if($result->num_rows>0)
            {
                
                while($row=$result->fetch_assoc())
                {
                if($use!=$row["username"]){
                    
					
					if($pw!=$row["pwd"]){
						
						
						continue;
						
					}
                    
					else{
						
						
						$i=0;
						
						break;
						
						
					}
                    
                    
                    
                }
                 else{
                           
                           
                           $i=0;
						   
                            break;




                 }                    
                        
                }
                
            }
  else
        {
				
				
            echo "<script>alert('No records')</script>";
			
				
				
        }
			
			
			
			
if($i!=0){
				
				$name=$_POST["fName"];
				$gender=$_POST["gender"];
				$email=$_POST["femail"];
				$age=$_POST["fage"];
				$phone=$_POST["mnumber"];
			    
   
   

  
       
             $sql ="INSERT INTO customer(user_id, username, pwd, Email, gender, age, con_number,name) VALUES('','$use','$pw','$email', '$gender', $age, '$phone','$name')" ;

            
            if($con->query($sql)){
                   
				   
				   echo "<script>alert('Inserted successfully')</script>";
                   header('location:login1.php');   
						
						}
             
			 else{
				  
                 
				 
				 echo "Error:". $con->error;
				 
                
				
				}
				
				
			}
				
				
else{
				
				
				echo "<script>alert('Inserted not succsesful')</script>";
				header('location:fromproject1.php');
				
				
				
			}
         
         $con->close();
       
       
?>