<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <base href="<?php echo base_url().'templates/'.setting('backend_theme').'/'; ?>
  " />
  <meta charset="UTF-8">
  <title><?php echo setting('backend_title');  ?>----Powered By Jakehu</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
  <!-- Theme style -->
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  <!-- Custom style -->
  <link href="mystyle/style.css" rel="stylesheet" type="text/css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <!-- <img src="<?php echo setting('backend_logo');  ?>
      " /> --> <b>Jakehu</b>
      Admin
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">
        <?php echo $this->session->flashdata('error'); ?></p>
      <?php echo form_open('login/do'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="请填写用户名" name="username"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="请填写密码" name="password"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input class="btn btn-primary btn-block btn-flat" type="submit" value="登录" />
        </div>
        <!-- /.col --> </div>
      <?php echo form_close(); ?></div>
    <!-- /.login-box-body --> </div>
  <!-- /.login-box -->

  <!-- jQuery 2.1.3 -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>