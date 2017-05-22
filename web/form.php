<?php
require 'htmlheader.php';
?>

<body class="blue">


  <div class="row">
    <div class="col s12 z-depth-4 card-panel signup-form">
      <form action="verify.php" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <!-- <img src="img/space.jpg" alt="" class="circle responsive-img valign profile-image-login"> -->
            <p class="center">Sign up</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="fname" name="fname" type="text">
            <label for="fname" class="center-align">First</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="lname" name="lname" type="text">
            <label for="lname" class="center-align">Last</label>
          </div>
        </div>
        <div class="row margin">
        <div class="input-field col s12">
          <input id="email" name="email"type="email">
          <label for="email">E-Mail</label>
        </div>
      </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input id="username" name="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
        <div class="input-field col s12">
          <input id="password" name="password" type="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row margin center">
        <div class="input-field col s12">
          <input id="submit" type="submit" value="submit">
        </div>
      </div>
      </form>
    </div>
  </div>


</body>
