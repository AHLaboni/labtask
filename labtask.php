<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$no = $_POST['no'];
		$address = $_POST['address'];
		$country = $_POST['country'];

		if (empty($fname) or empty($lname)or empty($lname)or empty($lname)
			or empty($email)or empty($no)or empty($address)or empty($country)){
			echo "Please fill up the form properly";
		}
		
		else{
			echo "Login Successful";
		}
		
	}
		else {

		echo "Request Rejected";
	}

	

?>