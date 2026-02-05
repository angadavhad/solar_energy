<?php

class My_model extends CI_Model {
      function insert($tname,$data)
      {
       return $this->db->insert($tname,$data);
      }
      function select($tname)
      {
       return $this->db->get($tname)->result_array();
      }
      function select_where($tname,$cond)
      {
        return $this->db->where($cond)->get($tname)->result_array();
      }
      function update($tname,$cond,$data)
      {
        return $this->db->where($cond)->update($tname,$data);
      }
      function delete($tname,$cond)
      {
        return $this->db->where($cond)->delete($tname);
      }
 
}