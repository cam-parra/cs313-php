<?php

require 'product.php';
session_start();
require 'fheader.php';
require 'fnavbar.php';
require 'fbg.php';

echo "<body class=\"align-center\"><br /><br /><br />";
echo "<h1>Thank you!</h1>";
echo "<br /> <h2>Your order will be sent to:</h2>";
echo "<ul style=\"list-style-type:none\"><li>",$_GET['firstname'],"&ensp;",$_GET['lastname'],
"</li><li>", $_GET['street']
,"</li><li>",$_GET['town'],",&ensp;",$_GET['state'] ,"&ensp;", $_GET['zip'],
"</li><li>",$_GET['email'],"</li><li>", $_GET['phone'],
"</li></ul>";

echo "</body>";



 ?>
