<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "./master/header.php"; ?>
	<script src="./js/login.js"></script>
	<style type="text/css">
	.error{
		color: red;
	}
	</style>
</head>
<body>
<?php require "./master/navbar.php"; ?>


<?php
		require 'connect.inc.php';
		require 'core.inc.php'; 
			

		if (login()) {
			header('location:profile.php');
		}else{

			include 'login.php';
		}
?>


</body>
</html>