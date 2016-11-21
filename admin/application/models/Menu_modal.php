<?php

class Menu_modal extends CI_Model {

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
    	$query=$this->db->query("SELECT * FROM fg_menu WHERE deleted=0 ");
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

    function delete_menu($id){
        $query=$this->db->query("UPDATE fg_menu SET deleted='1' WHERE menu_id='".$id."' ");
        if($query){
            return true;
        } else {
            return false;
        }
    }

    function get_menu_list_for_add($type=0){
        $menu=array();
        $full_menu=array();

        $query=$this->db->query("SELECT * FROM fg_menu WHERE deleted=0 ");
        if($query->num_rows()>=1) {
            foreach($query->result_array() as $v){
                $menu[$v['menu_id']]=$v['menu_name'].' ($'.$v['menu_price'].')';

                if($type==1){
                    $full_menu[$v['menu_id']] = array(
                        'name' => $v['menu_name'],
                        'image' => $v['image']
                    );
                }
            }
        }

        if($type==1){
            return array('menu'=>$menu,'full_menu'=>$full_menu);
        }
        return $menu;
    }

    public function weekly_menu_date_check($date){
        $date=strtotime($date);
        $query=$this->db->query("SELECT * FROM fg_weekly_menu WHERE `date`='".$date."' AND status=0 ");
        if($query->num_rows()>=1) {
            return false;
        }
        return true;
    }

    public function delete_weekly_menu($id){
        $query=$this->db->query("UPDATE fg_weekly_menu SET status='1' WHERE id='".$id."' ");
        if($query){
            return true;
        } else {
            return false;
        }
    }

    public function add_weekly_menu(){
        $date=$this->input->post('date');
        $menu_list=$this->input->post('menu_list');
        $date=strtotime($date);
        $year=date('Y',$date);
        // monday to sunday same week
        $weekid=date('W',$date);

        $query=$this->db->query("INSERT INTO fg_weekly_menu (`date`,week_id,year,createddt) VALUES ('".$date."','".$weekid."','".$year."','".$this->date."')");
        if($query){
            $insert_id=$this->db->insert_id();
            foreach($menu_list as $v){
                $this->db->query("INSERT INTO fg_weekly_menu_list (week_id,menu_id) VALUES ('".$insert_id."','".$v."')");
            }
            return true;
        } else {
            return false;
        }
    }

    public function edit_weekly_menu($eid) {
        $menu_list=$this->input->post('menu_list');

        $query=$this->db->query("UPDATE fg_weekly_menu_list SET status='1' WHERE week_id='".$eid."' ");
        if($query){
            foreach($menu_list as $m) {
                $check=$this->db->query("SELECT id FROM fg_weekly_menu_list WHERE week_id='".$eid."' and menu_id='".$m."' AND status=1 ");
                if($check->num_rows()>=1) {
                    $val=$check->row_array();
                    $this->db->query("UPDATE fg_weekly_menu_list SET status='0' WHERE id='".$val['id']."' ");
                } 
                else {
                    $this->db->query("INSERT INTO fg_weekly_menu_list (week_id,menu_id) VALUES ('".$eid."','".$m."')");
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public function weekly_menu_list(){
        $post_week_id=set_value('date_range');
        if($post_week_id=="") {
            $week_id=date('W');
            $year=date('Y');
        } else {
            $v=explode('_', $post_week_id);
            $week_id=$v[1];
            $year=$v[0];
        }
        $m_list=array();
        $d_list=array();

        $query=$this->db->query("SELECT a1.id as aid,a1.date,a1.week_id,a3.* FROM fg_weekly_menu as a1 left outer join fg_weekly_menu_list as a2 on a1.id=a2.week_id left outer join fg_menu as a3 on a3.menu_id=a2.menu_id WHERE a1.year='".$year."' AND a1.week_id='".$week_id."' AND a1.status=0 AND a2.status=0 ");
        if($query->num_rows()>=1) {
           foreach($query->result_array() as $row) {
                $menu_date=date('Y-m-d',$row['date']);
                if(!in_array($menu_date, $d_list)){
                    $d_list[$row['aid']]=$menu_date;
                }

                $m_list[$menu_date][]=array(
                    'menu_date' => $menu_date,
                    'name' => $row['menu_name'],
                    'image' => $row['image'],
                    'price' => $row['menu_price'],
                    'description' => $row['description']
                );
           } 
        }

        return array('menu_list'=>$m_list,'day_list'=>$d_list);
    }

    public function weekly_menu_edit_details($eid) {
        $date="";
        $m_list=array();

        $query=$this->db->query("SELECT a1.id as aid,a1.date,a1.week_id,a2.menu_id FROM fg_weekly_menu as a1 left outer join fg_weekly_menu_list as a2 on a1.id=a2.week_id inner join fg_menu as a3 on a3.menu_id=a2.menu_id WHERE a1.id='".$eid."' AND a1.status=0 AND a2.status=0 AND a3.deleted=0 ");
        if($query->num_rows()>=1) {
           foreach($query->result_array() as $row) {
                $menu_date=date('Y-m-d',$row['date']);
                $date=$menu_date;
                $m_list[]=$row['menu_id'];
           } 
        }

        return array('date'=>$date,'menu_list'=>$m_list);
    }

    public function weekly_menu_filter_option(){
        $data=array();

        $query=$this->db->query("SELECT week_id,year FROM `fg_weekly_menu` group by year,week_id order by year asc,week_id asc ");
        if($query->num_rows()>=1) {
           foreach($query->result_array() as $row) {
                $data[$row['year']][]=$row['week_id'];
           } 
        }

        return $data;
    }

}