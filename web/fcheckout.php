<?php
  session_start();
  $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';



  if (!isset($_SESSION["remove"])) {
      $_SESSION["remove"] = array();
  }
  //$_GET["id"] !=0 and
  if ( !$pageWasRefreshed) {
      array_push($_SESSION["remove"], $_GET["id"]);
  }

  //$lenofsess = count($_SESSION['remove']);
  //$myloc = $_SESSION['cart'];
  foreach ($_SESSION['remove'] as $key) {
    unset($_SESSION['cart'][$key]);
    $_SESSION['remove'] = array();

  }
  for ($i=0; $i < $lenofsess; $i++) {
    //  unset($_SESSION['cart'][$_SESSION['remove'][$i]]);
  }

header('Location: fcart.php');
