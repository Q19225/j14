<!DOCTYPE html>
<html>
<head>
	<title>food</title>
	<style>
		body{
			background: url(saman.jpg);
		}
		form{
			background: grey;
			opacity: 0.5;
			width: 400px;

			padding: 0px 0px 20px 0px;
		}
		#main-text{
			

			padding: 10px;
			/*font-size: 20px;*/
			margin-left: 80px;
			/*margin-top: 100px;*/
		}
		h1{
			color: #800000;
	        margin-top: 180px;
	        margin-left: 90px;
	        padding: 20px 0px 0px 0px ;
		}
		div{
			color: #800000;
			margin-left: 90px;
			margin-top: 20px;
			font-size: 20px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<form action="" method="get">
	<h1 id="heading">Food Menu</h1>
	<div id="main-text">
	<input type="text" name="day" style="padding: 15px;border-radius: 12px;color: #fff;">
	<br><br>
	<input type="Submit" name="submit">
    </div>
    <div>
    	<?php

if (isset($_GET['submit'])) {
	$day=$_GET['day'];
	if ($day=="monday") {
		echo "Pasta";
	}
		elseif ($day=="tuesday") {
			echo "Biryani";
	}
	    elseif ($day=="wednesday") {
			echo "Vegetarian";
	}
	    elseif ($day=="thursday") {
			echo "Sphagetti";
	}
	    elseif ($day=="friday") {
			echo "Rice";
	}
	    elseif ($day=="saturday") {
			echo "Pizza";
	}
	    elseif ($day=="sunday") {
			echo "Malai Boti";
	}
	else{
		echo "Please ENTER carefully";
	}
  }
?>
    </div>
</form>

</body>
</html>