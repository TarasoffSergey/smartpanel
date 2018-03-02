<?php

class UsersModel extends CI_model {
	
	public function __construct ()
	{
		parent::__construct();
	}
	
	
	/*
	 * перевіряємо, чи існує вже введений логін.
	 */
	public function check_email()
	{
                $user_email = $this->input->post('user_email');
		$this->load->database();
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('email', $user_email);
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			return true;	// існує
		}
		else
		{
			return false;	// не існує
		}
		
	}
        
        public function create_user()
        {
            $this->load->database();
            $data = array
                    (
                'email'     => $this->input->post('user_email'),
                'password'  => md5($this->input->post('user_password')),
                'created_date' => date('Y-m-d-H-i-s')
                    );
            $this->db->insert('users', $data);
            $this->session->set_flashdata('registered', 'YES');
            redirect('/welcome/register/', "refresh");
            
        }
        
        /*
         * Функція авторизації користувача
         */
        public function check_auth()
        {
            $this->load->database();
            $username = $this->input->post('user_email');
            $password = md5($this->input->post('user_password'));
            
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('email' => $username, 'password' => $password));
            $query = $this->db->get();
            
            $user = $query->row();
            
            // якщо користувач існує:
            if($query->num_rows() == 1)
            {
                $this->session->set_userdata('user_id', $user->user_id);
                $this->session->set_userdata('firstname', $user->firstname );
                $this->session->set_userdata('logged', 'true');
                return TRUE;
            }
            else 
            {
                return FALSE;
            }
        }
        
        
        /*
         * Функція для отримання коротких свідчень про користувача
         */
        public function get_user_details_short()
        {
            $this->load->database();
            $this->db->select('firstname, secondname, email');
            $this->db->from('users');
            $this->db->where('user_id', $this->session->user_id);
            
            $query = $this->db->get();
            
            $user_details = $query->row();
            
            return $user_details;
        }
        
        
        /*
         * Функція для отримання повних свідчень про користувача
         */
	public function get_user_details()
        {
            $this->load->database();
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $this->session->user_id);
            
            $query = $this->db->get();
            
            $user_details = $query->row();
            
            return $user_details;
        }




        /*
         * Функція для оновлення даних користувача
         */
        public function update_user_details()
        {
            $this->load->database();
            
            $this->db->set('firstname', $this->input->post('firstName'));
            $this->db->set('secondname', $this->input->post('secondName'));
            $this->db->set('phone', $this->input->post('phoneNo'));
            
            $this->db->where('user_id', $this->session->user_id);
            $this->db->update('users');
            return;
        }
}
