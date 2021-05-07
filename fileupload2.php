<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
 margin-top:200px;
  background-color: transparent;
  width: 800px;
  height: 400px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
   border-radius: 30px;
   background-color:rgba(0,0,0,0.3);
     margin-left:200px;	
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
   border-radius: 30px;
    background-color: #bbb;
   
}

.flip-box-back {
  border-radius: 30px;
  background-color:rgba(0,0,0,0.1);
  color: white;
  transform: rotateY(180deg);
}
.center {

		width:55%; margin-top:200px;
	text-align:center;
   
    margin-left:200px;	
}
input[type=file], select {
	
    width: 50%;
    
   
    
    display: inline-block;
    
    border-radius: 4px;
    ;
    cursor:pointer;
<button class="close" style="">X</button>
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
    background-color: grey;
}
</style>
</head>
<body style="background-color:rgba(0,0,255,0.2)">
<div class="flip-box">
	
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Upload Your Photo</h2>

    </div>
    <div class="flip-box-back">
    <div class="center">
      <form method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
    </div>
    </div>
  </div>
</div>
<?php
	define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
session_start();
if(isset($_POST['submit'])){
	if(getimagesize($_FILES["image"]["tmp_name"])==FALSE)
	{	echo"failed";
		
	}
	else{

		$filepath = "image1/" . $_FILES["image"]["name"];
 		$filename=$_FILES["image"]["tmp_name"];
		
		$name=(addslashes($_FILES["image"]["name"]));
			$image=base64_encode(file_get_contents(addslashes($_FILES["image"]["tmp_name"])));
			move_uploaded_file($filename, $filepath);
			saveimage($name,$image);
			
	}
}
	

function saveimage($name,$image){

	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
	
	$x=$_SESSION['username'];
$sql="insert into testimage(username,name,image) values('$x','$name','$image')";
$query=mysqli_query($conn,$sql);
if($query)
{
	echo "sucess";

}
else{
	echo"not uploaded";
}




}


display();
function display()
{
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
	
	$x=$_SESSION['username'];
	$sql="select * from testimage where username='$x'";
	$query=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($query);
	for($i=0;$i<$num;$i++)
	{
		$result=mysqli_fetch_array($query);
		$img=$result['image'];
		$n=$result['name'];
		echo'<img src="data:image;base64,'.$img.'">';
		
		echo'<a href="deleteimage.php">Cancel</a>';
		echo'<a href="frame_b2.php">Save</a>';
	}


}















?>

</body>
</html>

