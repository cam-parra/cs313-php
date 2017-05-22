<?php

require 'postgres.php';
// I found this on this blog  just incase someone is wondering
//from http://www.the-art-of-web.com/php/blowfish-crypt/


 $firstname = $_POST['fname'];
 $lastname = $_POST['lname'];
 $email = $_POST['email'];
 $username = $_POST['username'];

 $hashed_potatoes = better_crypt($_POST['password'], 10);
 //echo "<h1>$hashed_potatoes <br /> $firstname $lastname <br /> $email</h1>";
 $query = "INSERT INTO public.user(username, first_name ,last_name, passw ,email) VALUES('$username','$firstname', '$lastname', '$hashed_potatoes', '$email')";

 $result = $db->query($query);

 if (!$result) {

   print_r($db->errorInfo());
   exit();

 }
 else {
   header("Location: login.php");
 }

 //echo "<h1>$hashed_potatoes <br /> $firstname $lastname <br /> $email</h1>";





?>
