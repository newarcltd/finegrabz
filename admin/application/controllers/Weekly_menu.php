<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include ('Common.php');

class Weekly_menu extends Common {

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

        $this->data['header_title']="Manage Weekly Menu";
        $this->data['menu_list']=$this->menu_modal->weekly_menu_list();
        $this->data['form_data']=array(
            'year' => date('Y'),
            'week_id' => date('W')
        );
        $this->data['filter_option']=$this->menu_modal->weekly_menu_filter_option();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('year', 'Year', 'trim|required');
        $this->form_validation->set_rules('date_range', 'Date', 'trim|required');
        
        $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');
        $this->form_validation->run();

		$this->load->view('weekly_menu/index',$this->data);
	}

    public function add($eid=""){
        $this->data['header_title']="Add Weekly Menu";
        $this->data['url_2']=$this->uri->segment(2);
        $this->data['action_id']=$eid;
        $menu_list=$this->menu_modal->get_menu_list_for_add(1);
        $this->data['menu_list']=$menu_list['menu'];
        $this->data['full_menu_list'] = $menu_list['full_menu'];
        $this->data['form_data']=array(
            'date' => "",
            'menu_list' => array()
        );

        // form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|callback_date_validation_check');
        $this->form_validation->set_rules('menu_list', 'Menu', 'callback_multi_select_validate');

        $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

        if ($this->form_validation->run() == true) {

            $action=$this->menu_modal->add_weekly_menu();
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Successfully Saved');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
            
            redirect(base_url().'weekly_menu');
            die();
        }

        $this->load->view('weekly_menu/add',$this->data);
    }

    public function edit($eid=""){
        $eid=intval($eid);
        $this->data['header_title']="Edit Weekly Menu";
        $this->data['url_2']=$this->uri->segment(2);
        $this->data['action_id']=$eid;
        $menu_list=$this->menu_modal->get_menu_list_for_add(1);
        $this->data['menu_list']=$menu_list['menu'];
        $this->data['full_menu_list'] = $menu_list['full_menu'];
        $this->data['form_data']=$this->menu_modal->weekly_menu_edit_details($eid);

        // form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|callback_date_validation_check');
        $this->form_validation->set_rules('menu_list', 'Menu', 'callback_multi_select_validate');

        $this->form_validation->set_error_delimiters('<span class="warningerror">', '</span>');

        if ($this->form_validation->run() == true) {

            $action=$this->menu_modal->edit_weekly_menu($eid);
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Successfully Saved');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
            
            redirect(base_url().'weekly_menu');
            die();
        }

        $this->load->view('weekly_menu/add',$this->data);
    }

    function delete($id=0){
        $id=intval($id);
        if($id!=0){
            $action=$this->menu_modal->delete_weekly_menu($id);
            if($action==true){
                $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                $this->session->set_flashdata('fail_msg', 'Failed. Try Again!');
            }
        }
        redirect($this->baseurl.'weekly_menu');
    }

    function date_validation_check(){
        $date=$this->input->post('date');

        if($this->uri->segment(2)=="edit"){
            return true;
        }

        if($date==""){
            $this->form_validation->set_message('date_validation_check',"Please Enter Date");
            return false;
        }

        if($date!=""){
            $check=$this->menu_modal->weekly_menu_date_check($date);
            if($check){
                return true;
            }
        }
        $this->form_validation->set_message('date_validation_check',"Already menu list available for this date.");
        return false;
    }

    function multi_select_validate($abcd)
    {
        $menu_list=$this->input->post('menu_list');
        if(!is_array($menu_list) || count($menu_list)==0){
            $this->form_validation->set_message('multi_select_validate', 'Please Select Your Menu List.');
            return false;
        } else{
            return true;
        }
    }
	
}
