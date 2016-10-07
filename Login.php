<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <title>Login- Survey</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=no">
        <link type="text/css" rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
            html { background-color: #FF7043 }
        </style>
    </head>
    <body>
        <div id="animation_hide">
            <div id="animation">
                <span>
                                </span>
                <div id="animation_1" class="animation"></div>
                <div id="animation_2" class="animation"></div>
                <div id="animation_3" class="animation"></div>
                <div id="animation_4" class="animation"></div>
                <div id="animation_5" class="animation"></div>
                <div id="animation_6" class="animation"></div>
                <div id="animation_7" class="animation"></div>
                <div id="animation_8" class="animation"></div>
            </div>
        </div>
        <div class="row login">
          <div class="row">
            <div class="col l6"> <a href="#">
              <h1>Login</h1>
            </a> </div>
          </div>
          <div class="col center">
            <div class="entry_form z-depth-4" METHOD="POST" >
<form action="<?php echo $loginFormAction;?>" METHOD="POST" autocomplete="off" POSThod="POST">
<div class="input-field"> <i class="mdi-action-account-circle prefix"></i>
          <input type="email" id="email" name="email" maxlength="30" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field"> <i class="mdi-communication-vpn-key prefix"></i>
          <input type="password" id="password" name="password" maxlength="30" required>
          <label for="password">Password</label>
        </div>
        <div class="center-btn">
          <button type="submit" class="waves-effect waves-light btn" id="enter"><i class="mdi-content-send right"></i>Login</button>
        <a class="waves-effect waves-light btn" id="registration"  href="Registration.php"><i class="mdi-social-person-add left"></i>Register for Free</a> </div>
        </form>
          </div>
        </div>
        <div class="row">
          <div class="col l5 m8 s12">
            <p class="flow-text"><b>No account yet?</b>Sign up completely for <b>FREE</b></p>
          </div>
        </div>
        </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

                <script type="text/javascript" src="js/materialize.min.js"></script>

           


            <script type="text/javascript">
                $('#animation_hide').hide();                $( document ).ready(function() {
                                });
            </script>

    </body>
    <?php
mysql_free_result($Login);
?>
</html>