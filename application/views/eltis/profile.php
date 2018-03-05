  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Профіль користувача
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Панель</a></li>
        <li>Нлаштування</li>
        <li class="active">Профіль користувача</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <?php 
                        $user_avatar = array(
                        'src' => base_url().'design/img/user_default.jpg',
                        'alt' => 'User profile picture',
                        'class' => 'profile-user-img img-responsive img-circle'
                        );
                        echo img($user_avatar);
                        ?>
                        
                        <h3 class="profile-username text-center"><?php echo $without_name . $first_name . " ". $second_name; ?></h3>

                        <p class="text-muted text-center">Служба підтримки</p>
                        
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Дата реєстрації</b> <a class="pull-right">01.02.2018</a>
                            </li>
                            <li class="list-group-item">
                              <b>id користувача</b> <a class="pull-right">1</a>
                            </li>
                            <li class="list-group-item">
                              <b>Кількість пристроїв</b> <a class="pull-right">12</a>
                            </li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#details" data-toggle="tab">Деталі</a></li>
                        <li><a href="#activity" data-toggle="tab">Журнал</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="details">
                            <form class="form-horizontal" action="<?php echo base_url();?>settings/profile/" method="post">
                                
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">Ім'я</label>

                                    <div class="col-sm-10">
                                        <input name="firstName" type="text" class="form-control" id="inputFirstName" 
                                        placeholder="<?php echo $first_name;?>" value="<?php echo $first_name;?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputSecondName" class="col-sm-2 control-label">Прізвище</label>

                                    <div class="col-sm-10">
                                        <input name="secondName" type="text" class="form-control" id="inputSecondName" 
                                               placeholder="<?php echo $second_name;?>" value="<?php echo $second_name;?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-2 control-label">телефон</label>

                                    <div class="col-sm-10">
                                        <input name="phoneNo" type="tel" class="form-control" id="inputPhone" 
                                               placeholder="<?php echo $phone;?>" value="<?php echo $phone;?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger" name="update" value="update">Зберегти</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        <div class="tab-pane" id="activity">
                            <h4>В розробці</h4>
                            <?php
                                $array1 = array(
                                    'familiya' => 'tarasov',
                                    'imya' => 'sergey'
                                );
                                print_r($array1);
                                echo "<br>";
                                $array2 = array(
                                    'otchestvo' => 'leonidovich'
                                );
                                print_r($array2);
                                echo "<br>";
                                $array3 = $array1 + $array2;
                                print_r($array3);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->