<?php
  if (isset($_POST["submit"])){

    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $msg= $_POST["message"];
    

    require_once'config.inc.php';


    $sql = "INSERT INTO Feedback ('F_No''Email' , 'Subject' , 'message' ) values ('' , '$email','$subject','$msg');";
    $result = mysqli_query($conn,$sql);
    if(isset($_SESSION['success'])){
     echo "<script>alert(".$_SESSION['success'].")</script>";
     unset($_SESSION['success']);
   }
    if ($result){
      echo "<script>alert('Feedback Added!!');</script>";
      header("location:Feedback_Form.html?error=none");
    }
  }


?>
