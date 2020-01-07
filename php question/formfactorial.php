<!DOCTYPE html>
<html>
<head>
	<title>input factorial</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="num">
		<input type="submit" name="Submit" value="Submit">
	</form>
	<?php 
       if(isset($_POST['Submit'])){
       	$input = $_POST['num'];
       	$fact = 1;
       	for ($j=$input; $j >=1 ; $j--) { 
       		$fact = $fact * $j;
       	}
       	echo "<br>"."The factorial of the number ".$input." = ".$fact;
       }
      
	 ?>

</body>
</html>