<?php

$server="localhost";
$username="root";
$pwd="";
$database="project";

$con=new mysqli($server,$username,$pwd,$database);


$top_games = $con->query("SELECT * from game_store order by count desc limit 6");

echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '	<meta http-equiv="X-UA-Compatible" content="ie-edge">';

echo '<title>KIDSHERO</title>';

echo '	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

	//CSS
echo '	<link rel="stylesheet" type="text/css" href="style/style.css">';
	echo '<link rel="stylesheet" type="text/css" href="style/my_p_style.css">';



echo '</head>';
echo '<body>';
echo '<table class="tab1" border="2" width="100%">';

echo '<tr>';
echo '<th>';
echo '<img class="Logo" src="image/logo.jpg"width="50px"height="50px" align="left">';

echo '<p>KIDHERO</p>';
echo '<a class="set1" href="homePage.php">Home</a>';
echo '<a class="set2" href="games.php">Game Upload</a>';
echo '<a class="set3" href="news.html">News</a>';
echo '<a class="set4" href="rewards.html">Rewards</a>';
echo '<a class="set5" href="login1.phph">Profile</a>';
echo '<a class="set6" href="fromproject1.php"><img src="image/user.jpg"width="25px"height="25px"></a>';
echo '<a class="set7" href="cart.php"><img src="image/cart1.jpg"width="25px"height="25px"></a>';

echo '</th>';
echo '</tr>';
echo '</table>';

echo '<div class="box1">';
echo '<p class="title">POPULAR GAMES</p>';
echo '</div>';



echo '<div class="games">';
echo '<div class="box-container">';


while($row=$top_games->fetch_assoc()){
        

		echo '<div class="box">';

         echo '<div class="funny">';

            echo '<img src="image/pic11.jpg" alt="">';

           echo '<div>';
               echo "<h3>".$row['game_name']."</h3>";
           echo '</div>';

         echo '</div>';

         echo "<img src='img/$row[image]'class=thumb'>";

         echo "<h5 style='color:white'>'.$row[description].'</h5>";

        echo '<button><a href="#" class="inline-btn" style="text-decoration: none; color: black;font-weight: bold;">Add to Cart</a></button>';

      echo '</div>';

      }

      echo '</div>';

      echo '</div>';
echo ' <br>';



//FOOTER

echo '<footer>';
echo '<div class="footer-top">';
echo '<div class="footer-top-body footer-flex">';
echo '<div class="contact-body footer-body-div">';
echo '<h3>Contant Us</h3>';
echo '<p>+94 705523653</p>';
echo '</div>';
echo '<div class="email-body footer-body-div">';
echo '<h3>Email</h3>';
echo '<p>learning@gmail.com</p>';
echo '</div>';
echo '<div class="follow-us-body footer-body-div">';
echo '<h3>Follow Us</h3>';
echo '<div class="footer-social-media">';
echo '<a href="#facebook" class="fa fa-facebook-official"></a>';
echo '<a href="#twitter" class="fa fa-twitter-square"></a>';
echo '<a href="#instagram" class="fa fa-instagram"></a>';
echo '<a href="#google-plus" class="fa fa-google-plus-square"></a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="footer-bottom">';
echo '<div class="footer-bottom-body footer-flex">';
echo '<div class="privacy-policy footer-body-div"><a href="policy1.php">Privacy Policy</a></div>';
echo '<div class="help footer-body-div"><a href="help.php">Help</a></div>';
echo '<div class="about footer-body-div"><a href="about.php">About</a></div>';
echo '</div>';
echo '</div>';
echo '</footer>';


echo '</body>';
echo '</html>';

$con->close();



?>