<?php

class Header extends CI_model {

    public function __cunstruct()
    {
        parent::__cunstruct();
    }

    public function header_data_parsing()
    {
        // load language(translate) file
        $this->lang->load('gui', $this->session->locale);
        //-------------------------------------------------------

        // load Models for work with database and users details
        $this->load->model('UsersModel');
        //-------------------------------------------------------
        
        // parsing data for header
        $headerData = array(
            'main_title' => $this->lang->line('gui_main_title')
        );
        //-------------------------------------------------------
    }


}