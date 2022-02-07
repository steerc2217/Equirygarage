<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewHigh_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_newhigh()
    {
        $query = $this->db->query('select * from new_high_x_bars');
        return $query->result();    
    }

}