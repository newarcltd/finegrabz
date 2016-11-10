<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include ('Common.php');

class Home extends Common {

	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('home/index');
	}
}
