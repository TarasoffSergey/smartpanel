<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setlanguage {

	public function __construct()
	{
		$this->CI =& get_instance();
	}


	public function set_flag_picture()
	{
		$this->CI->load->library('session');
		if ($this->CI->session->locale == 'en') {
			return base_url().'design/img/flags/United-Kingdom.png';
		}
		elseif ($this->CI->session->locale == 'ru') {
			return base_url().'design/img/flags/Russia.png';
		}
		else {
			return base_url().'design/img/flags/Ukraine.png';
		}
	
	}


	public function set_current_language ()
	{
		$this->CI->load->library('session');
		if ($this->CI->session->locale == 'en') {
			$this->CI->config->set_item('language', 'en');
			return 'English';
		}
		elseif ($this->CI->session->locale == 'ru') {
			$this->CI->config->set_item('language', 'ru');
			return 'Русский';
		}
		else {
			$this->CI->config->set_item('language', 'uk');
			return 'Українська';
		}

	} 
}
