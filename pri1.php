<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 

if(isset($_POST['submit'])){

  //$x=$_POST['username'];
  $e1=$_POST['DD11'];
  $f1=$_POST['MM11'];
  $g1=$_POST['YYYY11'];
  
  
    $l1=$_POST['qualification'];
     $m1=$_POST['organisation'];
      $n1=$_POST['City'];
       $o1=$_POST['Country'];
        $p1=$_POST['streetaddress'];
         $q1=$_POST['postalcode'];
         $w=$_POST['website'];
        
      
       

 $arr = array($g1,$f1,$e1);
$arr= implode("-",$arr);
$arr=date($arr);
 if(!empty($_POST['ch4']))
 {
   $ch4= $_POST['ch4'];
   
 }
     
    if(!empty($_POST['chk11']))
    {
      $chk11 =$_POST['chk11'];
      $arr1="";
      $h1="";
      $i="";
      $j="";
       
    }
    else
    { 
          $h1=$_POST['DD22'];
    $i1=$_POST['MM22'];
    $j1=$_POST['YYYY22'];
    if(empty($h1)||empty($i1)||empty($j1))
  {
  $error1= " Wrong date format";

  }
    $arr1 = array($j1,$i1,$h1);
    $arr1= implode("-",$arr1);
    $arr1=date($arr1);
    }
 
 if(empty($l1))
{
     
$blank1= "Empty";

}
else
  $blank1= "";

 if(empty($m1))
{
     
$blank2= "Empty";

}
else
  $blank2= "";
 if(empty($n1))
{
     
$blank3= "Empty";

}
else
  $blank3= "";
 if(empty($o1))
{
     
$blank4= "Empty";

}
else
  $blank4= "";

     


if(empty($e1)||empty($f1)||empty($g1))
{
  $error= " Wrong date format";

}
    
  

  if(!empty($e1)&&!empty($f1)&&!empty($g1)&&!empty($l1)&&!empty($m1)&&!empty($n1)&&!empty($o1))

  {
 if((!empty($h1)&&!empty($i1)&&!empty($j1))||!empty($chk11))
  {  

  session_start();
  $x= $_SESSION['username'];
      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection

    $query = "insert into education values('$arr','$arr1','$chk11','$l1','$m1','$n1','$o1','$ch4','$p1','$q1','$e1','$f1','$g1','$h1','$i1','$j1','$x','$w')";//insert in the same order as the database
    $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
      if($data)
      {
        header("Location:frame_b2.php" );

      }
  }
}

}


?>

















<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    
        $("#mydiv").fadeIn(2300);
         $("#mydiv1").slideDown(1000);
   
});
</script>
  
</head>
<style>
input[type=search], select {
	
    width: 50%;
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
	width:50%;
	text-align:left;
font-family:'Open Sans',sans-serif !important;  
    font-weight: 1px;
    border-radius: 30px;
    background-color: rgba(0,0,128,0.2);
    padding: 100px;
}
.center1{ 
  margin:auto;
  width:50%;
  text-align:center;
font-family:'Open Sans',sans-serif !important;  
    font-weight: 1px;
    border-radius: 30px;
    
    padding: 100px;
}
input[type="checkbox"]:checked + label::after {
   content: '';
   position: absolute;
   width: 2.4ex;
   height: 0.9ex;
   background: rgba(0, 0, 0, 0);
   top: 0.5ex;
   left: 0.9ex;
   border: 3px solid blue;
   border-top: none;
   border-right: none;
   -webkit-transform: rotate(-50deg);
   -moz-transform: rotate(-50deg);
   -o-transform: rotate(-50deg);
   -ms-transform: rotate(-50deg);
   transform: rotate(-50deg);
   
   margin-right: 0.5em;line-height: 2.1ex;
}

input[type="checkbox"] {

}

input[type="checkbox"] {
    position: absolute;
    left: -999em;
}

input[type="checkbox"] + label {
    position: relative;
    overflow: hidden;
    cursor: pointer;
   
       
}

input[type="checkbox"] + label::before {
   content: "";
   display: inline-block;
   vertical-align: -25%;
   height: 2ex;
   width: 2ex;
   background-color: white;
   border: 1px solid rgb(166, 166, 166);
   border-radius: 4px;
   box-shadow: inset 0 2px 5px rgba(0,0,0,0.25);
   margin-right: 0.5em;line-height: 2.1ex;
   border: 1px solid #c45100;
       height: 9px;
      width: 9px;
  zoom:2.7;

   
}
select{
  border: 4px solid rgba(196,81,0,0.44);
}
select:focus{
  border: 2px solid blue;
}
input[type="search"] {
  border: 4px solid rgba(196,81,0,0.44);
   
}

input[type="search"]:focus {
  border: 2px solid black;
  background-color: lightgrey;
  
}
#panel, #flip {
    padding: 5px;
    text-align: left;

    
}

#panel {
    padding: 50px;
    display: none;
 
}
select option{
  color:black;
}
select option:hover{
 color: solid rgba(196,81,0,0.44);
}
.error {color: #FF0000;}
::-webkit-scrollbar {
    width: 12px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
    -webkit-border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: blue; 
    border-radius: 10px;
    -webkit-border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #b30000; 
}
#mydiv,#mydiv1{
  display: none;
  
}

</style>


<body style="background:url(p.jpg);"onload="check1()">
  <script>
function check1() {
    var x = '<?php echo $chk11;?>';
    var y = '<?php echo $ch4;?>';
    
     
 if(!empty(x))
  {
    document.getElementById("y22").disabled=true;
    document.getElementById("d22").disabled=true;
    document.getElementById("m22").disabled=true;
     document.getElementById("chck11").checked=true;
      document.getElementById("chck11").value='ONGOING';
  }
  else{
    document.getElementById("y22").disabled=false;
    document.getElementById("d22").disabled=false;
    document.getElementById("m22").disabled=false;
    document.getElementById("chck11").checked=false;
  }
  
 
  
  if(y=='moredetails')
  {
    $("#panel").slideToggle("slow");
    document.getElementById("f3").checked=true;
    

  }
}
</script>

<h1 align="center" id="mydiv1">EDUCATION & TRAINING</h1>




<div class="center" id="mydiv">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="From"><b>From</b></label>
 <br>

 <pre><input type="search" name="DD11" list="exampleList3" placeholder="DD"  style="width:135px;" id="d11" value="<?php if(!empty($e1))echo $e1; else ;?>" ><datalist id="exampleList3">
      <option value="1">1
</option>
      <option value="2" >2
</option>
      <option value="3" >3
</option>
<option value="4">4
</option>
<option value="5">5
</option>

      <option value="6">6
</option>
      <option value="7" >7
</option>
      <option value="8" >8
</option>
<option value="9">9
</option>
<option value="10">10
</option>

      <option value="11">11
</option>
      <option value="12" >12
</option>
      <option value="13" >13
</option>
<option value="14">14
</option>
<option value="15">15
</option>

      <option value="16">16
</option>
      <option value="17" >17
</option>
      <option value="18" >18
</option>
<option value="19">19
</option>
<option value="20">20

      <option value="21">21
</option>
      <option value="22" >22
</option>
      <option value="23" >23
</option>
<option value="24">24
</option>
<option value="25">25
</option>
<option value="26">26
      </option>
      <option value="27" >27
</option>
      <option value="28" >28
</option>
<option value="29">29
</option>
<option value="30">30
</option>
<option value="31">31
</option>
  </datalist>     <input type="search" name="MM11" list="exampleList4" placeholder="MM"  style="width:135px;" id="m11" value="<?php if(!empty($f1))echo $f1; else ;?>" ><datalist id="exampleList4">
<option value="1">1
</option>
<option value="2" >2
</option>
      <option value="3" >3
</option>
<option value="4">4
</option>
<option value="5">5
</option>

      <option value="6">6
</option>
      <option value="7" >7
</option>
      <option value="8" >8
</option>
<option value="9">9
</option>
<option value="10">10
</option>
 <option value="11">11
</option>
<option value="12" >12
</option></datalist>     <input type="search" name="YYYY11" list="exampleList5" placeholder="YYYY"  style="width:135px;" id="y11" value="<?php if(!empty($g1))echo $g1; else ;?>" ><datalist id="exampleList5">

      <option value="2019">2019
</option>
      <option value="2018" >2018
</option>
      <option value="2017" >2017
</option>
<option value="2016">2016
</option>
<option value="2015">2015
</option>

      <option value="2014">2014
</option>
      <option value="2013" >2013
</option>
      <option value="2012" >2012
</option>
<option value="2011">2011
</option>
<option value="2010">2010
</option>

      <option value="2009">2009
</option>
      <option value="2008" >2008
</option>
      <option value="2007" >2007
</option>
<option value="2006">2006
</option>
<option value="2005">2005
</option>

      <option value="2004">2004
</option>
      <option value="2003" >2003
</option>
      <option value="2002" >2002
</option>
<option value="2001">2001
</option>
<option value="2000">2000

      <option value="1999">1999
</option>
      <option value="1998" >1998
</option>
      <option value="1997" >1997
</option>
<option value="1996">1996
</option>
<option value="1995">1995
</option>
<option value="1994">1994
      </option>
      <option value="1993" >1993
</option>
      <option value="1992" >1992
</option>
<option value="1991">1991
</option>
<option value="1990">1990
</option>
<option value="1989">1989
</option>
  </datalist><span class="error">* <?php if(!empty($error)) echo $error; else ;?></span> </pre>
  <br>
  <label for="TO"><b>TO</b></label>
 <br>

 <pre><input type="search" name="DD22" list="exampleList6" placeholder="DD"  style="width:135px;" id="d22" value="<?php if(!empty($h1))echo $h1; else ;?>" ><datalist id="exampleList6">
      <option value="1">1
</option>
      <option value="2" >2
</option>
      <option value="3" >3
</option>
<option value="4">4
</option>
<option value="5">5
</option>

      <option value="6">6
</option>
      <option value="7" >7
</option>
      <option value="8" >8
</option>
<option value="9">9
</option>
<option value="10">10
</option>

      <option value="11">11
</option>
      <option value="12" >12
</option>
      <option value="13" >13
</option>
<option value="14">14
</option>
<option value="15">15
</option>

      <option value="16">16
</option>
      <option value="17" >17
</option>
      <option value="18" >18
</option>
<option value="19">19
</option>
<option value="20">20

      <option value="21">21
</option>
      <option value="22" >22
</option>
      <option value="23" >23
</option>
<option value="24">24
</option>
<option value="25">25
</option>
<option value="26">26
      </option>
      <option value="27" >27
</option>
      <option value="28" >28
</option>
<option value="29">29
</option>
<option value="30">30
</option>
<option value="31">31
</option>
  </datalist>     <input type="search" name="MM22" list="exampleList7" placeholder="MM"  style="width:135px;" id="m22" value="<?php if(!empty($i1))echo $i1; else ;?>" ><datalist id="exampleList7">
<option value="1">1
</option>
<option value="2" >2
</option>
      <option value="3" >3
</option>
<option value="4">4
</option>
<option value="5">5
</option>

      <option value="6">6
</option>
      <option value="7" >7
</option>
      <option value="8" >8
</option>
<option value="9">9
</option>
<option value="10">10
</option>
 <option value="11">11
</option>
<option value="12" >12
</option></datalist>     <input type="search" name="YYYY22" list="exampleList8" placeholder="YYYY"  style="width:135px;" id="y22" value="<?php if(!empty($j1))echo $j1; else ;?>" ><datalist id="exampleList8">

      <option value="2019">2019
</option>
      <option value="2018" >2018
</option>
      <option value="2017" >2017
</option>
<option value="2016">2016
</option>
<option value="2015">2015
</option>

      <option value="2014">2014
</option>
      <option value="2013" >2013
</option>
      <option value="2012" >2012
</option>
<option value="2011">2011
</option>
<option value="2010">2010
</option>

      <option value="2009">2009
</option>
      <option value="2008" >2008
</option>
      <option value="2007" >2007
</option>
<option value="2006">2006
</option>
<option value="2005">2005
</option>

      <option value="2004">2004
</option>
      <option value="2003" >2003
</option>
      <option value="2002" >2002
</option>
<option value="2001">2001
</option>
<option value="2000">2000

      <option value="1999">1999
</option>
      <option value="1998" >1998
</option>
      <option value="1997" >1997
</option>
<option value="1996">1996
</option>
<option value="1995">1995
</option>
<option value="1994">1994
      </option>
      <option value="1993" >1993
</option>
      <option value="1992" >1992
</option>
<option value="1991">1991
</option>
<option value="1990">1990
</option>
<option value="1989">1989
</option>
  </datalist><span class="error">* <?php if(!empty($error1)) echo $error1; else ;?></span></pre> 
  <br>
 <script>
function myFunction() {
    var x = document.getElementById("y22").disabled;
    var y= document.getElementById("m22").disabled;
    var z = document.getElementById("d22").disabled;
  if(x==false && y==false && z==false )
  {
    document.getElementById("y22").disabled=true;
    document.getElementById("d22").disabled=true;
    document.getElementById("m22").disabled=true;
    document.getElementById("chck11").value='ONGOING';
     document.getElementById("chck11").checked=true;
    
  }
  else{
    document.getElementById("y22").disabled=false;
    document.getElementById("d22").disabled=false;
    document.getElementById("m22").disabled=false;
    document.getElementById("chck11").value='';
  }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 

function myFunction1() {
        
        $("#panel").slideToggle("slow");
        document.getElementById("f3").value='moredetails';
        
      
  
}
</script>


 <input type="checkbox" name="chk11"  id="chck11" onclick="myFunction()">
<label for="chck11" style="font-family: 'SExtralight'; font-size:14px;">ONGOING</label>
<br>
<br>
<br>
   <label for="Title or Qualification Awarded">Title or Qualification Awarded</label>
<br>
       <input type="search" name="qualification" list="exampleList" placeholder="Certificate in acting" autocomplete=off style="width:500px;" value="<?php if(!empty($l1))echo $l1; else ;?>"><span class="error">* <?php if(!empty($blank1)) echo $blank1; else ;?></span>
       
    <br>
    <br>
     <label for="Organisation provided education training"><h3>Organisation provided education training</h3></label> <br>
    <br>
    <label for="Name">Name</label> <br>
     <input type="search" name="organisation" placeholder="South Wales Technical College" autocomplete=off style="width:500px;" value="<?php if(!empty($m1))echo $m1; else ;?>" ><span class="error">* <?php if(!empty($blank2)) echo $blank2; else ;?></span><br><br>
    <pre><label for="City">City</label>                                                <label for="Country">Country</label> <br></pre>
    <pre><input type="search" name="City" placeholder="Kolkata" autocomplete=off  style="width:250px;" value="<?php if(!empty($n1))echo $n1; else ;?>" ><span class="error">* <?php if(!empty($blank3)) echo $blank3; else ;?></span>          <input type="search" name="Country" list="example1List" placeholder="Country" autocomplete=off style="width:230px;"  value="<?php if(!empty($o1))echo $o1; else ;?>" ><span class="error">* <?php if(!empty($blank4)) echo $blank4; else ;?></span>
        <datalist id="example1List">

  <option value="Afghanistan">Afghanistan</option>
  <option value="Åland Islands">Åland Islands</option>
  <option value="AL">Albania</option>
  <option value="DZ">Algeria</option>
  <option value="AS">American Samoa</option>
  <option value="AD">Andorra</option>
  <option value="AO">Angola</option>
  <option value="AI">Anguilla</option>
  <option value="AQ">Antarctica</option>
  <option value="AG">Antigua and Barbuda</option>
  <option value="AR">Argentina</option>
  <option value="AM">Armenia</option>
  <option value="AW">Aruba</option>
  <option value="AU">Australia</option>
  <option value="AT">Austria</option>
  <option value="AZ">Azerbaijan</option>
  <option value="BS">Bahamas</option>
  <option value="BH">Bahrain</option>
  <option value="BD">Bangladesh</option>
  <option value="BB">Barbados</option>
  <option value="BY">Belarus</option>
  <option value="BE">Belgium</option>
  <option value="BZ">Belize</option>
  <option value="BJ">Benin</option>
  <option value="BM">Bermuda</option>
  <option value="BT">Bhutan</option>
  <option value="BO">Bolivia, Plurinational State of</option>
  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
  <option value="BA">Bosnia and Herzegovina</option>
  <option value="BW">Botswana</option>
  <option value="BV">Bouvet Island</option>
  <option value="BR">Brazil</option>
  <option value="IO">British Indian Ocean Territory</option>
  <option value="BN">Brunei Darussalam</option>
  <option value="BG">Bulgaria</option>
  <option value="BF">Burkina Faso</option>
  <option value="BI">Burundi</option>
  <option value="KH">Cambodia</option>
  <option value="CM">Cameroon</option>
  <option value="CA">Canada</option>
  <option value="CV">Cape Verde</option>
  <option value="KY">Cayman Islands</option>
  <option value="CF">Central African Republic</option>
  <option value="TD">Chad</option>
  <option value="CL">Chile</option>
  <option value="CN">China</option>
  <option value="CX">Christmas Island</option>
  <option value="CC">Cocos (Keeling) Islands</option>
  <option value="CO">Colombia</option>
  <option value="KM">Comoros</option>
  <option value="CG">Congo</option>
  <option value="CD">Congo, the Democratic Republic of the</option>
  <option value="CK">Cook Islands</option>
  <option value="CR">Costa Rica</option>
  <option value="CI">Côte d'Ivoire</option>
  <option value="HR">Croatia</option>
  <option value="CU">Cuba</option>
  <option value="CW">Curaçao</option>
  <option value="CY">Cyprus</option>
  <option value="CZ">Czech Republic</option>
  <option value="DK">Denmark</option>
  <option value="DJ">Djibouti</option>
  <option value="DM">Dominica</option>
  <option value="DO">Dominican Republic</option>
  <option value="EC">Ecuador</option>
  <option value="EG">Egypt</option>
  <option value="SV">El Salvador</option>
  <option value="GQ">Equatorial Guinea</option>
  <option value="ER">Eritrea</option>
  <option value="EE">Estonia</option>
  <option value="ET">Ethiopia</option>
  <option value="FK">Falkland Islands (Malvinas)</option>
  <option value="FO">Faroe Islands</option>
  <option value="FJ">Fiji</option>
  <option value="FI">Finland</option>
  <option value="FR">France</option>
  <option value="GF">French Guiana</option>
  <option value="PF">French Polynesia</option>
  <option value="TF">French Southern Territories</option>
  <option value="GA">Gabon</option>
  <option value="GM">Gambia</option>
  <option value="GE">Georgia</option>
  <option value="DE">Germany</option>
  <option value="GH">Ghana</option>
  <option value="GI">Gibraltar</option>
  <option value="GR">Greece</option>
  <option value="GL">Greenland</option>
  <option value="GD">Grenada</option>
  <option value="GP">Guadeloupe</option>
  <option value="GU">Guam</option>
  <option value="GT">Guatemala</option>
  <option value="GG">Guernsey</option>
  <option value="GN">Guinea</option>
  <option value="GW">Guinea-Bissau</option>
  <option value="GY">Guyana</option>
  <option value="HT">Haiti</option>
  <option value="HM">Heard Island and McDonald Islands</option>
  <option value="VA">Holy See (Vatican City State)</option>
  <option value="HN">Honduras</option>
  <option value="HK">Hong Kong</option>
  <option value="HU">Hungary</option>
  <option value="IS">Iceland</option>
  <option value="IN">India</option>
  <option value="ID">Indonesia</option>
  <option value="IR">Iran, Islamic Republic of</option>
  <option value="IQ">Iraq</option>
  <option value="IE">Ireland</option>
  <option value="IM">Isle of Man</option>
  <option value="IL">Israel</option>
  <option value="IT">Italy</option>
  <option value="JM">Jamaica</option>
  <option value="JP">Japan</option>
  <option value="JE">Jersey</option>
  <option value="JO">Jordan</option>
  <option value="KZ">Kazakhstan</option>
  <option value="KE">Kenya</option>
  <option value="KI">Kiribati</option>
  <option value="KP">Korea, Democratic People's Republic of</option>
  <option value="KR">Korea, Republic of</option>
  <option value="KW">Kuwait</option>
  <option value="KG">Kyrgyzstan</option>
  <option value="LA">Lao People's Democratic Republic</option>
  <option value="LV">Latvia</option>
  <option value="LB">Lebanon</option>
  <option value="LS">Lesotho</option>
  <option value="LR">Liberia</option>
  <option value="LY">Libya</option>
  <option value="LI">Liechtenstein</option>
  <option value="LT">Lithuania</option>
  <option value="LU">Luxembourg</option>
  <option value="MO">Macao</option>
  <option value="MK">Macedonia, the former Yugoslav Republic of</option>
  <option value="MG">Madagascar</option>
  <option value="MW">Malawi</option>
  <option value="MY">Malaysia</option>
  <option value="MV">Maldives</option>
  <option value="ML">Mali</option>
  <option value="MT">Malta</option>
  <option value="MH">Marshall Islands</option>
  <option value="MQ">Martinique</option>
  <option value="MR">Mauritania</option>
  <option value="MU">Mauritius</option>
  <option value="YT">Mayotte</option>
  <option value="MX">Mexico</option>
  <option value="FM">Micronesia, Federated States of</option>
  <option value="MD">Moldova, Republic of</option>
  <option value="MC">Monaco</option>
  <option value="MN">Mongolia</option>
  <option value="ME">Montenegro</option>
  <option value="MS">Montserrat</option>
  <option value="MA">Morocco</option>
  <option value="MZ">Mozambique</option>
  <option value="MM">Myanmar</option>
  <option value="NA">Namibia</option>
  <option value="NR">Nauru</option>
  <option value="NP">Nepal</option>
  <option value="NL">Netherlands</option>
  <option value="NC">New Caledonia</option>
  <option value="NZ">New Zealand</option>
  <option value="NI">Nicaragua</option>
  <option value="NE">Niger</option>
  <option value="NG">Nigeria</option>
  <option value="NU">Niue</option>
  <option value="NF">Norfolk Island</option>
  <option value="MP">Northern Mariana Islands</option>
  <option value="NO">Norway</option>
  <option value="OM">Oman</option>
  <option value="PK">Pakistan</option>
  <option value="PW">Palau</option>
  <option value="PS">Palestinian Territory, Occupied</option>
  <option value="PA">Panama</option>
  <option value="PG">Papua New Guinea</option>
  <option value="PY">Paraguay</option>
  <option value="PE">Peru</option>
  <option value="PH">Philippines</option>
  <option value="PN">Pitcairn</option>
  <option value="PL">Poland</option>
  <option value="PT">Portugal</option>
  <option value="PR">Puerto Rico</option>
  <option value="QA">Qatar</option>
  <option value="RE">Réunion</option>
  <option value="RO">Romania</option>
  <option value="RU">Russian Federation</option>
  <option value="RW">Rwanda</option>
  <option value="BL">Saint Barthélemy</option>
  <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
  <option value="KN">Saint Kitts and Nevis</option>
  <option value="LC">Saint Lucia</option>
  <option value="MF">Saint Martin (French part)</option>
  <option value="PM">Saint Pierre and Miquelon</option>
  <option value="VC">Saint Vincent and the Grenadines</option>
  <option value="WS">Samoa</option>
  <option value="SM">San Marino</option>
  <option value="ST">Sao Tome and Principe</option>
  <option value="SA">Saudi Arabia</option>
  <option value="SN">Senegal</option>
  <option value="RS">Serbia</option>
  <option value="SC">Seychelles</option>
  <option value="SL">Sierra Leone</option>
  <option value="SG">Singapore</option>
  <option value="SX">Sint Maarten (Dutch part)</option>
  <option value="SK">Slovakia</option>
  <option value="SI">Slovenia</option>
  <option value="SB">Solomon Islands</option>
  <option value="SO">Somalia</option>
  <option value="ZA">South Africa</option>
  <option value="GS">South Georgia and the South Sandwich Islands</option>
  <option value="SS">South Sudan</option>
  <option value="ES">Spain</option>
  <option value="LK">Sri Lanka</option>
  <option value="SD">Sudan</option>
  <option value="SR">Suriname</option>
  <option value="SJ">Svalbard and Jan Mayen</option>
  <option value="SZ">Swaziland</option>
  <option value="SE">Sweden</option>
  <option value="CH">Switzerland</option>
  <option value="SY">Syrian Arab Republic</option>
  <option value="TW">Taiwan, Province of China</option>
  <option value="TJ">Tajikistan</option>
  <option value="TZ">Tanzania, United Republic of</option>
  <option value="TH">Thailand</option>
  <option value="TL">Timor-Leste</option>
  <option value="TG">Togo</option>
  <option value="TK">Tokelau</option>
  <option value="TO">Tonga</option>
  <option value="TT">Trinidad and Tobago</option>
  <option value="TN">Tunisia</option>
  <option value="TR">Turkey</option>
  <option value="TM">Turkmenistan</option>
  <option value="TC">Turks and Caicos Islands</option>
  <option value="TV">Tuvalu</option>
  <option value="UG">Uganda</option>
  <option value="UA">Ukraine</option>
  <option value="AE">United Arab Emirates</option>
  <option value="GB">United Kingdom</option>
  <option value="US">United States</option>
  <option value="UM">United States Minor Outlying Islands</option>
  <option value="UY">Uruguay</option>
  <option value="UZ">Uzbekistan</option>
  <option value="VU">Vanuatu</option>
  <option value="VE">Venezuela, Bolivarian Republic of</option>
  <option value="VN">Viet Nam</option>
  <option value="VG">Virgin Islands, British</option>
  <option value="VI">Virgin Islands, U.S.</option>
  <option value="WF">Wallis and Futuna</option>
  <option value="EH">Western Sahara</option>
  <option value="YE">Yemen</option>
  <option value="ZM">Zambia</option>
  <option value="ZW">Zimbabwe</option>

</select>
</pre>
 <div id="flip"><input type="checkbox" name="ch4"  onclick="myFunction1()"  id="f3" >
<label for="f3" style="font-family: 'SExtralight'; font-size:14px;">More Details</label>
 </div><br>
<div id="panel"> <label for="Street Address">Street Address</label> <br>
<input type="search" name="streetaddress" placeholder="" autocomplete=off style="width:400px;" value="<?php if(!empty($p1))echo $p1; else ;?>" ><br><br>
 <label for="Postal Code">Postal Code</label> <br>
<input type="search" name="postalcode" placeholder="" autocomplete=off style="width:400px;" value="<?php if(!empty($q1))echo $q1; else ;?>" ><br><br>
 <label for="WEBSITE">Website</label> <br>

<input type="search" name="website" placeholder="wwww.abc.com" autocomplete=off style="width:400px;" value="<?php if(!empty($w))echo $w; else ;?>" ><br></div>

<div class="center1">
 <pre><input type="submit" value="Submit" name="submit" target="p1" style="width:120px;">   <input type="cancel" value="Cancel" name="cancel" onclick ="window.location.href='frame_b2.php'" target="MainWindow" style="width:120px;"></pre></div>
</form>
</div>
</body>
</html>