<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<?php
$left_menus_class_name = $this->uri->segment(1);
$left_menus_method_name = $this->uri->segment(2);
?>
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
  <link href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="http://cdn.bootcss.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
  <!-- Custom style -->
  <link href="mystyle/style.css" rel="stylesheet" type="text/css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class="skin-blue">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a class="logo"> <b>Jakehu</b>
        Admin
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Left Menu -->
        <ul class="nav navbar-nav">
          <?php $this->acl->show_top_menus(); ?></ul>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <a>
                您好
                <?php echo $this->_admin->username; ?>，当前身份
                <?php echo $this->_admin->name; ?></a>
            </li>
            <li>
              <a href="<?php echo base_url().'../'; ?>" target='_blank'>站点首页</a>
            </li>
            <li>
              <a href="<?php echo backend_url('system/home'); ?>">后台首页</a>
            </li>
            <li>
              <a href="<?php echo backend_url('login/quit'); ?>">退出管理</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p>
              <?php echo $this->_admin->username; ?></p>
            <!-- Status -->
            <a href="<?php echo backend_url('system/home'); ?>
              "> <i class="fa fa-circle text-success"></i>
              Online
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
          <li class="header">
            <?php if (setting('plugin_dev_mode')): ?>
            插件模式已开启
            <?php else: ?>
            菜单栏
            <?php endif; ?></li>
          <?php $this->acl->show_left_menus($left_menus_class_name,$left_menus_method_name); ?></ul>
        <!-- /.sidebar-menu --> </section>
      <!-- /.sidebar --> </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php if($this->uri->rsegment(1) != 'module'): ?>
      <?php $this->load->view(isset($tpl) && $tpl ? $tpl : 'sys_default'); ?>
      <?php else: ?>
      <?php if(!isset($msg)){echo $content;}else{$this->load->view($tpl);} ?>
      <?php endif; ?></div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">Anything you want</div>
      <!-- Default to the left --> <strong>Copyright &copy; 2015
        <a target="_blank" href="http://www.jakehu.me/">Jakehu</a>
        .</strong> 
      All rights reserved.
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.1.3 -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>