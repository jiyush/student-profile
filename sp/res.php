<?php 
	require 'connect.inc.php';

	
	$qr = array();
print_r($_POST);
	foreach ($_POST as $key => $value) {
			
			array_push($qr," `".strtolower($key)."` = '".strtolower($value)."' ");

	}
	//print_r($qr);
	
	$query = "INSERT INTO `student` SET ". implode(",", $qr);
//echo $query;
		$query_run = mysqli_query($con,$query);

		if ($query_run) {
			header('location:index.php');
		}

	/*	require 'conn.inc.php';
		

		

				// $res = array_values($_POST);
				// print_r( $_POST);
				// die();
				// $qr_ar = array();
				$stmt = $conn->prepare("INSERT INTO `student`  VALUES (:enrollment,:password,:con_password,:fname,:mname,:lname,:father_name,:mother_name,:dob,:blood_group,:catogory,:gender,:contact_num,:contact_num_opt,:email,:p_street,:p_city,:p_state,:p_pincode,:l_street,:l_city,:l_state,:l_pincode,:ssc,:hsc,:guj_per,:guj_merit,:d2d_cgpa,:year_of_admission,:d2d,:branch,:division,:sem,:sem1,:sem2,:sem3,:sem4,:sem5,:sem6,:sem7,:sem8,:cpi,:cgpa,:tfws,:commuting,:hosteler,:jnk,:nss,:ncc,:account_num,:ifsc,:bank_name,:bank_branch,:adhar_num,:election_num,:seeded");
				foreach ($_POST as $k => $val) {
					// print_r($val);
					// print_r("<br>");
					$stmt->bindParam(':'.$k, $_POST[ $k ] );
					// array_push($qr_ar," `".strtolower($k)."` = '".strtolower($val)."' ");
				}
				// $query = "INSERT INTO `form` SET ". implode(",", $qr_ar);
				// die($query);
					// $query_run = mysqli_query($con , $stmt); 
			
				// if ($query_run) {
					// echo "done";
				// }
				// print_r($stmt);
				// exit();
				try {
					$stmt->execute();					
				} catch (Exception $e) {
					echo $e->getmessage();
				}
			
		
		
	
*/

	
 ?>