<?php require_once('connect.php'); ?>
<?php 

    if(isset($_POST['collect'])){
        $rewardID = $_POST['rewardID'];
        if(isset($_POST['rewards'])){
            $rewardName = $_POST['rewards'];
        }else{
            $rewardName = "";
        }

        if($rewardID=="" or $rewardName==""){
            //echo "Please enter correct details";
        }else{
            $query = "INSERT INTO reward (rewardID, rewardName) VALUES('{$rewardID}', '{$rewardName}')";

            $result = mysqli_query($connection, $query);
    
            if ($result){
                //echo "added";
            }else{
                echo "failed";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rewards</title>
        <link rel="stylesheet" href="css/index.css">     
    </head>
    <body>
        <header>
            <?php include('navbar.html') ?>
        </header>
        <main>
            <?php include('rewardsbody.html') ?>
        </main>
        <footer>
            <?php include('footer.html') ?>
        </footer>
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>
<?php mysqli_close($connection); ?>