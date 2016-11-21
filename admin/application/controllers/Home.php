<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include ('Common.php');

class Home extends Common {

	public function __construct(){
		parent::__construct();

		$this->load->model('Home_modal','home_modal');
	}
	
	public function index()
	{
		$this->data['today_menu_list']=$this->home_modal->today_menu_list();

		$this->load->view('home/index',$this->data);
	}
}
