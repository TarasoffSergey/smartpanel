<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        if($this->session->logged != true)
        {
            redirect(base_url());
        }
        
        $this->load->library('setlanguage');
    }
    
    public function index()
    {
        echo "This is settings";
    }

    

    public function profile()
    {
        // якщо отримали дінні для зміни мови, змінюємо її та заносимо в сесію--
        if (!is_null($this->input->get('locale'))) {
            $this->session->set_userdata('locale', $this->input->get('locale'));

        }
        //---------------------------------------------------

        // встановлюємо зображення прапору та назви поточної мови
        $viewdata['flag_picture'] = $this->setlanguage->set_flag_picture();
        $viewdata['current_language'] = $this->setlanguage->set_current_language();
        //-------------------------------------------------------
        
        // отримаємо данні про користувача та передаємо їх виду --------
        $this->load->model('UsersModel');
        $user_detail_short = $this->UsersModel->get_user_details_short();

        if($user_detail_short->firstname == "" and $user_detail_short->secondname == "")
        {
            $viewdata['without_name'] = $user_detail_short->email;
        }
        
        $viewdata['first_name'] = $user_detail_short->firstname;
        $viewdata['second_name'] = $user_detail_short->secondname;
        
        //--------------------------------------------------------------
        
        
        $this->load->view('eltis/header');
        $this->load->view('eltis/left_menu');
        $this->load->view('eltis/profile', $viewdata);
        $this->load->view('eltis/footer');
    }
    
}
