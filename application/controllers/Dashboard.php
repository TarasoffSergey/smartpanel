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
            
            // отримаємо данні про користувача та передаємо їх виду --------
            $this->load->model('UsersModel');
            $viewdata['without_name'] = NULL;
            $user_detail = $this->UsersModel->get_user_details_short();

            if($user_detail->firstname == "" and $user_detail->secondname == "")
            {
                $viewdata['without_name'] = $user_detail->email;
            }

            $viewdata['first_name'] = $user_detail->firstname;
            $viewdata['second_name'] = $user_detail->secondname;
            
            if ($this->input->get('add') == 'true') {
                
                $fields = array
                        (
                    'device_id' => array(
                        'type' => 'INT',
                        'constraint' => 10,
                        'unsigned' => TRUE
                    ),
                    'data_date' => array(
                        'type' => 'DATETIME'
                    ),
                    'data_values' => array(
                        'type' => 'JSON'
                    )
                        );
                
                $this->load->database();
                $this->load->dbforge();
                $this->dbforge->add_field($fields);
                
                $this->dbforge->create_table($this->session->user_id.'_users_devices', TRUE);
                
                echo "add";
                
            }
            
            $this->load->view('eltis/header', $viewdata);
            $this->load->view('eltis/left_menu', $viewdata);
            $this->load->view('eltis/dashboard', $viewdata);
            $this->load->view('eltis/footer');
	}
}