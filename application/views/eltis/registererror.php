<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
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
  <!-- iCheck -->
  <?php echo link_tag(base_url().'design/css/blue.css');?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url(); ?>"><?php echo img(base_url().'/design/img/Eltis_logo_ua.png');?></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><?php echo lang('gui_sigin_error_header');?></p>
    <div class="callout callout-info">
        <h4><?php echo lang('gui_sign_alert'); ?></h4>
        <p><?php echo lang('gui_sigin_error_message'); ?></p>
    </div>
    <p class="text-center"><a href="<?php echo base_url(); ?>welcome/"><?php echo lang('gui_sign_already_register');?></a></p>
    <p class="text-center"><a href="<?php echo base_url(); ?>welcome/forgot/"><?php echo lang('gui_login_forgot_password');?></a></p>
    <p class="text-center"><a href="<?php echo base_url(); ?>welcome/register/"><?php echo lang('gui_login_create_account');?></a></p>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/design/js/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/design/js/bootstrap.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/design/js/icheck.js"></script>

</body>
</html>
