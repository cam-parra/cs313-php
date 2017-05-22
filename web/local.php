<?php
 //-- so our hacker friends wont get our information --//
if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:mystuff@localhost:5432/testdb";
}

function better_crypt($input, $rounds = 10)
 {
   $crypt_options = array(
     'cost' => $rounds
   );
   return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
 }
?>
