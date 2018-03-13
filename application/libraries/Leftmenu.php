<?php

class LeftMenu extends CI_model {

    public function __construct()
    {
        parent::__construct();
    }

    public function left_menu_data_parsing()
    {
        // load language(translate) file
        $this->lang->load('gui', $this->session->locale);
        //-------------------------------------------------------

        $this->load->model('UsersModel');
        
        // left menu data for parsing
        $leftMenuData = array(
            'user_avatar' => '<img src="'. base_url().'design/img/user_default.jpg" 
            alt="User Image" class="img-circle" />',
            
            'menu_places_items' => array(
                array('place_item' => 'place1', 'plase_item_link' => base_url().'dashboard/places/1/'),
                array('place_item' => 'place2'),
                array('place_item' => 'place3')
            ),
            'left_menu_create_new_object' => $this->lang->line('left_menu_create_new_object'),
            'left_menu_title' => $this->lang->line('left_menu_title'),
            'left_menu_settings' => $this->lang->line('left_menu_settings'),
            'left_menu_panel' => $this->lang->line('left_menu_panel'),
            'left_menu_my_objects' => $this->lang->line('left_menu_my_objects'),
            'left_menu_serch' => $this->lang->line('left_menu_serch'),
            'user_name_detail' => $this->UsersModel->get_user_name_detail()

        );
        //---------------------------

        return $leftMenuData;
    }
}