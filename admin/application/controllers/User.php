<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include ('Common.php');

class User extends Common {

	public function __construct() {
		parent::__construct();

		$this->load->model('User_model','user_model');

		$this->data['baseurl']=base_url();
		$this->upload_filename="";
        $this->base_action="add";
        $this->action_id="";
        $this->page_error="";
	}
	
	public function index() {

		$this->data['user_list']=$this->user_model->get_user_list();

		$this->load->view('user/index',$this->data);
	}

	public function add() {

        $this->data['action_id']=$this->action_id;
        $this->data['page_error']=$this->page_error;
        $this->data['form_data']=array(
            'user_name' => "",
            'user_email' => "",
            'user_phone' => ""
        );

        // form validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('user_phone', 'Phone No', 'trim|required|regex_match[/^[0-9]/]|min_length[8]|max_length[10]');

		$this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

		if ($this->form_validation->run() == true) {

            $action=$this->user_model->add_user_item($this->upload_filename);
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Successfully Saved');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
        	
        	// redirect to manage user page
        	redirect(base_url().'user');
        	die();
        }

		$this->load->view('user/add',$this->data);
	}

    function edit($id=0){
        $this->base_action="edit";
        $id=intval($id);

        if($id!=0){
            $this->data['action_id']=$id;
            $this->data['page_error']=$this->page_error;

            $original_details=$this->user_model->user_item_details($id);
            if(count($original_details)==0){
                // exit if details not found
                redirect(base_url().'user');
            }
            $this->data['form_data']=array(
                'user_name' => $original_details['user_name'],
                'user_email' => $original_details['user_email'],
                'user_phone' => $original_details['user_phone']
            );

            // form validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
            $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('user_phone', 'Phone No', 'trim|required|regex_match[/^[0-9]/]|min_length[8]|max_length[10]');

            $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

            if ($this->form_validation->run() == true) {

               

               $action=$this->user_model->edit_user_item($this->upload_filename,$id);
                if($action==true){
                    $this->session->set_flashdata('success_msg', 'Edited Successfully');
                } else {
                    $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
                }
                
                // redirect to manage user page
                redirect(base_url().'user');
                die();

                end:
            }

            $this->load->view('user/add',$this->data);
        }
        else {
            redirect(base_url().'menu');
        }
    }


}
