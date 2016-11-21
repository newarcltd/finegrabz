<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->has_userdata('ci_userid')){
			redirect(base_url().'home');
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_loginvalidation_check');

		if ($this->form_validation->run() == true)
        {
        	redirect(base_url().'home');
        }

		$this->load->view('login/index');
	}

	public function logout() {
		// unset userdetails from session and redirect to login page
		$this->session->unset_userdata('ci_userid');
		$this->session->unset_userdata('ci_name');

		$this->session->sess_destroy();

		redirect(base_url().'login');
	}

	public function loginvalidation_check($str){
		// get form details (by post method)
		$username=set_value('name');
		$password=set_value('password');

		if($username!="" && $password!=""){
			// query for get user details
			$query=$this->db->query("SELECT * FROM admin_user WHERE username='".$username."' AND status=1 ");
			// get num of rows
			$no_row=$query->num_rows();

			if($no_row==1){
				// get selected row result in array format
				$value=$query->row_array();

				if($value['password']==md5($password)) {
					// save logged in user details to session
					$this->session->set_userdata('ci_userid',$value['userid']);
					$this->session->set_userdata('ci_name',$value['name']);
					return true;
				}
			}
		}		

        $this->form_validation->set_message('loginvalidation_check', 'Username or Password is Incorrect');
        return FALSE;
	}
}
