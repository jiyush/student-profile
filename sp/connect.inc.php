<?php 

	$con = mysqli_connect("localhost","root","","sp");
	if ($con) {
		return true;
	}else{
		die();
	}

 ?>