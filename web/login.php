<?php

session_start();
require 'htmlheader.php';

 ?>
<body style="background-image:url(./bg.jpg);background-repeat: repeat-n;background-repeat: no-repeat;
background-position: center; ">

  <div id="login-page" class="row">
   <div class="col s12 z-depth-4 card-panel">
     <form class="login-form" action="verify-login.php" method="post">
       <div class="row">
         <div class="input-field col s12 center">
           <img src="img/export.png" alt="" class="circle responsive-img valign profile-image-login">
           <p class="center login-form-text" style="font-size: 40px;">GARAGER</p>
         </div>
       </div>
       <div class="row margin">
         <div class="input-field col s12">
           <i class="material-icons prefix">face</i>
           <input id="username" type="text">
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
       <div class="row">
         <div class="input-field col s12 m12 l12  login-text">
             <input type="checkbox" name="remember-me" id="remember-me" />
             <label for="remember-me">Remember me</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <input type="submit" name="submit" value="submit" class="btn waves-effect waves-light col s12">
         </div>
       </div>
       <div class="row">
         <div class="input-field col s6 m6 l6">
           <p class="margin medium-small"><a href="form.php">Sign Up</a></p>
         </div>
         <div class="input-field col s6 m6 l6">
             <p class="margin right-align medium-small"><a href="">Forgot password</a></p>
         </div>
       </div>

     </form>
   </div>
 </div>
<script type="text/javascript">
</script>
</body>
</html>
