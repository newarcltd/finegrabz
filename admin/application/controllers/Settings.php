<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include ('Common.php');

class Settings extends Common {

	public function __construct() {
		parent::__construct();

		$this->load->model('Settings_model','settings_model');

		$this->data['baseurl']=base_url();
	}
	
	public function profile() {

        $this->data['save_action']=0;
		$profile=$this->settings_model->get_profile_detail($this->loggedin_userid);
        if(count($profile)==0){
            $this->data['form_data']=array(
                'name' => "",
                'username' => "",
                'email' => ""
            );
        } 
        else {
            $this->data['form_data']=array(
                'name' => $profile['name'],
                'username' => $profile['username'],
                'email' => $profile['email']
            );
        }

        // form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

        if(count($_POST)>1){
            $this->data['save_action']=1;
        }

        if ($this->form_validation->run() == true) {  

            $action=$this->settings_model->update_profile_detail($this->loggedin_userid);
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Successfully Saved');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
            
            // redirect to manage user page
            redirect(base_url().'settings/profile');
            die();
        }

		$this->load->view('settings/profile',$this->data);
	}

    public function password() {

        $this->data['header_title']="Password";

        // form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|callback_validate_oldpassword');
        $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');

        $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

        if ($this->form_validation->run() == true) {

            $action=$this->settings_model->update_password_detail($this->loggedin_userid);
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Password Successfully Changed.');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
            
            // redirect to manage user page
            redirect(base_url().'settings/password');
            die();
        }

        $this->load->view('settings/password',$this->data);
    }

    function validate_oldpassword($str){
        // get form details (by post method)
        $old_password=set_value('old_password');

        if($old_password!=""){
            $query=$this->db->query("SELECT * FROM admin_user WHERE userid='".$this->loggedin_userid."' AND status=1 ");
            $no_row=$query->num_rows();

            if($no_row==1){
                // get selected row result in array format
                $value=$query->row_array();

                if($value['password']==md5($old_password)) {
                    // return true if password = entered password
                    return true;
                }
            }
        }       

        $this->form_validation->set_message('validate_oldpassword', 'Please enter correct Old Password');
        return FALSE;
    }

}
