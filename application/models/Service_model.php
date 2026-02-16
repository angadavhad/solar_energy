<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model {

    /* ================= CARDS ================= */

    public function get_services(){
        return $this->db
                    ->order_by('id','ASC')
                    ->get('services')
                    ->result();
    }

    public function get_service($id){
        return $this->db
                    ->where('id',$id)
                    ->get('services')
                    ->row();
    }

    public function update_service($id,$data){
        return $this->db
                    ->where('id',$id)
                    ->update('services',$data);
    }

    public function delete_service($id){
        return $this->db
                    ->where('id',$id)
                    ->delete('services');
    }

    /* ================= DETAILS ================= */

    public function get_detail($service_id){
        return $this->db
                    ->where('service_id',$service_id)
                    ->get('service_details')
                    ->row();
    }

    public function save_detail($service_id,$data){

        $exists = $this->get_detail($service_id);

        if($exists){
            return $this->db
                        ->where('service_id',$service_id)
                        ->update('service_details',$data);
        } else {
            $data['service_id'] = $service_id;
            return $this->db
                        ->insert('service_details',$data);
        }
    }

    public function delete_detail($service_id){
        return $this->db
                    ->where('service_id',$service_id)
                    ->delete('service_details');
    }
}
