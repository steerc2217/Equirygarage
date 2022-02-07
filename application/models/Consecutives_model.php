<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consecutives_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_Consecutives()
    {
        $query = $this->db->query('select * from consecutives_up_down');
        return $query->result();    
    }

}