<?php
  require 'product.php';
  session_start();
  require 'fheader.php';
  require 'fnavbar.php';

  $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';



  if (!isset($_SESSION["cart"])) {

    $_SESSION["cart"] = array();
  }
  if($_GET["id"] != 0 and !$pageWasRefreshed) {
    array_push($_SESSION["cart"], $_GET["id"]);
  }


  $first = "<div class=\"ink-grid\">\n<div class=\"column-group align-center\">\n<br />\n<h1>Your Cart</h1>\n
  <br>\n<div class=\"column-group\"><table class=\"ink-table alternating hover bordered\">
  <thead><tr><th class=\"align-left\">Product</th><th class=\"align-left\">Price</th></tr></thead>";
  echo $first;
  $myloc = $_SESSION["items"];

  $lenproarr = count($_SESSION["cart"]);
  $sum = 0.00;
  for ($i=0; $i < $lenproarr; $i++) {

      echo $myloc[(int)$_SESSION["cart"][$i]-1]->print_cart($i), "\n";
      $sum += $myloc[(int)$_SESSION["cart"][$i]-1]->price;
  }
  $total = "<tr class=\"orange\"><td>Total</td><td class=\"align-right\">";
  $last="<tr><td><button class=\"ink-button push-right red\"><a href=\"clearcart.php\">clear cart</a></button></td>
  <td><button class=\"ink-button push-right green\"><a href=\"fform.php\">check out</a></button></td></tr></table></div>\n</div>\n</div>";
  echo $total,"\$&ensp;",number_format($sum, 2),"</td></tr>",$last;

  //var_dump($_SESSION["items"]);
  //var_dump($_SESSION["cart"]);



 ?>
