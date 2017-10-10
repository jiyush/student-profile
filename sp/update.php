<?php 
	
	require 'connect.inc.php';
	require 'core.inc.php';

	if (login()) {
		
		$en = getfield('enrollment');
		if (isset($_POST['fname'])) {
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];

			$q = "UPDATE `student` SET `mname` = '".$mname."' , `fname` = '".$fname."' , `lname` = '".$lname."'   WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}

		}
		if (isset($_POST['pass'])) {
			
			$pass = $_POST['pass'];
			$q = "UPDATE `student` SET `password` = '".$pass."'   WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}
		}
		if (isset($_POST['f_prof'])) {
			
			$f_prof = $_POST['f_prof'];
			$q = "UPDATE `student` SET `f_profession` = '".$f_prof."'   WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}
		}
		if (isset($_POST['m_prof'])) {
			
			$m_prof = $_POST['m_prof'];
			$q = "UPDATE `student` SET `m_profession` = '".$m_prof."'   WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}
		}
		if (isset($_POST['email'])) {
			
			$email = $_POST['email'];
			$q = "UPDATE `student` SET `email` = '".$email."'   WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}
		}
		if (isset($_POST['l_street'])) {
			
			$l_street = $_POST['l_street'];
			$l_city = $_POST['l_city'];
			$l_state = $_POST['l_state'];
			$l_pincode = $_POST['l_pincode'];
			$q = "UPDATE `student` SET `l_street` = '".$l_street."' , `l_city` = '".$l_city."' ,`l_state` = '".$l_state."' , `l_pincode` = '".$l_pincode."' WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}
		}
		if (isset($_POST['p_street'])) {
			
			$p_street = $_POST['p_street'];
			$p_city = $_POST['p_city'];
			$p_state = $_POST['p_state'];
			$p_pincode = $_POST['p_pincode'];
			$q = "UPDATE `student` SET `p_street` = '".$p_street."' , `p_city` = '".$p_city."' ,`p_state` = '".$p_state."' , `p_pincode` = '".$p_pincode."' WHERE  `enrollment` = '".$en."'  ";
			$query_run = mysqli_query($con , $q);
			if ($query_run) {
				echo "changed..!";
			}
		}



	}

	

 ?>