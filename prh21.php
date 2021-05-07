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
 $sql2="SELECT * FROM workexperience1 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query2 = mysqli_query($conn,$sql2);//creating a query with the established cvonnection and above resource

if($row1 = mysqli_fetch_array($query2))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from=$row1['from1'];
   $to=$row1['to1'];
    $l=$row1['occupation'];
     $m=$row1['name'];
      $n=$row1['city'];
       $o=$row1['country'];
       $chk1=$row1['chk1'];
       $ch3=$row1['ch3'];
         $p=$row1['postalcode'];
             $q=$row1['streetaddress'];
         $e=$row1['dd1'];
         $f=$row1['mm1'];
          $g=$row1['yyyy1'];
         
            $h=$row1['dd2'];
            $i=$row1['mm2'];
            $j=$row1['yyyy2'];


          
        
            
}

?>
<?php
if(isset($_POST['submit'])){

  //$x=$_POST['username'];
  $e=$_POST['DD1'];
  $f=$_POST['MM1'];
  $g=$_POST['YYYY1'];
  
  
    $l=$_POST['description'];
     $m=$_POST['name'];
      $n=$_POST['City'];
       $o=$_POST['country'];
        $p=$_POST['streetaddress'];
         $q=$_POST['postalcode'];
        

       

 $arr = array($g,$f,$e);
$arr= implode("-",$arr);
$arr=date($arr);
 if(!empty($_POST['ch3']))
 {
   $ch3= $_POST['ch3'];
 }
 else
  $ch3="";
     
    if(!empty($_POST['chk1']))
    {
      $chk1 =$_POST['chk1'];
      $arr1="";
      $h="";
      $i="";
      $j="";

    }
    else
    {
          $h=$_POST['DD2'];
    $i=$_POST['MM2'];
    $j=$_POST['YYYY2'];
    if(empty($h)||empty($i)||empty($j))
  {
    $error1= " Wrong date format";


  }
    $arr1 = array($j,$i,$h);
    $arr1= implode("-",$arr1);
    $arr1=date($arr1);
    $chk1="";
    }
  if(empty($l))
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
 if(empty($n))
{
     
$blank3= "Empty";

}
else
  $blank3= "";
 if(empty($o))
{
     
$blank4= "Empty";

}
else
  $blank4= "";
 
 
   if(empty($e)||empty($f)||empty($g))
  {
    $error= " Wrong date format";
    

  }   
  if(!empty($e)&&!empty($f)&&!empty($g)&&!empty($l)&&!empty($m)&&!empty($n)&&!empty($o))

 {

  if((!empty($h)&&!empty($i)&&!empty($j))||!empty($chk1))
 {

  $x= $_SESSION['username'];
      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
 $query = "update workexperience1 set from1 ='$arr', to1='$arr1',occupation='$l',name='$m',city='$n',country='$o',streetaddress='$p',postalcode='$q',dd1='$e',mm1='$f',yyyy1='$g',dd2='$h',mm2='$i',yyyy2='$j',chk1='$chk1',ch3='$ch3' where username='$x'";
    //insert in the same order as the database
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
  <script>
function check() {
    var x = '<?php echo $chk1;?>';
    var y= '<?php echo $ch3;?>';
    
     
  if(x=="ONGOING" )
  {
    document.getElementById("y2").disabled=true;
    document.getElementById("d2").disabled=true;
    document.getElementById("m2").disabled=true;
     document.getElementById("chck1").checked=true;
      document.getElementById("chck1").value='ONGOING';
  }
  else{
    document.getElementById("y2").disabled=false;
    document.getElementById("d2").disabled=false;
    document.getElementById("m2").disabled=false;
    document.getElementById("chck1").checked=false;
      document.getElementById("chck1").value='';
  }
  if(y=='moredetails')
  {
    $("#panel").slideToggle("slow");
    document.getElementById("f2").checked=true;
    document.getElementById("f2").value='moredetails';


  }
}
</script></head>
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
     background-color: rgba(128,0,128,0.3);
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

input[type=search]:focus {
  border: 2px solid blue;
  
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
.error {color: #FF0000;}

#mydiv,#mydiv1{
  display: none;
  
}


</style>


<body  style="background:url(m.jpg);" onload="check()">

<h1 align="center" id="mydiv1">WORK EXPERIENCE</h1>




<div class="center" id="mydiv">
  <form action="prh21.php" method="post">
<label for="From"><b>From</b></label>
 <br>

 <pre><input type="search" name="DD1" list="exampleList3" placeholder="DD"  style="width:135px;" value="<?php echo $e;?>"><datalist id="exampleList3">
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
  </datalist>     <input type="search" name="MM1" list="exampleList4" placeholder="MM"  style="width:135px;" value="<?php echo $f;?>" ><datalist id="exampleList4">
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
</option></datalist>     <input type="search" name="YYYY1" list="exampleList5" placeholder="YYYY"  style="width:135px;" value="<?php echo $g;?>"><datalist id="exampleList5">

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

 <pre><input type="search" name="DD2" list="exampleList6" placeholder="DD"  style="width:135px;" id='d2' value="<?php echo $h;?>"><datalist id="exampleList6">
   <option value="1"<?php if($h=='1')echo 'selected="selected"';?>>1
</option>
      <option value="2" <?php if($h=='2')echo 'selected="selected"';?>>2
</option>
      <option value="3" <?php if($h=='3')echo 'selected="selected"';?>>3
</option>
<option value="4" <?php if($h=='4')echo 'selected="selected"';?>>4
</option>
<option value="5" <?php if($h=='5')echo 'selected="selected"';?>>5
</option>

      <option value="6" <?php if($h=='6')echo 'selected="selected"';?>>6
</option>
      <option value="7" <?php if($h=='7')echo 'selected="selected"';?>>7
</option>
      <option value="8" <?php if($h=='8')echo 'selected="selected"';?>>8
</option>
<option value="9" <?php if($h=='9')echo 'selected="selected"';?>>9
</option>
<option value="10" <?php if($h=='10')echo 'selected="selected"';?>>10
</option>

      <option value="11" <?php if($h=='11')echo 'selected="selected"';?>>11
</option>
      <option value="12" <?php if($h=='12')echo 'selected="selected"';?>>12
</option>
      <option value="13" <?php if($h=='13')echo 'selected="selected"';?>>13
</option>
<option value="14" <?php if($h=='14')echo 'selected="selected"';?>>14
</option>
<option value="15" <?php if($h=='15')echo 'selected="selected"';?>>15
</option>

      <option value="16" <?php if($h=='16')echo 'selected="selected"';?>>16
</option>
      <option value="17" <?php if($h=='17')echo 'selected="selected"';?>>17
</option>
      <option value="18" <?php if($h=='18')echo 'selected="selected"';?>>18
</option>
<option value="19" <?php if($h=='19')echo 'selected="selected"';?>>19
</option>
<option value="20" <?php if($h=='20')echo 'selected="selected"';?>>20

      <option value="21" <?php if($h=='21')echo 'selected="selected"';?>>21
</option>
      <option value="22" <?php if($h=='22')echo 'selected="selected"';?>>22
</option>
      <option value="23" <?php if($h=='23')echo 'selected="selected"';?>>23
</option>
<option value="24" <?php if($h=='24')echo 'selected="selected"';?>>24
</option>
<option value="25" <?php if($h=='25')echo 'selected="selected"';?>>25
</option>
<option value="26" <?php if($h=='26')echo 'selected="selected"';?>>26
      </option>
      <option value="27" <?php if($h=='27')echo 'selected="selected"';?> >27
</option>
      <option value="28" <?php if($h=='28')echo 'selected="selected"';?>>28
</option>
<option value="29" <?php if($h=='29')echo 'selected="selected"';?>>29
</option>
<option value="30" <?php if($h=='30')echo 'selected="selected"';?>>30
</option>
<option value="31" <?php if($h=='31')echo 'selected="selected"';?>>31
</option>
  </datalist>     <input type="search" name="MM2" list="exampleList7" placeholder="MM"  style="width:135px;" id='m2' value="<?php echo $i;?>"><datalist id="exampleList7">
<option value="1" <?php if($i=='1')echo 'selected="selected"';?>>1
</option>
<option value="2" <?php if($i=='2')echo 'selected="selected"';?>>2
</option>
      <option value="3" <?php if($i=='3')echo 'selected="selected"';?>>3
</option>
<option value="4" <?php if($i=='4')echo 'selected="selected"';?>>4
</option>
<option value="5" <?php if($i=='5')echo 'selected="selected"';?>>5
</option>

      <option value="6" <?php if($i=='6')echo 'selected="selected"';?>>6
</option>
      <option value="7" <?php if($i=='7')echo 'selected="selected"';?>>7
</option>
      <option value="8" <?php if($i=='8')echo 'selected="selected"';?>>8
</option>
<option value="9" <?php if($i=='9')echo 'selected="selected"';?>>9
</option>
<option value="10" <?php if($i=='10')echo 'selected="selected"';?>>10
</option>
 <option value="11" <?php if($i=='11')echo 'selected="selected"';?>>11
</option>
<option value="12" <?php if($i=='12')echo 'selected="selected"';?>>12
</option></datalist>     <input type="search" name="YYYY2" list="exampleList8" placeholder="YYYY"  style="width:135px;" id='y2' value="<?php echo $j;?>"><datalist id="exampleList8">

  
      <option value="2019" <?php if($j=='2019')echo 'selected="selected"';?>>2019
</option>
      <option value="2018" <?php if($j=='2018')echo 'selected="selected"';?>>2018
</option>
      <option value="2017" <?php if($j=='2017')echo 'selected="selected"';?>>2017
</option>
<option value="2016" <?php if($j=='2016')echo 'selected="selected"';?>>2016
</option>
<option value="2015" <?php if($j=='2015')echo 'selected="selected"';?>>2015
</option>

      <option value="2014" <?php if($j=='2014')echo 'selected="selected"';?>>2014
</option>
      <option value="2013" <?php if($j=='2013')echo 'selected="selected"';?>>2013
</option>
      <option value="2012" <?php if($j=='2012')echo 'selected="selected"';?>>2012
</option>
<option value="2011" <?php if($j=='2011')echo 'selected="selected"';?>>2011
</option>
<option value="2010" <?php if($j=='2010')echo 'selected="selected"';?>>2010
</option>

      <option value="2009" <?php if($j=='2009')echo 'selected="selected"';?>>2009
</option>
      <option value="2008" <?php if($j=='2008')echo 'selected="selected"';?>>2008
</option>
      <option value="2007" <?php if($j=='2007')echo 'selected="selected"';?>>2007
</option>
<option value="2006" <?php if($j=='2006')echo 'selected="selected"';?>>2006
</option>
<option value="2005" <?php if($j=='2005')echo 'selected="selected"';?>>2005
</option>

      <option value="2004" <?php if($j=='2004')echo 'selected="selected"';?>>2004
</option>
      <option value="2003" <?php if($j=='2003')echo 'selected="selected"';?>>2003
</option>
      <option value="2002" <?php if($j=='2002')echo 'selected="selected"';?>>2002
</option>
<option value="2001" <?php if($j=='2001')echo 'selected="selected"';?>>2001
</option>
<option value="2000" <?php if($j=='2000')echo 'selected="selected"';?>>2000

      <option value="1999" <?php if($j=='1999')echo 'selected="selected"';?>>1999
</option>
      <option value="1998" <?php if($j=='1998')echo 'selected="selected"';?>>1998
</option>
      <option value="1997" <?php if($j=='1997')echo 'selected="selected"';?>>1997
</option>
<option value="1996" <?php if($j=='1996')echo 'selected="selected"';?>>1996
</option>
<option value="1995" <?php if($j=='1995')echo 'selected="selected"';?>>1995
</option>
<option value="1994" <?php if($j=='1994')echo 'selected="selected"';?>>1994
      </option>
      <option value="1993" <?php if($j=='1993')echo 'selected="selected"';?>>1993
</option>
      <option value="1992" <?php if($j=='1992')echo 'selected="selected"';?>>1992
</option>
<option value="1991" <?php if($j=='1991')echo 'selected="selected"';?>>1991
</option>
<option value="1990" <?php if($j=='1990')echo 'selected="selected"';?>>1990
</option>
<option value="1989" <?php if($j=='1989')echo 'selected="selected"';?>>1989
</option>
  </datalist><span class="error">* <?php if(!empty($error1)) echo $error1; else ;?></span> </pre>
  <br>
 <script>
function myFunction() {
    var x = document.getElementById("y2").disabled;
    var y= document.getElementById("m2").disabled;
    var z = document.getElementById("d2").disabled;
  if(x==false && y==false && z==false )
  {
    document.getElementById("y2").disabled=true;
    document.getElementById("d2").disabled=true;
    document.getElementById("m2").disabled=true;
    document.getElementById("chck1").value='ONGOING';
  }
  else{
    document.getElementById("y2").disabled=false;
    document.getElementById("d2").disabled=false;
    document.getElementById("m2").disabled=false;
    document.getElementById("chck1").value='';
  }
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 

function myFunction1() {

    
        $("#panel").slideToggle("slow");
        document.getElementById("f2").value='moredetails';
  
}
</script>


 <input type="checkbox" name="chk1"  id="chck1" onclick="myFunction()">
<label for="chck1" style="font-family: 'SExtralight'; font-size:14px;">ONGOING</label>
<br>
<br>
<br>
   <label for="description">Occupation Or Position held</label>
<br>
       <input type="search" name="description" list="exampleList" placeholder="select from list or enter text" autocomplete=off style="width:500px;"  value="<?php echo $l;?>">
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
    </datalist><span class="error">* <?php if(!empty($blank1)) echo $blank1; else ;?></span>
    <br>
    <br>
     <label for="Employer"><h3>Employer</h3></label> <br>
    <br>
    <label for="Name">Name</label> <br>
     <input type="search" name="name" placeholder="Andersons And Dobbs Ltd" autocomplete=off style="width:500px;" value="<?php echo $m;?>"><span class="error">* <?php if(!empty($blank2)) echo $blank2; else ;?></span><br><br>
    <pre><label for="City">City</label>                                                <label for="Country">Country</label> <br></pre>
    <pre><input type="search" name="City" placeholder="Kolkata" autocomplete=off  style="width:250px;"  value="<?php echo $n;?>" > <span class="error">* <?php if(!empty($blank3)) echo $blank3; else ;?> </span>         <input type="search" name="country" list="example1List" placeholder="country" autocomplete=off style="width:230px;"  value="<?php echo $o;?>"><span class="error">* <?php if(!empty($blank4)) echo $blank4; else ;?></span>
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
  <option value="KP">Korea, Democratic Peoples Republic of</option>
  <option value="KR">Korea, Republic of</option>
  <option value="KW">Kuwait</option>
  <option value="KG">Kyrgyzstan</option>
  <option value="LA">Lao Peoples Democratic Republic</option>
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
 <div id="flip"><input type="checkbox" name="ch3"  onclick="myFunction1()"  id="f2">
<label for="f2" style="font-family: 'SExtralight'; font-size:14px;">More Details</label>
 </div><br>
<div id="panel"> <label for="Street Address">Street Address</label> <br>
<input type="search" name="streetaddress" placeholder="" autocomplete=off style="width:400px;" value="<?php echo $p;?>"><br><br>
 <label for="Postal Code">Postal Code</label> <br>
<input type="search" name="postalcode" placeholder="" autocomplete=off style="width:400px;" value="<?php echo $q;?>"><br><br></div>
<div class="center1">
 <pre><input type="submit" value="Submit" name="submit"  style="width:120px;">   <input type="cancel" value="Cancel" name="cancel" onclick ="window.location.href='frame_b2.php'" target="MainWindow" style="width:120px;"></pre></div>
</form>
</div>
</body>
</html>