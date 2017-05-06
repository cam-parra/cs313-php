<html>
<?php $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');?>
<?php require 'htmlheader.php' ?>
<body>

  <?php require("navbar.php");?>


  <div class="container">
    <?php require('findOS.php'); ?>
    <?php require('title.php') ?>
    <?php require('slider.php') ?>
    <?php require 'aboutme.php'; ?>


  </div>


  <?php require('footer.php'); ?>


</body>




</html>
