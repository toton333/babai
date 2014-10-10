<?php
 if (isset($_POST['username'], $_POST['password'], $_POST['re_password'], 
     $_POST['firstname'], $_POST['lastname'], $_POST['email'])) {
 	$username = $_POST['username'];
     $password = $_POST['password'];
     $re_password = $_POST['re_password'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];


       if (!empty($username) && !empty($password) && !empty($re_password) && !empty($firstname) && !empty($lastname) && !empty($email) ) {
            echo "ok";
       } else {
            echo "All fields are required.";
       }
       

 }



 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Register</h1>
	<form action="" method="POST">
	

	 Username:
     <p><input type="text" name="username"></p>
     Password:
     <p><input type="password" name="password"></p>
     Re-Password:
     <p><input type="password" name="re_password"></p>
     First Name:
     <p><input type="text" name="firstname"></p>
     Last Name:
     <p><input type="text" name="lastname"></p>
     Email:
     <p><input type="email" name="email"></p>
     <input type="submit" value="Register">



	</form>
	
</body>
</html>