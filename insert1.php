<?php


	include 'conn.php';
	$email = $_POST['email'];
	$password =$_POST['password'];
	$password =password_hash($password, PASSWORD_BCRYPT);

	
	$query="INSERT INTO `register`(`email`, `password`) VALUES ('$email','$password')";
	$result=mysqli_query($con,$query);
	echo $query; 
	if ($result) {
		header("location:test1.html");
	}
	else{
		echo "Error";
	}
?>