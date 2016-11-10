<?php

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->date=date('Y-m-d H:i:s');
    }

    function add_user_item($filename=""){
    	$user_name=set_value('user_name');
    	$user_email=set_value('user_email');
    	$user_phone=set_value('user_phone');

    	$query=$this->db->query("INSERT INTO fg_user (user_name,user_email,user_phone,createddt) VALUES ('".$user_name."','".$user_email."','".$user_phone."','".$this->date."')");
    	if($query){
    		return true;
    	} else {
    		return false;
    	}
    }

    function edit_user_item($filename="",$id=0){
        $user_name=set_value('user_name');
        $user_email=set_value('user_email');
        $user_phone=set_value('user_phone');
       // $query_join="";
        

        $query=$this->db->query("UPDATE fg_user SET user_name='".$user_name."',user_email='".$user_email."',user_phone='".$user_phone."',updateddt='".$this->date."'  WHERE user_id='".$id."' ");
        if($query){
            return true;
        } else {
            return false;
        }
    }

    function get_user_list(){
    	$query=$this->db->query("SELECT * FROM fg_user ");
    	return $query->result_array();
    }

    function user_item_details($id){
        $query=$this->db->query("SELECT * FROM fg_user WHERE user_id='".$id."' ");
        if($query->num_rows()==1) {
            return $query->row_array();
        }
        else{
            return array();
        }
    }
	
	function welcome_email($user_name,$user_email,$user_phone)
    {
        $this->load->library('email');

        $data['user_name']=$user_name;
        $data['user_email']=$user_email;
        $data['user_phone']=$user_phone;

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($user_email);

        $this->email->subject('Email Test');
        $this->email->message($this->load->view('email/welcome',$data,true));
        $this->email->set_mailtype('html');

        return $this->email->send();
    }

}