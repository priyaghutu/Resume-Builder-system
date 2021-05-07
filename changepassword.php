<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
 margin-top:130px;
  background-color: transparent;
  width: 800px;
  height: 500px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
   border-radius: 30px;
   background-color:#d5f4e6;
     margin-left:350px;	
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
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
 background:#b2ad7f;
  color: black;
   border-radius: 30px;
    
   
}

.flip-box-back {
  border-radius: 30px;
 background-color:rgba(0,0,0,0.2);
  color:black;
  transform: rotateX(180deg);
}
.center {

		width:55%; margin-top:70px;
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
input[type=search],input[type=password]  {
  
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

 .
input[type="search"] {
  border: 4px solid rgba(196,81,0,0.44);
   
}

input[type="search"]:focus {
  border: 2px solid blue;
}
#para{
  display:none;
}

</style>
</head>
<body style="background:#878f99">
<div class="flip-box">
	
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Change  Password</h2>


    </div>
    <div class="flip-box-back">
    <div class="center">
      <form method="POST" enctype="multipart/form-data" action="password.php" onsubmit=" return check()" id="contactform">
    
    <label for="op">Old Password</label>
     <input type="password" name="op"  placeholder="old password" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off id="o">
    <br>
    <label for="np">New Password</label>
     <input type="password" name="np"  placeholder="new password" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off id="n">
    <br>
     <label for="cp">Confirm Password</label>
     <input type="password" name="cp"  placeholder="confirm password"onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off id="c">
    <br>
		<input type="submit" name="submit" value="submit" >
    <input type="cancel" value="cancel" name="cancel" onclick ="window.location.href='frame_b2.php'" target="MainWindow" nselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
	</form>
 
<script type="text/javascript">
    
    // Total seconds to wait
    
    
    function check() {
        
       
         var myvar2=document.forms["contactform"]["o"].value;
         var myvar3=document.forms["contactform"]["n"].value;
         var myvar4=document.forms["contactform"]["c"].value;
         if(myvar2==""||myvar3==""||myvar4=="")
            {
              alert('confirm password doesnt match');
             return false;
            }
          else
          {
            return true;
          }  
    }
</script>
    </div>
    </div>
  </div>
</div>


</body>
</html>

