<?php

class Settings_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->date=date('Y-m-d H:i:s');
    }

    function update_profile_detail($id){
        $username=set_value('username');
        $email=set_value('email');
        $name=set_value('name');        

        $query=$this->db->query("UPDATE admin_user SET username='".$username."',email='".$email."',name='".$name."' WHERE userid='".$id."' ");
        if($query){
            return true;
        } else {
            return false;
        }
    }

    function update_password_detail($id){
        $new_password=set_value('new_password');

        $query=$this->db->query("UPDATE admin_user SET password='".md5($new_password)."' WHERE userid='".$id."' ");
        if($query){
            return true;
        } else {
            return false;
        }
    }

    function get_profile_detail($id){
        $query=$this->db->query("SELECT * FROM admin_user WHERE userid='".$id."' ");
        if($query->num_rows()==1) {
            return $query->row_array();
        }
        else{
            return array();
        }
    }

}