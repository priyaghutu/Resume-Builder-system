<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'demo');//database name
define('DB_USER','root');//username
define('DB_PASSWORD',''); 
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Page header

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-13);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // Page number
    $this->SetTextColor(0,0,255);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}



$pdf=new PDF();
$pdf->AliasNbPages();
 $pdf->AddPage();
 $pdf->SetX(10);
 
  $pdf->SetFont("times","",25);
 $pdf->cell(0,10,"Curriculum Vitae",0,8,'C');
  $pdf->Ln(20);
session_start();


$x=$_SESSION['username'];//retrieving name from form



$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
 $sql200="SELECT * FROM personaldetails WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query200 = mysqli_query($conn,$sql200);//creating a query with the established cvonnection and above resource

if($row200 = mysqli_fetch_array($query200))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
   //$x=$_POST['username'];
  $e200=$row200['dd1'];
  $f200=$row200['mm1'];
  $g200=$row200['yyyy1'];
  
  
    $l200=$row200['fname'];
     $m200=$row200['lname'];
      $n200=$row200['streetaddress'];
       $o200=$row200['postal'];
        $p200=$row200['city'];
         $q200=$row200['country'];
         $r200=$row200['type'];
         $s200=$row200['phone'];
         $t200=$row200['email'];
         $u200=$row200['sex'];
         $bday=$row200['bday'];

              $b200="overlay";
          $link200="name1.php";
          $link400="deletename.php";
          $op200 ="delete";
          $op400="edit";
          $cl200="p2";
         $n200=$n200.",";
         $q200="(".$q200.")";
    
          $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(54,10,"Personal Details",0,0,'L');
   $pdf->SetTextColor(0,0,0);
   $pdf->cell(0,10,"                    $l200"."  "."$m200",0,1,'L');
   $pdf->Image('fpdf/location.png',92,51,0,0);
    $pdf->cell(0,10,"                                                               $n200 $o200 $p200 $q200 ",0,1,'L');
      $pdf->Image('fpdf/phone.png',93,61,0,0);
    $pdf->cell(30,10,"                                                               $s200",0,1,'L'); 
     $pdf->Image('fpdf/email.png',93,71,0,0);
   $pdf->cell(0,10,"                                                               $t200",0,1,'L');
     $pdf->SetTextColor(0,0,255);

     $pdf->cell(19,10,"                                                          Sex",0,0,'L');       
     $pdf->SetTextColor(0,0,0);
      $pdf->cell(75,10,"                                                    $u200 ",0,0,'L');
     $pdf->SetTextColor(0,0,255);
     $pdf->cell(10,10,"           | Date Of Birth",0,0,'L');       
     $pdf->SetTextColor(0,0,0);
     $pdf->cell(0,10,"                             $bday",0,0,'L');       
}

else
{
  $l200="";
     $m200="";
      $n200="";
       $o200="";
        $p200="";
         $q200="";
         $r200="";
         $s200="";
         $t200="";
         $u200="";

              $b200="";
          $link200="name.php";
          $link400="";
          $op200 ="";
          $op400="Fill In";
          $cl200="p2";
}










          $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing a connection
  $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
  
  
  $sql="select * from testimage where username='$x'";
  $query=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($query);
  $result=mysqli_fetch_array($query);
  if($result)
  {
    $folder="image1";
    $img=$result['name'];
   $img=$folder . '/' . $img;
   $pdf->Image("$img",10,54,50,35);
    
  }
  

















$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());//establishing connection
$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());//selecting database from the established connection
$sql1="SELECT * FROM typeofapplication WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query1 = mysqli_query($conn,$sql1);//creating a query with the established cvonnection and above resource

if($row = mysqli_fetch_array($query1))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $_SESSION['username'] = $row['username'];
           $_SESSION['type_of_application'] = $row['type_of_application'];
           $_SESSION['jaf'] = $row['jaf'];
         $e=$row['type_of_application'];
          $n= $row['jaf'];
          $b="overlay";
          $link1="prg2.php";
          $link2="delete1.php";
          $op ="delete";
          $op2="edit";
          $cl="p2";



if(!empty($result))
           $pdf->Ln(30);

else
          $pdf->Ln(19);
          $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(82,10,"$e",0,0,'L');
   $pdf->SetTextColor(0,0,0);
   $pdf->cell(0,10,"$n",0,1,'L');
  
}
else
{
  $e="";
  $n="";
}


 $sql2="SELECT * FROM workexperience WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query2 = mysqli_query($conn,$sql2);//creating a query with the established cvonnection and above resource
$row1= mysqli_fetch_assoc($query2);
if($row1)//reterieving an associative array from the fetched query and further checking whether it is empty or not

{
  $from=$row1['from1'];
   $to=$row1['to1'];
    $occupation=$row1['occupation'];
     $nam=$row1['name'];
      $city=$row1['city'];
       $country=$row1['country'];
       $chk1=$row1['chk1'];
         $postal=$row1['postalcode'];
        
              $b1="overlay";
          $link3="prh2.php";
          $link4="delete2.php";
          $op3 ="delete";
          $op4="edit";
          $cl1="p2";
          
          if($chk1=="ONGOING")
          {
            $to="Present";
          }
          if(!empty($row1['streetaddress']))
             $streetaddress=$row1['streetaddress'].",";
           else
             $streetaddress="";
           if(!empty($country))
           {
             $country="(".$row1['country'].")";
           }
           else
            $country="";
          if(!empty($from))
          {
            $from=$from."-";
          }
          else
          {
            $from="";
          }
          if(empty($row)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          if(!empty($row)||!empty($row200))
          {
             $pdf->Ln(15);
          }
          else
         
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
   $pdf->cell(59,10,"Work And Experience",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
    $pdf->Ln(5);
              
  $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from$to",0,0,'L');
    $pdf->cell(310,10,"                                 $occupation",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                          $nam",0,1,'L');
    $pdf->cell(535,10,"                                                         $streetaddress$postal $city$country",0,1,'L');

  }
else{
        $from="";
   $to="";
    $occupation="";
     $nam="";
      $city="";
       $country="";
        $streetaddress="";
         $postal="";
     

          $link3="prh1.php";
       $b1="";
        
          $link4="";
          $op3 ="";
          $op4="Fill In";
          $cl1="";
          
}


$sql21="SELECT * FROM workexperience1 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query21 = mysqli_query($conn,$sql21);//creating a query with the established cvonnection and above resource
$row12 = mysqli_fetch_assoc($query21);
if($row12)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from3=$row12['from1'];
   $to3=$row12['to1'];
    $occupation3=$row12['occupation'];
     $nam3=$row12['name'];
      $city3=$row12['city'];
       $country3=$row12['country'];
       $chk13=$row12['chk1'];
         $postal3=$row12['postalcode'];
        
              $b13="overlay";
          $link33="prh21.php";
          $link43="delete7.php";
          $op33 ="delete";
          $op43="edit";
          $cl13="p2";
          
          if($chk13=="ONGOING")
          {
            $to3="Present";
          }
          if(!empty($row12['streetaddress']))
             $streetaddress3=$row12['streetaddress'].",";
           else
             $streetaddress3="";
           if(!empty($country3))
           {
             $country3="(".$row12['country'].")";
           }
           else
            $country3="";
          if(!empty($from3))
          {
            $from3=$from3."-";
          }
          else
          {
            $from3="";
          }
            if(empty($row1)&&empty($row)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          

          if(empty($row1))
          { 
             $pdf->Ln(12);
            $pdf->SetTextColor(0,0,255);
            $pdf->cell(59,10,"Work And Experience",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
             $pdf->Ln(5);
          }
           else
          $pdf->Ln(7);     
          
  $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from3$to3",0,0,'L');
    $pdf->cell(310,10,"                                 $occupation3",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                          $nam3",0,1,'L');
    $pdf->cell(535,10,"                                                          $streetaddress3$postal3 $city3$country3",0,1,'L');

         
  }

else{
        $from3="";
   $to3="";
    $occupation3="";
     $nam3="";
      $city3="";
       $country3="";
        $streetaddress3="";
         $postal3="";
        

          $link33="prh11.php";
       $b13="";
        
          $link43="";
          $op33 ="";
          $op43="Fill In";
          $cl13="";
            $ff2="";
               
                
}



$sql23="SELECT * FROM workexperience2 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query23 = mysqli_query($conn,$sql23);//creating a query with the established cvonnection and above resource
$row14 = mysqli_fetch_assoc($query23);
if($row14)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from5=$row14['from1'];
   $to5=$row14['to1'];
    $occupation5=$row14['occupation'];
     $nam5=$row14['name'];
      $city5=$row14['city'];
       $country5=$row14['country'];
       $chk15=$row14['chk1'];
         $postal5=$row14['postalcode'];
        
              $b15="overlay";
          $link35="prh22.php";
          $link45="delete8.php";
          $op3551 ="delete";
          $op45="edit";
          $cl15="p2";
          
          if($chk15=="ONGOING")
          {
            $to5="Present";
          }
          if(!empty($row14['streetaddress']))
             $streetaddress5=$row14['streetaddress'].",";
           else
             $streetaddress5="";
           if(!empty($country5))
           {
             $country5="(".$row14['country'].")";
           }
           else
            $country5="";
          if(!empty($from5))
          {
            $from5=$from5."-";
          }
          else
          {
            $from5="";
          }

            if(empty($row1)&&empty($row)&&empty($row12)&&!empty($result))
          {
            $pdf->Ln(30);
          }
         

            if(empty($row12)&&empty($row1))
          {
            $pdf->Ln(12);
            $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Work And Experience",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');             $pdf->Ln(5);
          }
          else
          $pdf->Ln(7);



              
  $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from5$to5",0,0,'L');
    $pdf->cell(310,10,"                                 $occupation5",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                          $nam5",0,1,'L');
    $pdf->cell(535,10,"                                                          $streetaddress5$postal5 $city5$country5",0,1,'L');

  }

else{
        $from5="";
   $to5="";
    $occupation5="";
     $nam5="";
      $city5="";
       $country5="";
        $streetaddress5="";
         $postal5="";
         $op45="Fill In"; 

          $link35="prh12.php";
       $b15="";
        
          $link45="";
          $op3551 ="";
         
          $cl15="";
           $ff3="";
           
              $class2="";
}


$sql24="SELECT * FROM workexperience3 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query24 = mysqli_query($conn,$sql24);//creating a query with the established cvonnection and above resource
$row15 = mysqli_fetch_assoc($query24);
if($row15)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from6=$row15['from1'];
   $to6=$row15['to1'];
    $occupation6=$row15['occupation'];
     $nam6=$row15['name'];
      $city6=$row15['city'];
       $country6=$row15['country'];
       $chk16=$row15['chk1'];
         $postal6=$row15['postalcode'];
        
              $b16="overlay";
          $link36="prh23.php";
          $link46="delete9.php";
          $op366 ="delete";
          $op46="edit";
          $cl16="p2";
          
          if($chk16=="ONGOING")
          {
            $to6="Present";
          }
          if(!empty($row15['streetaddress']))
             $streetaddress6=$row15['streetaddress'].",";
           else
             $streetaddress6="";
           if(!empty($country6))
           {
             $country6="(".$row15['country'].")";
           }
           else
            $country6="";
          if(!empty($from6))
          {
            $from6=$from6."-";
          }
          else
          {
            $from6="";
          }



           if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          


          if(empty($row14)&&empty($row12)&&empty($row1))
          {
             $pdf->Ln(12);
            $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Work And Experience",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');             $pdf->Ln(5);
          }
else
          $pdf->Ln(7);
                 
  $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from6$to6",0,0,'L');
    $pdf->cell(310,10,"                                 $occupation6",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                          $nam6",0,1,'L');
    $pdf->cell(535,10,"                                                          $streetaddress6$postal6 $city6$country6",0,1,'L');

        
  }

else{
        $from6="";
   $to6="";
    $occupation6="";
     $nam6="";
      $city6="";
       $country6="";
        $streetaddress6="";
         $postal6="";
        $op46="Fill In"; 

          $link36="prh13.php";
       $b16="";
        
          $link46="";
          $op366 ="";
         
          $cl16="";
           $ff4="";
             
              $class3="";
}



$sql25="SELECT * FROM workexperience4 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query25 = mysqli_query($conn,$sql25);//creating a query with the established cvonnection and above resource
$row16 = mysqli_fetch_assoc($query25);
if($row16)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from7=$row16['from1'];
   $to7=$row16['to1'];
    $occupation7=$row16['occupation'];
     $nam7=$row16['name'];
      $city7=$row16['city'];
       $country7=$row16['country'];
       $chk17=$row16['chk1'];
         $postal7=$row16['postalcode'];
        
              $b17="overlay";
          $link37="prh24.php";
          $link47="delete10.php";
          $op37 ="delete";
          $op47="edit";
          $cl17="p2";
          
          if($chk17=="ONGOING")
          {
            $to7="Present";
          }
          if(!empty($row16['streetaddress']))
             $streetaddress7=$row16['streetaddress'].",";
           else
             $streetaddress7="";
           if(!empty($country7))
           {
             $country7="(".$row16['country'].")";
           }
           else
            $country7="";
          if(!empty($from7))
          {
            $from7=$from7."-";
          }
          else
          {
            $from7="";
          }


         if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&!empty($result))
          {
            $pdf->Ln(30);
          }
         


          if(empty($row15)&&empty($row14)&&empty($row12)&&empty($row1))
          {
             $pdf->Ln(12);
            $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Work And Experience",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');             $pdf->Ln(5);
          }
           else
          $pdf->Ln(7);

              
  $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from7$to7",0,0,'L');
    $pdf->cell(310,10,"                                 $occupation7",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                          $nam7",0,1,'L');
    $pdf->cell(535,10,"                                                          $streetaddress7$postal7 $city7$country7",0,1,'L');

  }

else{
        $from7="";
   $to7="";
    $occupation7="";
     $nam7="";
      $city7="";
       $country7="";
        $streetaddress7="";
         $postal7="";
         $op47="Fill In"; 

          $link37="prh14.php";
       $b17="";
        
          $link47="";
          $op37 ="";
         
          $cl17="";
           $ff5="";
             
              $class4="";
}



$sql26="SELECT * FROM workexperience5 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query26 = mysqli_query($conn,$sql26);//creating a query with the established cvonnection and above resource
$row17 = mysqli_fetch_assoc($query26);
if($row17)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from8=$row17['from1'];
   $to8=$row17['to1'];
    $occupation8=$row17['occupation'];
     $nam8=$row17['name'];
      $city8=$row17['city'];
       $country8=$row17['country'];
       $chk18=$row17['chk1'];
         $postal8=$row17['postalcode'];
        
              $b18="overlay";
          $link38="prh25.php";
          $link48="delete11.php";
          $op38 ="delete";
          $op48="edit";
          $cl18="p2";
          
          if($chk18=="ONGOING")
          {
            $to8="Present";
          }
          if(!empty($row17['streetaddress']))
             $streetaddress8=$row17['streetaddress'].",";
           else
             $streetaddress8="";
           if(!empty($country8))
           {
             $country8="(".$row17['country'].")";
           }
           else
            $country8="";
          if(!empty($from8))
          {
            $from8=$from8."-";
          }
          else
          {
            $from8="";
          }

          if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          
            if(empty($row16)&&empty($row15)&&empty($row14)&&empty($row12)&&empty($row1))
          {
            $pdf->Ln(12);
            $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Work And Experience",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');             $pdf->Ln(5);
          }

else
          $pdf->Ln(7);



         
  $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from8$to8",0,0,'L');
    $pdf->cell(310,10,"                                 $occupation8",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                          $nam8",0,1,'L');
    $pdf->cell(535,10,"                                                           $streetaddress8$postal8 $city8$country8",0,1,'L');

        
  }

else{
        $from8="";
   $to8="";
    $occupation8="";
     $nam8="";
      $city8="";
       $country8="";
        $streetaddress8="";
         $postal8="";
         $op48="Fill In";

          $link38="prh15.php";
       $b18="";
        
          $link48="";
          $op38 ="";
         
          $cl18="";
            
}






$sql3="SELECT * FROM education WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query3 = mysqli_query($conn,$sql3);//creating a query with the established cvonnection and above resource
$row2 = mysqli_fetch_array($query3);
if($row2)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from2=$row2['from2'];
   $to2=$row2['to2'];
    $qualification=$row2['qualification'];
     $organisation=$row2['organisation'];
      $city2=$row2['city2'];
       $country2=$row2['country2'];
       $chk2=$row2['chk2'];
         $postal2=$row2['pc'];
       $website=$row2['website'];
              $b2="overlay";
        
          $op31 ="delete";
          $op41="edit";
          $cl2="p2";
          $l1="pri2.php";
          $l2="delate3.php";
          if($chk2=="ONGOING")
          {
            $to2="Present";
          }
          if(!empty($row2['streetaddress']))
             $streetaddress2=$row2['st'].",";
           else
             $streetaddress2="";
           if(!empty($country2))
           {
             $country2="(".$row2['country2'].")";
           }
           else
            $country2="";
          if(!empty($from2))
          {
            $from2=$from2."-";
          }
          else
          {
            $from2="";
          }
          if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          else
          $pdf->Ln(9);

          
          
    
      $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Education And Training",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');    $pdf->Ln(5); 
  
    $pdf->cell(35,10,"$from2$to2",0,0,'L');
    $pdf->cell(310,10,"                                  $qualification",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                           $organisation",0,1,'L');
    $pdf->cell(535,10,"                                                           $streetaddress2$postal2 $city2$country2",0,1,'L');

}
else{
        $from2="";
   $to2="";
   
      $city2="";
       $country2="";
        $streetaddress2="";
         $postal2="";
         $qualification="";
     $organisation="";

       $b2="";
        $l1="pri1.php";
          $link5="";
          $op31 ="";
          $op41="Fill In";
          $cl2="";
          
           $l2="";
          
          $class34="";
          $ff34="";
}





$sql34="SELECT * FROM education1 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query34 = mysqli_query($conn,$sql34);//creating a query with the established cvonnection and above resource
$row4 = mysqli_fetch_array($query34);
if($row4 )//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from4=$row4['from2'];
   $to4=$row4['to2'];
    $qualification4=$row4['qualification'];
     $organisation4=$row4['organisation'];
      $city4=$row4['city2'];
       $country4=$row4['country2'];
       $chk4=$row4['chk2'];
         $postal4=$row4['pc'];
       $website4=$row4['website'];
              $b41="overlay";
        
          $op8 ="delete";
          $op7="edit";
          $cl4="p2";
          $l7="pri21.php";
          $l8="delete12.php";
          if($chk4=="ONGOING")
          {
            $to4="Present";
          }
          if(!empty($row4['streetaddress']))
             $streetaddress4=$row4['st'].",";
           else
             $streetaddress4="";
           if(!empty($country4))
           {
             $country4="(".$row4['country2'].")";
           }
           else
            $country4="";
          if(!empty($from4))
          {
            $from4=$from4."-";
          }
          else
          {
            $from4="";
          }


           
         if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          else
          $pdf->Ln(9);

          


             if(empty($row2))
          {
            $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Education And Training",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');            $pdf->Ln(6);
          }


    $pdf->SetTextColor(0,0,255);
    $pdf->SetFillColor(255,255,255);
    $pdf->cell(35,10,"$from4$to4",0,0,'L',false);
    $pdf->cell(310,10,"                                  $qualification4",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                           $organisation4",0,1,'L');
    $pdf->cell(535,10,"                                                           $streetaddress4$postal4 $city4$country4",0,1,'L');
           
}
else{
        $from4="";
   $to4="";
   
      $city4="";
       $country4="";
        $streetaddress4="";
         $postal4="";
         $qualification4="";
     $organisation4="";

       $b41="";
        $l7="pri11.php";
         $l8="";
          $op8 ="";
         $op7="Fill In";
          $cl34="";
          
           
         
          
}






$sql35="SELECT * FROM education2 WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query35 = mysqli_query($conn,$sql35);//creating a query with the established cvonnection and above resource
$row5 = mysqli_fetch_array($query35);
if($row5)//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $from9=$row5['from2'];
   $to9=$row5['to2'];
    $qualification9=$row5['qualification'];
     $organisation9=$row5['organisation'];
      $city9=$row5['city2'];
       $country9=$row5['country2'];
       $chk9=$row5['chk2'];
         $postal9=$row5['pc'];
       $website9=$row5['website'];
              $b59="overlay";
        
          $op9 ="delete";
          $op6="edit";
          $cl59="p2";
          $l6="pri22.php";
          $l9="delete13.php";
          if($chk9=="ONGOING")
          {
            $to9="Present";
          }
          if(!empty($row5['streetaddress']))
             $streetaddress9=$row5['st'].",";
           else
             $streetaddress9="";
           if(!empty($country9))
           {
             $country9="(".$row5['country2'].")";
           }
           else
            $country9="";
          if(!empty($from9))
          {
            $from9=$from9."-";
          }
          else
          {
            $from9="";
          }
           
        
          if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(9);

             if(empty($row4)&&empty($row5))
          {
            $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Education And Training",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');             $pdf->Ln(6);
          }
        

          $pdf->SetFont("times","",16);
    $pdf->SetTextColor(0,0,255);
    $pdf->cell(35,10,"$from9$to9",0,0,'L');
    $pdf->cell(310,10,"                                  $qualification9",0,1,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->cell(535,10,"                                                           $organisation9",0,1,'L');
    $pdf->cell(535,10,"                                                           $streetaddress9$postal9 $city9$country9",0,1,'L');
           
}
else{
        $from9="";
   $to9="";
   
      $city9="";
       $country9="";
        $streetaddress9="";
         $postal9="";
         $qualification9="";
     $organisation9="";

       $b59="";
        $l6="pri12.php";
         $l9="";
          $op9 ="";
         
          $cl5="";
           $op6="Fill In";
         
           
}









$sql3="SELECT * FROM mothertongue WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query3 = mysqli_query($conn,$sql3);//creating a query with the established cvonnection and above resource

if($row3 = mysqli_fetch_array($query3))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $_SESSION['username'] = $row3['username'];
          
           $lang=$row3['languages'];
           $lan="edit";
           $fun="myFunction1()";
           $lan1="delete4.php";
           $lan2="delete";
           $b3="overlay";
            

       
          if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(9);
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Personal Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');    $pdf->Ln(6);         
  $pdf->SetFont("times","",16);
   $pdf->cell(35,10,"Mother Tongue",0,0,'L');
   $pdf->SetTextColor(0,0,0);
   $pdf->cell(0,10,"                                  $lang",0,1,'L');
}

 else{
  $lang="";
  $lan="Fill in";
           $lan1="";
           $lan2="";
            $b3="";
             $fun="myFunction()";
  
 }




$sql4="SELECT * FROM jobskill WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query4 = mysqli_query($conn,$sql4);//creating a query with the established cvonnection and above resource

if($row41 = mysqli_fetch_array($query4))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $_SESSION['username'] = $row41['username'];
          
           $skill=$row41['skill'];
           $a="edit";
           $fun1="myFunction2()";
           $bb="delete5.php";
           $c="delete";
           $b4="overlay";

            
           
          if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
        if(empty($row3))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Personal Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(7);
        }
      $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);          
   $pdf->cell(83,10,"Jobskill",0,0,'L');
   $pdf->SetTextColor(0,0,0);
  $pdf-> SetFillColor(255,255,255);
$pdf->Multicell(116,10,"$skill",0,1,'L');
  
   
}

 else{
  $skill="";
  $a="Fill in";
           $c="";
           $bb="";
            $b4="";
             $fun1="myFunction21()";
  
 }




 $sql5="SELECT * FROM achievement WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query5 = mysqli_query($conn,$sql5);//creating a query with the established cvonnection and above resource

if($row51 = mysqli_fetch_array($query5))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  $_SESSION['username'] = $row51['username'];
          
           $dskill=$row51['dsill'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row41)&&empty($row3))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Personal Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Achievements",0,0,'L');
   $pdf->SetTextColor(0,0,0);
    $pdf-> SetFillColor(255,255,255);
   $pdf->Multicell(116,10,"$dskill",0,1,'L');
    
          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }



$sql6="SELECT * FROM projects WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query6 = mysqli_query($conn,$sql6);//creating a query with the established cvonnection and above resource

if($row61 = mysqli_fetch_array($query6))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
 
          
           $projects=$row61['proj'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
          
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Personal Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Projects",0,0,'L');
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFillColor(255,255,255);
   $pdf->Multicell(116,10,"$projects",0,1,'L');
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }


$sql7="SELECT * FROM conferences WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query7 = mysqli_query($conn,$sql7);//creating a query with the established cvonnection and above resource

if($row71 = mysqli_fetch_array($query7))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          
           $conference=$row71['conf'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51)&&empty($row61))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row61))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Additional Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Conferences",0,0,'L');
   $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
   $pdf->Multicell(116,10,"$conference",0,1,'L');
          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }





$sql8="SELECT * FROM seminars WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query8 = mysqli_query($conn,$sql7);//creating a query with the established cvonnection and above resource

if($row81 = mysqli_fetch_array($query7))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          
           $seminar=$row81['seminar'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51)&&empty($row61)&&empty($row71))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row71)&&empty($row61))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Additional Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Seminars",0,0,'L');
   $pdf->SetTextColor(0,0,0);
     $pdf->SetFillColor(255,255,255);
$pdf->Multicell(116,10,"$seminar",0,1,'L');          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }





$sql9="SELECT * FROM publications  WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query9 = mysqli_query($conn,$sql9);//creating a query with the established cvonnection and above resource

if($row91 = mysqli_fetch_array($query9))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          
           $publication=$row91['publication'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51)&&empty($row61)&&empty($row71)&&empty($row81))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row81)&&empty($row71)&&empty($row61))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Additional Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Publications",0,0,'L');
   $pdf->SetTextColor(0,0,0);
     $pdf->SetFillColor(255,255,255);
$pdf->Multicell(116,10,"$publication",0,1,'L');          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }



$sql10="SELECT * FROM certifications  WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query10= mysqli_query($conn,$sql10);//creating a query with the established cvonnection and above resource

if($row101 = mysqli_fetch_array($query10))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          
           $certification=$row101['certification'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51)&&empty($row61)&&empty($row71)&&empty($row81)&&empty($row91))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row91)&&empty($row81)&&empty($row71)&&empty($row61))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Additional Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Certifications",0,0,'L');
   $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
$pdf->Multicell(116,10,"$certification",0,1,'L');          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }


$sql11="SELECT * FROM courses  WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query11= mysqli_query($conn,$sql11);//creating a query with the established cvonnection and above resource

if($row111 = mysqli_fetch_array($query11))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          
           $course=$row111['course'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51)&&empty($row61)&&empty($row71)&&empty($row81)&&empty($row91)&&empty($row101))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row101)&&empty($row91)&&empty($row81)&&empty($row71)&&empty($row61))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Additional Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Courses",0,0,'L');
   $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
$pdf->Multicell(116,10,"$course",0,1,'L');          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }

           


$sql12="SELECT * FROM awards  WHERE username = '$x'"; //selecting all values from database table where username matches the entered username

$query12= mysqli_query($conn,$sql12);//creating a query with the established cvonnection and above resource

if($row112 = mysqli_fetch_array($query12))//reterieving an associative array from the fetched query and further checking whether it is empty or not
{
  
          
           $award=$row112['award'];
           $a1="edit";
           $fun2="myFunction31()";
           $bb1="delete6.php";
           $c1="delete";
           $b5="overlay";

  if(empty($row1)&&empty($row)&&empty($row12)&&empty($row14)&&empty($row15)&&empty($row16)&&empty($row17)&&empty($row2)&&empty($row4)&&empty($row5)&&empty($row3)&&empty($row41)&&!empty($result)&&empty($row51)&&empty($row61)&&empty($row71)&&empty($row81)&&empty($row91)&&empty($row101)&&empty($row111))
          {
            $pdf->Ln(30);
          }
          else
            $pdf->Ln(7);
 if(empty($row111)&&empty($row101)&&empty($row91)&&empty($row81)&&empty($row71)&&empty($row61))
        {
           $pdf->SetFont("times","",16);
           $pdf->SetTextColor(0,0,255);
$pdf->cell(59,10,"Additional Skills",0,0,'L');
    $pdf->cell(100,10,"________________________________________________",0,1,'L');
          $pdf->Ln(6);
        }
                
                 $pdf->SetTextColor(0,0,255);
  $pdf->SetFont("times","",16);
   $pdf->cell(83,10,"Honours And Awards",0,0,'L');
   $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
$pdf->Multicell(116,10,"$award",0,1,'L');          
}

 else{
  $dskill="";
  $a1="Fill in";
           $c1="";
           $bb1="";
            $b5="";
             $fun2="myFunction3()";
  
 }






 $pdf->output('I');

 ?>