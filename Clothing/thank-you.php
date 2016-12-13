<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="timemac";
$conn = mysqli_connect($servername, $username, $password,$dbname);



$country = @htmlspecialchars($_POST['country']);
$email = @htmlspecialchars($_POST['email']);
if(isset($_POST['country']))
{
date_default_timezone_set("Asia/Calcutta");
$time=date("h:i:sa");

//echo $_POST['country'];

$sql = "INSERT INTO `timemac`.`emails` (`name`, `email`, `time`) VALUES ('$country', '$email', '$time')" ;
if (mysqli_query($conn, $sql)) 
{
echo "<div class='alert alert-success' style='text-align:center;'>
<strong>Success! </strong>Get Ready for next revolution in clothing</div>";



} 
else
{
echo "<div class='alert alert-warning'><strong>Unsuccessful!</strong> Try again or message us at our facebook page<a href='https://www.facebook.com/triginals' target='_blank'>TimeMac Originals</a></div>";

}

}



?>



<html>
<link href="css/bootstrap.css" rel="stylesheet">
<body>
<div class="container">
    <a href="index.php">
    <button class="btn btn-success text-center center-block">BACK</button>
    </a>
    <div class="well">
         <img class="img-responsive" style=" display: block;
        margin: 0 auto;"src="image/thank-you.jpg" alt="Thank you"> 
    </div>
    <a href="index.php">
    <button class="btn btn-success text-center center-block">BACK</button>
    </a>
</div>
</body>
</html>
