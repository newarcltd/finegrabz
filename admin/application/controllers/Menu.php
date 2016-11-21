<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include ('Common.php');

class Menu extends Common {

	public function __construct() {
		parent::__construct();

		$this->load->model('Menu_modal','menu_modal');

		$this->data['baseurl']=base_url();
		$this->upload_filename="";
        $this->base_action="add";
        $this->action_id="";
        $this->page_error="";
	}
	
	public function index() {

		$this->data['menu_list']=$this->menu_modal->get_menu_list();

		$this->load->view('menu/index',$this->data);
	}

	public function add() {

        $this->data['action_id']=$this->action_id;
        $this->data['page_error']=$this->page_error;
        $this->data['form_data']=array(
            'menu_name' => "",
            'menu_price' => "",
            'menu_calories' => "",
            'menu_description' => "",
            'menu_image' => ""
        );

        // form validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('menu_name', 'Menu Name', 'trim|required');
		$this->form_validation->set_rules('menu_price', 'Price', 'trim|required');
		$this->form_validation->set_rules('menu_calories', 'Calories', 'trim|required');
		$this->form_validation->set_rules('menu_description', 'Description', 'trim|required');
        $this->form_validation->set_rules('menu_image', 'Image', 'callback_menu_image_upload');

		$this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

		if ($this->form_validation->run() == true) {

            $action=$this->menu_modal->add_menu_item($this->upload_filename);
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Successfully Saved');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
        	
        	// redirect to manage menu page
        	redirect(base_url().'menu');
        	die();
        }

		$this->load->view('menu/add',$this->data);
	}

    function edit($id=0){
        $this->base_action="edit";
        $id=intval($id);

        if($id!=0){
            $this->data['action_id']=$id;
            $this->data['page_error']=$this->page_error;

            $original_details=$this->menu_modal->menu_item_details($id);
            if(count($original_details)==0){
                // exit if details not found
                redirect(base_url().'menu');
            }
            $this->data['form_data']=array(
                'menu_name' => $original_details['menu_name'],
                'menu_price' => $original_details['menu_price'],
                'menu_calories' => $original_details['calories'],
                'menu_description' => $original_details['description'],
                'menu_image' => $original_details['image']
            );

            // form validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('menu_name', 'Menu Name', 'trim|required');
            $this->form_validation->set_rules('menu_price', 'Price', 'trim|required');
            $this->form_validation->set_rules('menu_calories', 'Calories', 'trim|required');
            $this->form_validation->set_rules('menu_description', 'Description', 'trim|required');

            $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

            if ($this->form_validation->run() == true) {

                if(isset($_FILES['menu_image']['name']) && $_FILES['menu_image']['name']!=""){
                    $file_action=$this->menu_image_upload();
                    if($file_action==false){
                        $this->data['page_error']=$this->page_error;
                        goto end;
                    }
                }

                $action=$this->menu_modal->edit_menu_item($this->upload_filename,$id);
                if($action==true){
                    $this->session->set_flashdata('success_msg', 'Edited Successfully');
                } else {
                    $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
                }
                
                // redirect to manage menu page
                redirect(base_url().'menu');
                die();

                end:
            }

            $this->load->view('menu/add',$this->data);
        }
        else {
            redirect(base_url().'menu');
        }
    }

	function menu_image_upload() {

		if(!isset($_FILES['menu_image']['name']) || $_FILES['menu_image']['name']==""){
			$this->form_validation->set_message('menu_image_upload', 'The image field is required');
        	return false;
		}

    	$config['upload_path']   = '../asset/menu/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 1000;
        $config['file_name']    = strtotime(date('YmdHis')).'_'.rand(99,999);
        // $config['max_width']   = 1024;
        // $config['max_height']  = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('menu_image')) {
            $this->page_error=$this->upload->display_errors();
        	$this->form_validation->set_message('menu_image_upload', $this->upload->display_errors());
        	return false;
        } else {
        	// set uploaded file name
        	$this->upload_filename=$this->upload->data()['file_name'];
            return true;
        }
    }


    public function delete($id=0){
        $id=intval($id);
        $update=$this->menu_modal->delete_menu($id);
        if($update==true){
            $this->session->set_flashdata('success_msg', 'Deleted Successfully');
        } else {
            $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
        }
        redirect(base_url().'menu');
    }

}
