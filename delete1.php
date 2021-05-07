<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
  session_start();
$x= $_SESSION['username'];//retrieving name from form
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

$sql1="delete  FROM typeofapplication WHERE username = '$x'";
$query1 = mysqli_query($conn,$sql1);//creating a query with the established cvonnection and above resource

if($query1)
{
  header( 'Location:frame_b2.php');
}



?>

