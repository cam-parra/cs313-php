<div class="ink-grid">
<div class="column-group align-center">
  <br>
  <h1>[<?php echo "-|***|-"; ?>] Store</h1>
</div>
  <?php
  require 'product.php';
  require 'fbg.php';
  session_start();



  $proarr = array("Blue Shirt", "White Shirt", "Red Shirt", "Yellow Shirt", "Green Shirt", "Pink Shirt", "Orange Shirt", "Teal Shirt",
  "Black Shirt", "Grey Shirt", "Dolphin Shirt", "H B Shirt");
  $urlname = array("blue.jpg", "white.jpg", "red.jpg", "yellow.jpg", "green.jpg", "pink.jpg", "orange.jpg", "teal.jpg",
   "black.jpg", "grey.jpg", "dolphin.jpg", "honeybadger.jpg");
  $pricearr =array(10.99, 5.99, 8.99, 7.99, 8.99, 11.99, 34.99, 67.99, 98.99, 1.89, 30.89, 90.99);
  $lenproarr = count($proarr);
  //echo $lenproarr;
  $assignedproducts = [];

  for ($i=0; $i < $lenproarr; $i++) {
      $temp = new Product();
      $temp->setPname($proarr[$i]);
      $temp->setIname($urlname[$i]);
      $temp->setPrice($pricearr[$i]);
      $assignedproducts[] = $temp;
  }

  $lenofa = count($assignedproducts);

  echo "<div class=\"column-group horizontal-gutters\">";
  for ($n=0; $n < $lenofa ; $n++) {

    if ($n % 3 == 0 && $n != 0) {
      echo "</div><div class=\"column-group horizontal-gutters\">";
    }
    echo $assignedproducts[$n]->display($n+1);

  }

  $_SESSION["items"] = $assignedproducts;




  ?>



</div>
