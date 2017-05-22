<?php
session_start();
function logout()
{
  unset($_SESSION['username']);
  header('Location: login.php');
  die();
}
function get_long_lat()
{

  $address=$_POST['address'];
  $town=$_POST['town'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
}
if(array_key_exists('logout',$_POST)){
   logout();
 }
 elseif (array_key_exists('submit',$_POST)) {
   $encodedaddress = 0;
 }

?>
