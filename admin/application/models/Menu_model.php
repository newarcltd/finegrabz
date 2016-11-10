<?php

class Menu_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->date=date('Y-m-d H:i:s');
    }

    function add_menu_item($filename=""){
    	$menu_name=set_value('menu_name');
    	$menu_price=set_value('menu_price');
    	$menu_calories=set_value('menu_calories');
    	$menu_description=set_value('menu_description');

    	$query=$this->db->query("INSERT INTO fg_menu (menu_name,image,menu_price,calories,description,createddt) VALUES ('".$menu_name."','".$filename."','".$menu_price."','".$menu_calories."','".$menu_description."','".$this->date."')");
    	if($query){
    		return true;
    	} else {
    		return false;
    	}
    }

    function edit_menu_item($filename="",$id=0){
        $menu_name=set_value('menu_name');
        $menu_price=set_value('menu_price');
        $menu_calories=set_value('menu_calories');
        $menu_description=set_value('menu_description');
        $query_join="";
        if($filename!=""){
            $query_join=" ,image='".$filename."' ";
        }

        $query=$this->db->query("UPDATE fg_menu SET menu_name='".$menu_name."',menu_price='".$menu_price."',calories='".$menu_calories."',description='".$menu_description."',updateddt='".$this->date."' $query_join WHERE menu_id='".$id."' ");
        if($query){
            return true;
        } else {
            return false;
        }
    }

    function get_menu_list(){
    	$query=$this->db->query("SELECT * FROM fg_menu ");
    	return $query->result_array();
    }

    function menu_item_details($id){
        $query=$this->db->query("SELECT * FROM fg_menu WHERE menu_id='".$id."' ");
        if($query->num_rows()==1) {
            return $query->row_array();
        }
        else{
            return array();
        }
    }

}