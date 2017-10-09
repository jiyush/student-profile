<?php
	require 'core.inc.php'; 
	require 'connect.inc.php';
	

	if (isset($_POST['username']) && isset($_POST['password'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = md5($password);

		if (!empty($username) && !empty($password)) {
			
			$query = "SELECT `enrollment` FROM `student` WHERE `enrollment` = '".$username."'  && `password` ='".$password_hash."'  "; 

			$query_run = mysqli_query($con,$query);

			$num_of_rows = mysqli_num_rows($query_run);
			if ($num_of_rows == 0) {
				
				echo "<script> alert('username or password does not match..!'); </script>";
				
			}elseif ($num_of_rows == 1) {
				
				while ($row = mysqli_fetch_assoc($query_run)) {
					
					$user_id = $row['enrollment'];
				}
				$_SESSION['user_id'] = $user_id;
				header('location:profile.php');
			}

		}

	}


 ?>






<!DOCTYPE html>
<head>
	
	<title>Login One</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	



</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">Login Form </h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" id="username" placeholder="Enrollment " name="username" required>
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
	                	<label>
	                  		<input type="checkbox"> Remember me
                		</label>
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="Log in" class="btn btn-info" >
		          		<a href="#" class="text-right pull-right">Forgot password?</a>
		          	</div>
		          </div>
		        </div>
		        
		        
		      </form>
		      <div class="text-center">
		      	<a href="register.php" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>	
		      </div>
		</div>
	</div>
</body>
</html>