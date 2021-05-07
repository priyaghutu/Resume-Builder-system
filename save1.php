<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.center {
 margin-top:200px;	
	width:55%;
	text-align:center;
    border-radius: 30px;
 background:rgba(0,0,0,0.3);
    padding: 80px;
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
.btn {
    background-color:#b2ad7f;
    border: none;
    color: white;
    padding: 20px 70px;
    cursor: pointer;
    font-size: 20px;
     border-radius: 8px;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
}
#gh{
	display:none;
}
</style>
</head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function myFun() {

$("#gh").slideDown(1000);
}
        
  </script>
<body style="background:#878f99;" onload="myFun()"><div class="center" id="gh">
	
		<img src='ip.png'><h2>Download As Pdf</h2>
		<br>
		<a href="t3.php" ><button class="btn"><i class="fa fa-download" ></i> Download</button></a>
	
</div>

</body>
</html>
