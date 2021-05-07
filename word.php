<?php
$filename="doc.pdf";
header("content-type:application/pdf");;
header('context-description:inline;filename="'.$filename.'"');
header('content-transfer-encoding:binary');
header('accept-range:bytes');
@readfile($filename);







?>

