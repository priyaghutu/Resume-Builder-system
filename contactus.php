<html>
<head>
<body>

</body></head></html>
<?php  
$email="debapriyamukherjee54@gmail.com";
if(isset($_POST['submit'])){
session_start();
    $to       = $email;
$subject  = 'Users Query';
$message  = 'From user   :  '. $_SESSION['username']."\n".'Query  :  '.$_POST['message']."\n".' Users mail id : '.$_POST['email'];
$headers  = 'From: [debapriyamukherjee54]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    
  {
  		echo"<h3>Thanks For Contacting With Us We Will Soon Get Back With The Solution For Your Problem</h3>";
  		header( "refresh:3;url=page1.php" );echo "redirecting....in 2 sec";
  	}
}

?>

 
