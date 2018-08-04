<?php


   include 'conn.php';
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query="SELECT password FROM `register` WHERE `email`='$email' AND `role`='user'";
   
   
   
   $result=mysqli_query($con,$query);
   $row=mysqli_fetch_row($result);
      $user=$row[0];
      if(password_verify($password, $user)){
         echo "success";
         //header("location: test.html");
      }
   else{
      $message="not right password";
         echo "fail";
         // header("location: login.html");
      
   }
      
      
?>