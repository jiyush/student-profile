<?php
	
	

	if (isset($_POST['username']) && isset($_POST['password'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		if (!empty($username) && !empty($password)) {
			
			$query = "SELECT `enrollment` FROM `student` WHERE `enrollment` = '".$username."'  && `password` ='".$password."'  "; 

			$query_run = mysqli_query($con,$query);

			$num_of_rows = mysqli_num_rows($query_run);
			if ($num_of_rows == 0) {
				
				echo "<script> alert('Username or Password does not match..!'); </script>";
				
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


<div class="container" ng-app="myapp" ng-controller="LoginController">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
	
		<div class="jumbotron" style="margin-top:150px;">
			<form method="post" name="LoginForm" action="#">
			<div class="form-group">

				<input 	type="number" 	
						name="username" 
						class="form-control" 
						placeholder="Enrollment"
						ng-model="user.username"
						ng-required="true"
						ng-minlength="12"
						ng-maxlength="12"
				>
				<span class="error" ng-show="LoginForm.username.$invalid && LoginForm.username.$touched">
			      	<span ng-show="LoginForm.username.$error.required">Enrollment is Required..!</span>
			      	<span ng-show="LoginForm.username.$error.minlength">Enrollment Must be 12 Digit..!</span>
			      	<span ng-show="LoginForm.username.$error.maxlength">Enrollment Must be 12 Digit..!</span>
				</span>
			</div>
			<div class="form-group">

				<input 	type="password" 
						name="password" 
						class="form-control" 
						placeholder="Password"
						ng-model="user.password"
						ng-required="true"
						ng-minlength="1"
						ng-maxlength="16"
				>
				<span class="error" ng-show="LoginForm.password.$invalid && LoginForm.password.$touched">
			      	<span ng-show="LoginForm.password.$error.required">Password is Required..!</span>
			      	<span ng-show="LoginForm.password.$error.minlength">Password Must be 8 to 16 Character..!</span>
			      	<span ng-show="LoginForm.password.$error.maxlength">Password Must be 8 to 16 Character..!</span>
				</span>
			</div>
			<div class="checkbox">
			<label>
				<input type="checkbox">
				Remenber Me.!
			</label>
			</div>
			<button type="submit" 
					class="btn btn-primary form-control"

			>Login</button>
				
			</form>
		</div>
	</div>
	<div class="col-lg-4"></div>
</div>