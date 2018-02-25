<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
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
            // якщо отримали дінні для зміни мови, змінюємо її та заносимо в сесію--
            if (!is_null($this->input->get('locale'))) {
                 $this->session->set_userdata('locale', $this->input->get('locale'));

            }
            //---------------------------------------------------

            // встановлюємо зображення прапору та назви поточної мови
            $viewdata['flag_picture'] = $this->setlanguage->set_flag_picture();
            $viewdata['current_language'] = $this->setlanguage->set_current_language();
            //-------------------------------------------------------    
            
            
            
            $this->load->view('eltis/header');
            $this->load->view('eltis/left_menu');
            $this->load->view('eltis/dashboard', $viewdata);
            $this->load->view('eltis/footer');
	}
}