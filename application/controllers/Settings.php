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
        
        // якщо отримали дані з форми зміни даних про користувача, змінюємо їх -----
        if($this->input->post('update') != NULL)
        {
            $this->load->model('UsersModel');
            $this->UsersModel->update_user_details();
            redirect(base_url().'settings/profile/');
        }
        //--------------------------------------------------------------------------
        
        // отримаємо данні про користувача та передаємо їх виду --------
        $this->load->model('UsersModel');
        $viewdata['without_name'] = NULL;
        $user_detail = $this->UsersModel->get_user_details();

        if($user_detail->firstname == "" and $user_detail->secondname == "")
        {
            $viewdata['without_name'] = $user_detail->email;
        }
        
        $viewdata['first_name'] = $user_detail->firstname;
        $viewdata['second_name'] = $user_detail->secondname;
        $viewdata['phone'] = $user_detail->phone;
        
        
        //--------------------------------------------------------------
        
        
        $this->load->view('eltis/header', $viewdata);
        $this->load->view('eltis/left_menu', $viewdata);
        $this->load->view('eltis/profile', $viewdata);
        $this->load->view('eltis/footer');
    }
    
}
