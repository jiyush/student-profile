<?php

	
ob_start();
session_start();

@$http_referer = $_SERVER['HTTP_REFERER'];

function login(){

	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		
		return true;
	}else {
		
		return false;
	}
 }

 function getfield($field){
 	global $con;
 	$query = "SELECT `$field` FROM `student` WHERE `enrollment` = '".$_SESSION['user_id']."' ";

 	$query_run = mysqli_query($con,$query);
 	if ($query_run) {
 		
 		while ($row = mysqli_fetch_assoc($query_run)) {
 				
 				$result = $row[$field];
 		}
 		return $result;
 	}

 }

 ?>
