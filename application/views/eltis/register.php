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
  
  <!-- Google Recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url(); ?>"><?php echo img(base_url().'/design/img/Eltis_logo_ua.png');?></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><?php echo lang('gui_sigin_header');?></p>

    <form action="<?php echo base_url();?>register/" method="post">
	
        <?php echo form_error('user_email'); ?>
      <div class="form-group has-feedback">
        <input name="user_email" type="email" class="form-control" placeholder="<?php echo lang('gui_login_enter_email');?>" 
        data-toggle="popover" data-placement="top" title="<?php echo lang('gui_sign_alert');?>" data-content="<?php echo lang('gui_sign_message');?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
        <?php echo form_error('user_password'); ?>
      <div class="form-group has-feedback">
        <input name="user_password" type="password" class="form-control" placeholder="<?php echo lang('gui_login_enter_password');?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <?php echo form_error('user_password_repeat'); ?>
      <div class="form-group has-feedback">
        <input name="user_password_repeat" type="password" class="form-control" placeholder="<?php echo lang('gui_sign_repeat_password');?>">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
        <?php echo form_error('g-recaptcha-response'); ?>
        <div class="g-recaptcha" data-sitekey="6Lf2kEcUAAAAAAoWDjRoLMhRs1721Ugjuek_j2Uv" style="margin-bottom: 1rem;"></div>
      
      <div class="row">
		<?php echo form_error('term_agree'); ?>  
        <div class="col-xs-7">
          <div class="checkbox icheck">
            <label>
              <input name="term_agree" type="checkbox"> <?php echo lang('gui_sign_agree');?><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><?php echo lang('gui_sign_therms');?></a>
            </label>
          </div>
        </div>
        
        <!-- /.col -->
        <div class="col-xs-5">
          <button name="register_new_user" type="submit" class="btn btn-primary btn-block btn-flat"><?php echo lang('gui_sign_register');?></button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- <?php echo lang('gui_login_or');?> -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat disabled"><i class="fa fa-facebook"></i> <?php echo lang('gui_login_login_via');?>
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat disabled"><i class="fa fa-google-plus"></i> <?php echo lang('gui_login_login_via');?>
        Google+</a>
    </div>

    <a href="/welcome" class="text-center"><?php echo lang('gui_sign_already_register');?></a>

    <!-- Одна кнопка -->
    <div class="row center-block" style="margin-top: 2rem;">
    <div class="col-12 text-center">
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo img($flag_picture); echo " "; echo $current_language;?> <span class="caret"></span>
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
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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
  
  $(function () {
  $('[data-toggle="popover"]').popover()
	});
</script>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Умови та правила користування сервісом</h3>
      </div>
      <div class="modal-body">
        <h4>Загальні положення.</h4>
        <p>Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.</p>
        <p>Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.</p>
        <h4>Загальні положення.</h4>
        <p>Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.</p>
        <p>Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.</p>
        <h4>Загальні положення.</h4>
        <p>Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.</p>
        <p>Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане. Тут щось буде написано про правила та умови використання цього сервісу. Ви їх приймаєте, або не реєструєтесь. Дякуємо за прочитане.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
