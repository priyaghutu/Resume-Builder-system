
<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
?>
<?php
session_start();
$x= $_SESSION['username'];//retrieving name from form
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
$sql1="SELECT * FROM membersinfo WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query1 = mysqli_query($conn,$sql1);//creating a query with the established cvonnection and above resource

if($row = mysqli_fetch_array($query1))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
           $e= $row['name'];
           $m = $row['email'];
            $n = $row['username'];

         
}
?>

<?php
if(isset($_POST['submit'])){
  //$x=$_POST['username'];
  $e=$_POST['name'];
  $m=$_POST['email'];
 $n=$_POST['username'];
 if(empty($e)&&empty($m)&&empty($n))
 {
    echo "<script type='text/javascript'>alert('empty feilds');
        
        </script>";
 }
  
   
  
 
      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection


$olduser=$x;

    $query = "update membersinfo set name='$e',email='$m' ,username='$n' where username='$x'";//insert in the same order as the database
    $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));

      $query1 = "update achievement set username='$n' where username='$x'"; 
       $data1 = mysqli_query($conn,$query1)or die("Error: ".mysqli_error($conn));

       $query2 = "update awards set username='$n' where username='$x'"; 
       $data2 = mysqli_query($conn,$query2)or die("Error: ".mysqli_error($conn));

        $query3 = "update certifications set username='$n' where username='$x'"; 
       $data3 = mysqli_query($conn,$query3)or die("Error: ".mysqli_error($conn));

        $query4 = "update courses set username='$n' where username='$x'"; 
       $data4 = mysqli_query($conn,$query4)or die("Error: ".mysqli_error($conn));

        $query5 = "update education set username='$n' where username='$x'"; 
       $data5= mysqli_query($conn,$query5)or die("Error: ".mysqli_error($conn));

        $query6 = "update education1 set username='$n' where username='$x'"; 
       $data6 = mysqli_query($conn,$query6)or die("Error: ".mysqli_error($conn));

        $query7 = "update education2 set username='$n' where username='$x'"; 
       $data7= mysqli_query($conn,$query7)or die("Error: ".mysqli_error($conn));

        $query8 = "update jobskill set username='$n' where username='$x'"; 
       $data8= mysqli_query($conn,$query8)or die("Error: ".mysqli_error($conn));

        $query9= "update mothertongue set username='$n' where username='$x'"; 
       $data9 = mysqli_query($conn,$query9)or die("Error: ".mysqli_error($conn));

        $query10 = "update personaldetails set username='$n' where username='$x'"; 
       $data10= mysqli_query($conn,$query10)or die("Error: ".mysqli_error($conn));

        $query11 = "update projects set username='$n' where username='$x'"; 
       $data11= mysqli_query($conn,$query11)or die("Error: ".mysqli_error($conn));

        $query12 = "update publications set username='$n' where username='$x'"; 
       $data12 = mysqli_query($conn,$query12)or die("Error: ".mysqli_error($conn));

        $query13 = "update seminars set username='$n' where username='$x'"; 
       $data13= mysqli_query($conn,$query13)or die("Error: ".mysqli_error($conn));

        $query14 = "update testimage set username='$n' where username='$x'"; 
       $data14 = mysqli_query($conn,$query14)or die("Error: ".mysqli_error($conn));

        $query15 = "update typeofapplication set username='$n' where username='$x'"; 
       $data15 = mysqli_query($conn,$query15)or die("Error: ".mysqli_error($conn));

        $query16 = "update workexperience set username='$n' where username='$x'"; 
       $data16= mysqli_query($conn,$query16)or die("Error: ".mysqli_error($conn));

        $query17 = "update workexperience1 set username='$n' where username='$x'"; 
       $data17 = mysqli_query($conn,$query17)or die("Error: ".mysqli_error($conn));

       $query18 = "update workexperience2 set username='$n' where username='$x'"; 
       $data18 = mysqli_query($conn,$query18)or die("Error: ".mysqli_error($conn));

       $query19 = "update workexperience3 set username='$n' where username='$x'"; 
       $data19 = mysqli_query($conn,$query19)or die("Error: ".mysqli_error($conn));

       $query20 = "update workexperience4 set username='$n' where username='$x'"; 
       $data20 = mysqli_query($conn,$query20)or die("Error: ".mysqli_error($conn));

       $query21 = "update workexperience5 set username='$n' where username='$x'"; 
       $data21 = mysqli_query($conn,$query21)or die("Error: ".mysqli_error($conn));

       $query22 = "update conferences set username='$n' where username='$x'"; 
       $data22 = mysqli_query($conn,$query22)or die("Error: ".mysqli_error($conn));

        $_SESSION['username']=$n;


        $folder = "documents";
         $results = scandir('documents');
         $i=0;
         foreach ($results as $result) {

          if ($result === '.' or $result === '..') continue;
          
          if (is_file($folder . '/' . $result)) {
          
            if($result==$olduser.".pdf")
            {  
              unlink($folder . '/' . $result);
               echo "<script type='text/javascript'>
                window.location='t4.php';
                  </script>";

            }
            
              
            
          }
           header( "refresh:0;url=frame_b2.php" );
}

       
   
header( "refresh:0;url=frame_b2.php" );



}



 

?>




















<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/style2.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
</head>
<style>
input[type=cancel] {
    width: 70px;
    background-color: #008CBA;
    color: white;
   padding:5px;
 
    border: none;
    
    cursor: pointer;
}

input[type=cancel]:hover {
    background-color: #f44336;
}
#gh,#gh1{
  display:none;
}
</style>
<body onload="myFun()">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function myFun() {


$("#gh1").slideDown(1000);
$("#gh").slideDown(1000);
}
        
  </script>

<div class="container">
			
            <div class="freshdesignweb-top">
               
                <span class="right">
                    
                </span>
                <div class="clr"></div>
            </div>
			<header>
				<h1 id="gh1">Edit Your Profile</h1>
            </header>       
      <div  class="form" id="gh">
    		<form id="contactform" action="" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off value="<?php if(!empty($e)) echo $e; else ;?>" > 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off value="<?php if(!empty($m))echo $m;?>"  > 
                
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off value="<?php if(!empty($n))echo $n;?>" > 
    			 
                
  
          
          <pre>  <input class="buttom" name="submit" id="submit" tabindex="5" value="Save" type="submit"> 	<input type="cancel" onclick ="window.location.href='frame_b2.php'" target="MainWindow" value="Cancel" nselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off ></pre>
   </form> 

</div>      
</div>

</body>
</html>
