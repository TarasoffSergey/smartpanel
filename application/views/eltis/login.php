<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{title}</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><?php echo img(base_url().'/design/img/Eltis_logo_ua.png');?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      
      <?php 
      if($this->session->login_error)
      {
          echo '<div class="alert alert-danger alert-dismissible">
			<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>';
          echo lang('gui_login_error');
          echo '</div>';
      }
      ?>
	  
    <p class="login-box-msg">{gui_login_input_your_data}</p>

    <form action="<?php echo base_url();?>welcome/" method="post">
    
      <?php echo form_error('user_email'); ?>
      <div class="form-group has-feedback">
        <input name="user_email" type="email" class="form-control" placeholder="{gui_login_enter_email}" value="<?php echo set_value('user_email'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <?php echo form_error('user_password'); ?>
      <div class="form-group has-feedback">
        <input name="user_password" type="password" class="form-control" placeholder="{gui_login_enter_password}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input name="remember_me" type="checkbox"> {gui_login_remember_me}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{gui_login_login}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- {gui_login_or} -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat disabled"><i class="fa fa-facebook"></i> {gui_login_login_via}
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat disabled"><i class="fa fa-google-plus"></i> {gui_login_login_via}
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">{gui_login_forgot_password}</a><br>
    <a href="<?php echo base_url();?>welcome/register/" class="text-center">{gui_login_create_account}</a><br>

    <!-- Одна кнопка -->
    <div class="row center-block" style="margin-top: 2rem;">
    <div class="col-12 text-center">
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{flag_picture}"> {current_language} <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="?locale=uk"><?php echo img(base_url().'/design/img/flags/Ukraine.png'); ?> Українська</a></li>
        <li><a href="?locale=en"><?php echo img(base_url().'/design/img/flags/United-Kingdom.png'); ?> English</a></li>
        <li><a href="?locale=ru"><?php echo img(base_url().'/design/img/flags/Russia.png'); ?> Русский</a></li>
      </ul>
    </div>
    </div>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/design/js/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/design/js/bootstrap.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/design/js/icheck.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
