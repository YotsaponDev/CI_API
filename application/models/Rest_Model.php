<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_Model extends CI_Model {
  public function get_data() {
    //$return = array();
    $this->load->database();
    $query = $this->db->get('name')->result(); // result() = return JSON
    
    return $query;

  }
  public function post_data($data){
    $this->load->database();
    $this->db->insert('name',$data);
  }
}