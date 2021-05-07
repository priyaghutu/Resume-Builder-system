<?php
	define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
session_start();


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
	
	$x=$_SESSION['username'];
	$sql1="select name from testimage where username='$x'";
	$query1=mysqli_query($conn,$sql1);
	$row = mysqli_fetch_array($query1);


	$imgname=$row['name'];
	$sql="delete from testimage where username='$x'";
	$query=mysqli_query($conn,$sql);
	
	if($query)
	{
		
		 
	}
	 $folder = "image1";
         $results = scandir('image1');
         foreach ($results as $result) {
          if ($result === '.' or $result === '..') continue;
         
          if (is_file($folder . '/' . $result)) {
            
            if($result==$imgname)
            {
              unlink($folder . '/' . $result);
              header( "refresh:0;url=frame_b2.php" );

            }
            
          }
          
}

     

?>