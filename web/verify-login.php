<?php
//--this will hook us up to the DB--//

require 'postgres.php';
session_start();
//--get the user input--//

$username = $_POST['username'];
$unhashed_brownies = $_POST['password'];

//--these will make our query--//

$un_query = 'SELECT * FROM public.user WHERE username = :username';
$prep = $db->prepare($un_query);
$prep->bindParam(':username', $username, PDO::PARAM_STR, 12);
$prep->execute();

//--this will grab our result--//
$results =  $prep->fetchColumn(4);


if(password_verify($unhashed_brownies, $results)) {
    # print_r("it worked");
    //
    $_SESSION['username'] = $username;
    header('Location: map.php');

} else {


  echo "<p>User or Password DONT EXISt</p>";

  // echo gettype($unhashed_brownies), "\t$unhashed_brownies\n";
  // echo gettype($hashed_brownies), "\t$hashed_brownies\n";
  // echo gettype($results), "$results\n";


}






?>
