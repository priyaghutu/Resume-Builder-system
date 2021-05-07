<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 

//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
//$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
function newuser()
{

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
$name = $_POST['name'];//
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$name=ucfirst($name);
$query = "insert into membersinfo values('$name','$email','$username','$password')";//insert in the same order as the database
$data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
if($data)
{
echo "YOUR REGISTRATION IS COMPLETED...";//echo
$to       = $email;
$subject  = 'sucessfull registration';
$message  = 'Thank u for registering with us';
$headers  = 'From: [debapriyamukherjee54]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "";
else
    echo "";
header( "refresh:1;url=demo.php" );
}
}

function SignUp()
{
$x=$_POST['username'];//retrieving name from form
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
if(!empty($x))// checking if the entered name is empty or not
{

$sql="SELECT * FROM membersinfo WHERE username = '$x'"; //selecting all values from database table where username matches the entered username
$query = mysqli_query($conn,$sql);//creating a query with the established cvonnection and above resource
if(!$row = mysqli_fetch_array($query))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
newuser();//if the assiociative array is empty redirect to newuser() function
}
else
{
echo "SORRY...YOU ARE ALREADY REGISTERED USER...";//if the associative array exists print that the user is already registered 
}
}
}

if(isset($_POST['submit'])){
	$x=$_POST['username'];
	$e=$_POST['name'];
	$n=$_POST['email'];
	if(empty($x)||empty($e)||empty($n))// checking if the entered name is empty or not
	{	
		echo "<b>"."<font color=red>"." * ALL FIELDS ARE NECESSARY TO FILL  *"."</FONT>";
		header( "refresh:3;url=signup1.php" );
	}
	
	else if($_POST['password']!=$_POST['confirmpassword'])
	{	echo "<script type='text/javascript'>alert('confirm password doesnt match');
		window.location='signup1.php';
		</script>";
		//header('location:Registrationpage1.php');//if passwords do not match redirect to login page
	}
	else
		SignUp();
}
//
?>