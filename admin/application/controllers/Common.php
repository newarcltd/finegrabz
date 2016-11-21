<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$this->session->has_userdata('ci_userid')){
			redirect(base_url().'login');
		}

		$this->loggedin_userid=$this->session->has_userdata('ci_userid');
		$this->baseurl = $this->data['baseurl'] = base_url();
		$this->assert_path = $this->data['assert_path'] = assert_path;
	}
	
}
