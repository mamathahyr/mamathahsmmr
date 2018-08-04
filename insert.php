<?php


	include 'conn.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password =$_POST['password'];
	$password =$_POST['role'];
	$password =password_hash($password, PASSWORD_BCRYPT);

	
	$query="INSERT INTO `register`(`name`,`email`, `password`,`role`) VALUES ('$name','$email','$password','user')";
	$result=mysqli_query($con,$query);
	echo $query; 
	if ($result) {
		header("location:test.html");
	}
	else{
		echo "Error";
	}
?>