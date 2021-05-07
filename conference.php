<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 

if(isset($_POST['submit'])){
  //$x=$_POST['username'];
  $e=$_POST['conference'];

  if(empty($e))// checking if the entered name is empty or not
  { 
    echo "<script type='text/javascript'>alert('* All feilds are necessary to fill *');
            window.location='frame_b2.php';
            </script>";
  }
 
  else 
  { 
  session_start();
  $username= $_SESSION['username'];
      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

    $query = "insert into conferences values('$username','$e')";//insert in the same order as the database
    $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
      if($data)
      {
        header( "refresh:0;url=frame_b2.php" );

      }
  }

}


?>