<?php
require 'htmlheader.php';
?>

<body style="background-image:url(./bg.jpg);background-repeat: repeat-n;background-repeat: no-repeat;
background-position: center; ">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form action="verify.php" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/export.gif" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text" style="font-size: 30px;">SIGN UP</p>

          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s6">
            <i class="material-icons prefix">face</i>
            <input id="fname" name="fname" type="text">
            <label for="fname" class="center-align">First</label>
          </div>
          <div class="input-field col s6">
            <input id="lname" name="lname" type="text">
            <label for="lname" class="center-align">Last</label>
          </div>
        </div>
        <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email"type="email">
          <label for="email">E-Mail</label>
        </div>
      </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="username" name="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="password" name="password" type="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row margin center">
        <div class="input-field col s12">
          <input type="submit" name="submit" value="submit" class="btn waves-effect waves-light col s12">
        </div>
      </div>
      <div class="row">

      </div>
      </form>
    </div>
  </div>


</body>
