<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
  session_start();
$x= $_SESSION['username'];//retrieving name from form
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

        
       
$sql0="delete  FROM membersinfo WHERE username = '$x'";
$query0 = mysqli_query($conn,$sql0);//creating a query with the established cvonnection and above resource

       
$sql1="delete  FROM personaldetails WHERE username = '$x'";
$query1 = mysqli_query($conn,$sql1);//creating a query with the established cvonnection and above resource

if($query1)
{
  

}

$query2 = "delete from achievement where username='$x'";//insert in the same order as the database
    $data = mysqli_query($conn,$query2)or die("Error: ".mysqli_error($conn));
      if($data)
      {
        

      }
  

$sql3="delete  FROM typeofapplication WHERE username = '$x'";
$query3 = mysqli_query($conn,$sql3);//creating a query with the established cvonnection and above resource

if($query3)
{
 
}

 $query4="delete from  workexperience4 where username='$x'";
         $data4 = mysqli_query($conn,$query4)or die("Error: ".mysqli_error($conn));
          if($data4)
      {
          
      }

$query5="delete from  workexperience5 where username='$x'";
         $data5 = mysqli_query($conn,$query5)or die("Error: ".mysqli_error($conn));
          if($data5)
      {
          

      }


    $query6 = "delete from conferences where username='$x'";//insert in the same order as the database
    $data6 = mysqli_query($conn,$query6)or die("Error: ".mysqli_error($conn));
      if($data6)
      {
       

      }
  
  $query7 = "delete from courses where username='$x'";//insert in the same order as the database
    $data7 = mysqli_query($conn,$query7)or die("Error: ".mysqli_error($conn));
      if($data7)
      {
        

      }
  
$query8="delete from  workexperience where username='$x'";
         $data8 = mysqli_query($conn,$query8)or die("Error: ".mysqli_error($conn));
          if($data8)
      {
          
      }

$query9="delete from  workexperience1 where username='$x'";
         $data9 = mysqli_query($conn,$query9)or die("Error: ".mysqli_error($conn));
          if($data9)
      {
          

      }

$query10 = "delete from seminars where username='$x'";//insert in the same order as the database
    $data10 = mysqli_query($conn,$query10)or die("Error: ".mysqli_error($conn));
      if($data10)
      {
       

      }
  
 $query11 = "delete from awards where username='$x'";//insert in the same order as the database
    $data11 = mysqli_query($conn,$query11)or die("Error: ".mysqli_error($conn));
      if($data11)
      {
        

      }
  $query12 = "delete from mothertongue where username='$x'";//insert in the same order as the database
    $data12 = mysqli_query($conn,$query12)or die("Error: ".mysqli_error($conn));
      if($data12)
      {
        

      }
  

 $query13="delete from  education1 where username='$x'";
         $data13 = mysqli_query($conn,$query13)or die("Error: ".mysqli_error($conn));
          if($data13)
      {
         

      }

 $query14="delete from  workexperience2 where username='$x'";
         $data14 = mysqli_query($conn,$query14)or die("Error: ".mysqli_error($conn));
          if($data14)
      {
        

      }


$query15="delete from  workexperience3 where username='$x'";
         $data15 = mysqli_query($conn,$query15)or die("Error: ".mysqli_error($conn));
          if($data15)
      {
          

      }

$query16 = "delete from publications where username='$x'";//insert in the same order as the database
    $data16 = mysqli_query($conn,$query16)or die("Error: ".mysqli_error($conn));
      if($data16)
      {
       

      }
  
$sql17="delete from testimage where username='$x'";
	$query17=mysqli_query($conn,$sql17);
	
	if($query17)
	{
		
	}	

$query18="delete from  education where username='$x'";
         $data18 = mysqli_query($conn,$query18)or die("Error: ".mysqli_error($conn));
          if($data18)
      {
          

      }

$query19 = "delete from jobskill where username='$x'";//insert in the same order as the database
    $data19 = mysqli_query($conn,$query19)or die("Error: ".mysqli_error($conn));
      if($data19)
      {
       

      }
  
$query20 = "delete from projects where username='$x'";//insert in the same order as the database
    $data20 = mysqli_query($conn,$query20)or die("Error: ".mysqli_error($conn));
      if($data20)
      {
       

      }
  
 $query21 = "delete from certifications where username='$x'";//insert in the same order as the database
    $data21 = mysqli_query($conn,$query21)or die("Error: ".mysqli_error($conn));
      if($data21)
      {
        

      }

$query22 = "delete from courses where username='$x'";//insert in the same order as the database
    $data22 = mysqli_query($conn,$query22)or die("Error: ".mysqli_error($conn));
      if($data22)
      {
        

      }
  
$query23 = "delete from awards where username='$x'";//insert in the same order as the database
    $data23 = mysqli_query($conn,$query23)or die("Error: ".mysqli_error($conn));
      if($data23)
      {
        

      }
      $query24="delete from  education2 where username='$x'";
         $data24 = mysqli_query($conn,$query24)or die("Error: ".mysqli_error($conn));
          if($data24)
      {
          

      }
      $folder = "documents";
         $results = scandir('documents');
         foreach ($results as $result) {
          if ($result === '.' or $result === '..') continue;
         
          if (is_file($folder . '/' . $result)) {
            
            if($result==$x.".pdf")
            {
              unlink($folder . '/' . $result);
              break;
            }
            
          }
}

      header( "refresh:0;url=signup1.php" );