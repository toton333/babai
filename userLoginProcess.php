<?php
 if (isset($_POST['username'], $_POST['password']) ) {
 	
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	if (!empty($username) && !empty($password)) {
 		
 	} else {
 		echo 'All fields are required.';
 	}
 	
 }
?>