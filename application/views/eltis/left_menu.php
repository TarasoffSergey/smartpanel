  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">  
            {user_avatar}
        </div>
        <div class="pull-left info">
            <p>
              {user_name_detail}
            </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="{left_menu_serch}">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{left_menu_title}</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url();?>dashboard/"><i class="fa fa-dashboard"></i> <span>{left_menu_panel}</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-object-ungroup"></i> <span>{left_menu_my_objects}</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                
                {menu_places_items}
                <li><a href="{plase_item_link}"><i class="fa fa-circle-o"></i>{place_item}</a></li>
                {/menu_places_items}

                
                <li>---x---</li>
                <li><a href="#"><i class="fa fa-plus text-yellow"></i>{left_menu_create_new_object}</a></li>
            </ul>
        </li>
        <li><a href="<?php echo base_url(); ?>settings/"><i class="fa fa-cog"></i> <span>{left_menu_settings}</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>