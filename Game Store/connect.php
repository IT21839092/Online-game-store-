<?php 
    // $connection = mysqli_connect('dbserver','dbuser','dbpassword','dbname');
    $connection = mysqli_connect('localhost','root','','project');

    //checking dbconnection
    if(mysqli_connect_errno()){
        die('DB connect failed '.mysqli_connect_error());
    } else {
        //echo "Connection successfull.";
    }

?>