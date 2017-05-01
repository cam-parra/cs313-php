<?php $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');?>

<div class="row">
  <div class="col s12 center-align grey-text text-lighten-1">
    <h1 class="" style="">
      <?php if($filename === "home") echo "Web Engineering II"?>
      <?php if ($filename === "store") {
        echo "Store";
        # code...
      } ?>
    </h1>
  </div>
</div>
