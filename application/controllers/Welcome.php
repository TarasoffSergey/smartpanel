<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// спробуємо отримати локаль браузера відвідувача та зберегти її у сесії
		// в змінній "locale"
		if (!($this->session->has_userdata('locale'))) {
			$this->session->set_userdata('locale', substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

		}
		
        $this->load->library('setlanguage');
        $this->load->library('form_validation');
        
		
	}	

    /*
     * Форма входу. Перевірка заповнення та авторизація користувача.
     */
	public function index()
	{
            
    if($this->session->logged == true)
        {
            redirect('/dashboard/');
        }
        
	// якщо отримали дінні для зміни мови, змінюємо її та заносимо в сесію--
	if (!is_null($this->input->get('locale'))) {
             $this->session->set_userdata('locale', $this->input->get('locale'));

	}
	//---------------------------------------------------

        // встановлюємо зображення прапору та назви поточної мови
        $viewdata['flag_picture'] = $this->setlanguage->set_flag_picture();
	$viewdata['current_language'] = $this->setlanguage->set_current_language();
        //-------------------------------------------------------

        // завантажеємо файли перекладу
        $this->lang->load('gui', $this->session->locale);
        //-------------------------------------------------------
		
	//встановлюємо title згідно з перекалодом
	$viewdata['title'] = $this->lang->line('gui_login_title');
	//-------------------------------------------------------
		
		
	$this->form_validation->set_rules('user_email', 'lang:gui_login_email_field', 'required|valid_email');
	$this->form_validation->set_rules('user_password', 'lang:gui_login_password_field', 'required');
	if ($this->form_validation->run() == TRUE)
	{
            $this->load->model('UsersModel');
            if($this->UsersModel->check_auth() == TRUE)
            {
                redirect(base_url().'dashboard/');
                
            }
            else 
            {
                $this->session->set_flashdata('login_error', 'true');
                redirect(base_url());
            }
	}


	// заватнажуємо види з динамічними даними
	$this->load->view('eltis/login', $viewdata);
	}

	public function register()
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

        // завантажеємо файли перекладу
        $this->lang->load('gui', $this->session->locale);
        //-------------------------------------------------------

	//встановлюємо title згідно з перекалодом
	$viewdata['title'] = $this->lang->line('gui_sigin_title');
	//-------------------------------------------------------
		
		
	$this->form_validation->set_rules('user_email', 'lang:gui_login_email_field', 'required|valid_email');
	$this->form_validation->set_rules('user_password', 'lang:gui_login_password_field', 'required|min_length[6]');
	$this->form_validation->set_rules('user_password_repeat', 'lang:gui_login_password_repeat_field', 'required|matches[user_password]');
	$this->form_validation->set_rules('term_agree', 'lang:gui_login_terms_agree_field', 'required',
	array('required' => $this->lang->line('gui_login_terms_agree_field')));
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
        
	if ($this->form_validation->run() == TRUE)
	{	
            $this->load->model('UsersModel');
            if($this->UsersModel->check_email() == true)
            {
                $this->session->set_flashdata('email_already_exist', 'YES');
		redirect('/welcome/register');
            }
            else
            {
                $this->UsersModel->create_user();
            }
	}



        if($this->session->email_already_exist == 'YES')
        {
            $viewdata['title'] = $this->lang->line('gui_sigin_error_header');
            $this->load->view('eltis/registererror', $viewdata);
        }
        elseif ($this->session->registered == 'YES') 
        {
            $viewdata['title'] = $this->lang->line('gui_sigin_ok_header');
            $this->load->view('eltis/registerok', $viewdata);
        }
        else
        {
            // заватнажуємо види з динамічними даними
            $this->load->view('eltis/register', $viewdata);
        }
	}
        
        function validate_captcha() {
        $captcha = $this->input->post('g-recaptcha-response');
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf2kEcUAAAAAAgvUHf4azVHRODTO85BeQTtNE-p
&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

	public function forgot()
	{
		echo "Відновлення паролю";
	}

        
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
        
}
