<?php
class Solar_water_pump_model extends CI_Model {

    public function insert($data){
        return $this->db->insert('solar_water_pumps',$data);
    }

    public function get_all(){
        return $this->db->order_by('id','DESC')
                        ->get('solar_water_pumps')
                        ->result();
    }
}
