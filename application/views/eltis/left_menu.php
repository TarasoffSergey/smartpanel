  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php 
            $user_avatar = array(
            'src' => base_url().'design/img/user_default.jpg',
            'alt' => 'User Image',
            'class' => 'img-circle'
            );
            echo img($user_avatar);
          ?>  
          
        </div>
        <div class="pull-left info">
            <p>
                <?php echo $without_name . $first_name . " ". $second_name; ?>
            </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Пошук...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">МЕНЮ</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url();?>dashboard/"><i class="fa fa-dashboard"></i> <span>Панель</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-object-ungroup"></i> <span>Мої об'єкти</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <!--
                <li><a href="#"><i class="fa fa-circle-o"></i>Балкон 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Балкон 2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Кухня</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Дитяча</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Спальня</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Коридор</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Вулиця</a></li>
                -->
            </ul>
        </li>
        <li><a href="<?php echo base_url(); ?>settings/"><i class="fa fa-cog"></i> <span>Налаштування</span></a></li>
        <li class="header">АДМІНІСТРУВАННЯ</li>
        <li><a href="#"><i class="fa fa-users"></i> <span>Користувачі</span></a></li>
        <li><a href="#"><i class="fa fa-users"></i> <span>Користувачі</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>