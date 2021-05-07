<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 

if(isset($_POST['submit'])){
  //$x=$_POST['username'];
  $e=$_POST['typeofapp'];
  $m=$_POST['description'];
 if(empty($e))
{
     
$blank1= "Empty";

}
else
  $blank1= "";

 if(empty($m))
{
     
$blank2= "Empty";

}
else
  $blank2= "";
 
  if(!empty($e)&&!empty($m))// checking if the entered name is empty or not
  
  { 
  session_start();
  $username= $_SESSION['username'];
      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

    $query = "insert into typeofapplication values('$username','$e','$m')";//insert in the same order as the database
    $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
      if($data)
      {
        header( "refresh:0;url=frame_b2.php" );

      }
  }

}


?>


















<html>
<head>
  <script>
var myVar;

function myFun() {
     
       myVar1 = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("myDiv").style.display = "block";
   document.getElementById("myDiv1").style.display = "block";

}


  
   
        


         

        



</script></head>
<style>
.error {color: #FF0000;}
input[type=search], select {
	
    width: 80%;
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    
    border-radius: 4px;
    box-sizing: border-box;
    cursor:pointer;

}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


input[type=cancel] {
    width: 25%;
    background-color: #008CBA;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=cancel]:hover {
    background-color: #f44336;
}

 .center {
 margin:auto;	
	width:55%;
	text-align:center;
    border-radius: 30px;
   background-color:rgba(0,0,0,0.2);
    padding: 80px;
}
input[type="search"] {
  border: 4px solid rgba(196,81,0,0.44);
   
}

input[type="search"]:focus {
  border: 2px solid blue;
}









::-webkit-scrollbar {
    width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: darkblue; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #b30000; 
}
#myDiv{
  display: none;
 
}
#myDiv1{
  display: none;
 
}

.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}






</style>
<body style="background:url(c.jpg);" onload="myFun()">

<h1 align="center" id="myDiv" class="animate-bottom">TYPE OF APPLICATION</h1>



<div class="center" id="myDiv1" class="animate-bottom">
  <form action="prj1.php" method="post">
    <label for="toa">Type Of Application</label>
    <br>
     <input type="search" name="typeofapp" list="exampleList2" placeholder="select from list or enter text" value="<?php if(!empty($e))echo $e; else ;?>">
        <datalist id="exampleList2">
      <option value="" disabled selected>Select your option</option>

      <option value="Prefered Job">Prefered Job
</option>
      <option value="Job Applied For" >Job Applied For
</option>
      <option value="Position" >Position
</option>
<option value="Studies Applied For">Studies Applied For
</option>
<option value="Personal Statement">Personal Statement
</option>

    </datalist><span class="error">*<br><?php if(!empty($blank1)) echo $blank1; else ;?></span>
<br>
<br>
<br>



   

    <label for="description">Description</label>
<br>
       <input type="search" name="description" list="exampleList" placeholder="select from list or enter text"  value="<?php if(!empty($m))echo $m; else ;?>"> </pre>
        <datalist id="exampleList">
      <option value="" disabled selected>Select your option</option>
      <option value="Abrasive wheel former">Abrasive wheel former</option>
      <option value="Accountant">Accountant</option>
	<option value="Accounting and bookkeeping clerk">Accounting and bookkeeping clerk</option>
	<option value="Acrobat">Acrobat</option>
	<option value="Actor">Actor</option>
	<option value="Administration department manager">Administration department manager</option>
	<option value="Anthropologist">Anthropologist</option>
	<option value="Barber">Barber</option>
	<option value="Bartender">Bartender</option>
      <option value="Butcher">Butcher</option>
    </datalist><span class="error">* <br><?php if(!empty($blank2)) echo $blank2; else ;?></span>
<br>
<br>
<br>
<br>
    <input type="submit" value="Submit" name="submit" target="p1">
<input type="cancel" value="cancel" name="cancel" onclick ="window.location.href='frame_b2.php'" target="MainWindow">


  </form>
</div>

</body>
</html>
