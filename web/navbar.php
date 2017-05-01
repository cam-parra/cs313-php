<?php $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');?>
<nav>
  <div class="nav-wrapper black lighten-2">
    <a href="" class="brand-logo left">
      <i class="large material-icons" style="font-size: 200%;">
        <?php if ($filename === "home") {
          echo "vpn_lock";
        }
        elseif ($filename === "store") {
          echo "filter_hdr";
        }
        ?>

      </i>
      <?php if ($filename === "home") {
        echo "Cam Parra";
      }
      elseif ($filename === "store") {
        echo "SHIRTS N' STUFF";
      }
       ?>
    </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li class="<?php if($filename === "home") echo "teal lighten-2"?>">
        <a href="home.php"><i class="large material-icons right" style="font-size: 200%;">account_circle</i>
          account
        </a>
      </li>
        <li class="<?php if($filename === "about-us") echo "teal lighten-2"?>">
          <a href="about-us.php"><i class="large material-icons right" style="font-size: 200%;">shopping_cart</i>
            shopping cart
          </a>
        </li>
    </ul>
  </div>
</nav>
