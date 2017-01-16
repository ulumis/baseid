<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BankSAMPAH online | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <!-- <img src="<?php echo base_url();?>assets/dist/img/logos.jpg" alt="LOGO"> -->
        <a href=""><b>Bank</b>SAMPAH online</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg text-bold">Sign in to BankSAMPAH</p>
        <form action="login/cek_login" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div>
              <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
          </div>
        </form>
          <div class="text-center">- OR -</div>
          <div>
            <a href="<?php echo base_url('register'); ?>">
              <button class="btn btn-info btn-block btn-flat">Register</button>
            </a>
          </div>

          <a href="#"><br><br>I forgot my password</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->