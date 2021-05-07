<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
?>



<?php
$folder = "documents";
	       $results = scandir('documents');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		
	       		$img=$folder . '/' . $result;
	       		
	       	}
	       }

session_start();
  $username= $_SESSION['username'];
  $email= $_SESSION['email'];
   $name= $_SESSION['name'];

      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

    $query = "update membersinfo set cv='$result' where username='$username'";//insert in the same order as the database
    $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
      if($data)
      {
         header( "refresh:0;url=save1.php" );
      }

?>
 