




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images2/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
<!--===============================================================================================-->
</head>
<style>
.loginbox{
	
	background-image:url('fab.jpg');
    background-size:relative;
	margin-left:100px;
	color:white;
	box-sizing: border-box;
	border-radius:20px;
	padding: 20px;
	padding-left: 30px;
	
	
}
</style>
<script>
// Do not remove this (it's just a comment and won't effect the functions)
// SimpleCaptcha v1.0 © Anudeep Tubati under MIT License
function ChangeCaptcha() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 6;
	var ChangeCaptcha = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		ChangeCaptcha += chars.substring(rnum,rnum+1);
	}
	document.getElementById('randomfield').value = ChangeCaptcha;
}
function check() {
	var myvar3=document.forms["contactform"]["randomfield"].value;
	var myvar4=document.forms["contactform"]["CaptchaEnter"].value;
if(myvar4 == myvar3  ) {
	return true;
 // Change the page to which the re-direction is to be done.
}
else {
alert('Please re-check the captcha');
window.location='contact1.php';
return false;
}
}
</script>
<body onload="ChangeCaptcha()">


	<div class="container-contact100">
		

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" method="POST" action="contactus.php" onsubmit="return check()" id="contactform">

				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..." onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off></textarea>
					<span class="focus-input100"></span>
						
					</div>
							
					<div class="wrap-input100 validate-input" data-validate = "enter captcha"><br>
						<span class="label-input100" >Captcha</span>
					<input type="text" id="randomfield" disabled style="width:175px; height:25px;" class="loginbox">	 
					<br>

					<input class="input100" type="text"  name="captcha" size="3″ maxlength="3″ placeholder="Enter your captcha" id="CaptchaEnter" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>	
    				<span class="focus-input100"></span>
    			</div>
					
				
	
  				

				<div class="container-contact100-form-btn">
					
						<span>
							
							<input class="contact100-form-btn" type="submit" name="submit">
						</span>
					</button>
				</div>
			</form>

			<span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+001 345 6889</span>
			</span>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js2/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
