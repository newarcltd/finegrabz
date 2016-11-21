<?php

class Home_modal extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->date=date('Y-m-d H:i:s');
    }

    public function today_menu_list(){
        $return=array();
        $query=$this->db->query("SELECT a3.menu_id,a3.menu_name,a3.menu_price FROM fg_weekly_menu as a1 inner join fg_weekly_menu_list as a2 on a1.id=a2.week_id inner join fg_menu as a3 on a3.menu_id=a2.menu_id WHERE a1.date='".strtotime(date('Y-m-d'))."' AND a1.status=0 AND a2.status=0 AND a3.deleted=0 ");
        if($query->num_rows()>=1) {
            foreach($query->result_array() as $row){
                $return[$row['menu_id']]=$row['menu_name'];
            }
            return $return;
        }
        else{
            return $return;
        }
    }

}