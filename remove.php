<?php
// get correct file path
$folder = "image1";
	       $results = scandir('image1');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	
	       	
	       }

// remove file if it exists
if ( file_exists($folder . '/' . $result) ) {
	unlink($folder . '/' . $result);
	header( 'Location: frame_b2.php' ) ;
	
}
?>