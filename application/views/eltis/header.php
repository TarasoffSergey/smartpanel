<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Елтіс Техно | IoT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php echo link_tag(base_url().'design/css/bootstrap.css');?>
  <!-- Font Awesome -->
  <?php echo link_tag(base_url().'design/css/font-awesome.css');?>
  <!-- Ionicons -->
  <?php echo link_tag(base_url().'design/css/ionicons.css');?>
  <!-- Theme style -->
  <?php echo link_tag(base_url().'design/css/AdminLTE.css');?>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <?php echo link_tag(base_url().'design/css/skin-blue.css');?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php echo img(base_url().'/design/img/Eltis_logo_ua_bw_small.png');?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo img(base_url().'/design/img/Eltis_logo_ua_bw.png');?></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
                  <?php 
                    $user_avatar = array(
                    'src' => base_url().'design/img/user_default.jpg',
                    'alt' => 'User Image',
                    'class' => 'user-image'
                    );
                        echo img($user_avatar);
                  ?>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                  <?php echo $without_name . $first_name . " ". $second_name; ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                  
                  <?php 
                        $user_avatar = array(
                            'src' => base_url().'design/img/user_default.jpg',
                            'alt' => 'User Image',
                            'class' => 'img-circle'
                        );
                        echo img($user_avatar);
                  ?>
                <p>
                  <?php echo $without_name . $first_name . " ". $second_name; ?>
                  <small>Зареєстрований з Лист. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Читачі</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Продажи</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Друзі</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>settings/profile/" class="btn btn-default btn-flat">Профіль</a>
                </div>
                <div class="pull-right">
                    <a href="<?php base_url()?>/welcome/logout" class="btn btn-default btn-flat">Вийти</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>