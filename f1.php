<?php

$folder = "image1";
	       $results = scandir('image1');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {

	       		echo '<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">cancel</a></p>';
	       	}
	       }


	

?>


	



<html>
<body>
	<header><img src= <?php echo $folder . '/' . $result ;?>></header>
	<img src="image1/s.jpg">
	<form method="POST" >
	<input type="text" value= <?php echo $folder . '/' . $result ;?> name= "v">	
	<input type="submit" value="submit" name="submit">
	</form>

	
</body>
</body>
</html>