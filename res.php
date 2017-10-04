<?php 
	//require 'connect.inc.php';

	/*function isValid( $ar ){
		foreach ($ar as $key => $value) {
			 if( empty($value) || $value == NULL || strlen(trim($value)) <=3   ){
			 	return false;
			 }
		}

		return true;
	}*/
	

	/*if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['website']) && isset($_POST['subject']) && isset($_POST['message'])  ) {

			$name = $_POST['name'];
			$email = $_POST['email'];
			$website = $_POST['website'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];

			if ( isValid( $ar )) {

				// $res = array_values($_POST);
				// print_r( $_POST);
				// die();
				// $qr_ar = array();
				$stmt = $conn->prepare("INSERT INTO form (name,email,website,subject,message) VALUES (:name,:email,:website,:subject,:message)");
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
			
			}
		
	}else{
	header('location:index.php');
}


	


 ?>
 */

foreach ($_POST as $key => $value) {
	
	echo $key."</br>";
}

 ?>