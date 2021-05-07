<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
$sql1="SELECT * FROM membersinfo"; //selecting all values from database table where username matches the entered username

$query1 = mysqli_query($conn,$sql1);//creating a query with the established cvonnection and above resource
echo"

<p align ='right' style='margin-top:7px;' class='w3-container'>
  <a href='logoutadmin.php' class='w3-button w3-white w3-border w3-border-red w3-round-large'  align='right' >Logout</a>
<h2 id='ex1'>Registered Users</h2></p>";
         echo "<div style='overflow-x:auto;''>";
        echo "<table id='ex1'>
	
	<tr>
	<td>Name of the user</td>
	<td>Email</td>	
	<td>Username</td>
	<td>CV</td>
	</tr>";
	
while($row = mysqli_fetch_array($query1))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          $cv="";
             $cvr="";
             $pdf="";
         $n=$row['name'];
          $e= $row['email'];
            $u= $row['username'];
             

$folder = "documents";
         $results = scandir('documents');
         $i=0;
         foreach ($results as $result) {

          if ($result === '.' or $result === '..') continue;
         	
          if (is_file($folder . '/' . $result)) {
          
            if($result==$u.".pdf")
            {  
              $cv=$result;
              $cvr=$folder . '/' . $result;
              $pdf="wis.png";
              break;
            }
            
            
          }
}
	
	
	echo "<tr>
	<td>$n</td>
	<td>$e</td>
	<td>$u</td>
	<td><img src=$pdf><a href=$cvr>$cv</a></td>
	</tr>";

}

echo"</table></div>";



?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></head>
	<style>
body{
	background:#383D43;
background-size:cover;	
}
table{
	 width: 100%;
}
table,tr{
border:1px solid rgba(255,255,255,0.5);
border-collapse:collapse;
margin:center;
font-family:Luna;
font-size:15px;	
color:white;
padding-left:5px;

}
th{
	height: 50px;
}
th, td {
    padding: 25px;
    text-align: left;
}
#ex1 {
    font-weight: 300;
font-size: 50px;
color: 	#C0C0C0;
letter-spacing: 4px;
margin-right: 20px;
text-align:center;
}
tr:hover {background-color: rgba(120, 40, 100, 0.5);}
tr:nth-child(even) {background-color:rgba(90, 40, 100, 0.5);}
a:link {
    text-decoration: none;
    color:white;
    
}
a:visited{
  text-decoration: none;
   color:white;
    
}
w3-btn {margin-bottom:10px;}
</style>

<
<body>



</body>
</html>             