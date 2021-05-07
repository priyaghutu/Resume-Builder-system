<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>
 
<form action="fileupload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
<a href='frame_b1.php'>save</a>
</form>
<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "image1/" . $_FILES["file"]["name"];
 $filename=$_FILES["file"]["tmp_name"];
if(move_uploaded_file($filename, $filepath)) 
{
echo "<img src= $filepath>";
//header( 'Location: page1.php' ) ;
$folder = "image1";
	       $results = scandir('image1');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo $folder . '/' . $result;
	       		$img=$folder . '/' . $result;
	       		echo $img;

	       		echo '<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">cancel</a></p>';
	       	}
	       }

}
	else 

		echo "Error !!";
}	

?>
 
</body>
</html>