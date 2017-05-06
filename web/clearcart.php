<?php

require 'product.php';
session_start();
require 'fheader.php';
require 'fnavbar.php';


 $_SESSION["cart"] = array();

 header("Location: fcart.php");



 ?>
