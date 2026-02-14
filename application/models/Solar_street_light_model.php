<?php
class Solar_street_light_model extends CI_Model {

    private $table = 'solar_street_light';

    public function insert($data){
        return $this->db->insert($this->table, $data);
    }

    public function get_latest(){
        return $this->db->order_by('id','DESC')
                        ->limit(1)
                        ->get($this->table)
                        ->row();
    }

    public function get_all(){
        return $this->db->order_by('id','DESC')
                        ->get($this->table)
                        ->result();
    }

    public function get_by_id($id){
        return $this->db->get_where($this->table,['id'=>$id])->row();
    }

    public function update($id,$data){
        return $this->db->where('id',$id)
                        ->update($this->table,$data);
    }

    public function delete($id){
        return $this->db->where('id',$id)
                        ->delete($this->table);
    }
}
