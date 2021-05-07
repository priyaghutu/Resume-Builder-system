<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
  session_start();
$x= $_SESSION['username'];//retrieving name from form
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

 $query="delete from  workexperience5 where username='$x'";
         $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
          if($data)
      {
          header( "refresh:0;url=frame_b2.php" );

      }



?>