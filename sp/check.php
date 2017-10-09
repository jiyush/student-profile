<?php 
	 
	 require 'connect.inc.php';

	$en  = $_POST['enrollment'];

	$query  = "SELECT `enrollment` FROM `student` WHERE `enrollment`  =  '".$en."'   ";
	$query_run  = mysqli_query($con,$query);
	$num_of_rows = mysqli_num_rows($query_run);
	if ($num_of_rows == 1) {
		echo "yes";
	}else {
		echo "no";
	}
 ?>