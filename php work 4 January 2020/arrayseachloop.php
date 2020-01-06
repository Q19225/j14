<!DOCTYPE html>
<html>
<head>
	<title>arrays</title>
</head>
<body>
	<?php 
	$colors = ["Red","Green","Yellow","Blue","Orange","Purple"];

	$length = count($colors);
	for ($k=0; $k < $length ; $k++) { 
		echo "$colors[$k]"."<br>";
	}
	 ?>


</body>
</html>