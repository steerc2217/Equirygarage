<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewLow_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_newLow()
    {
        $query = $this->db->query('select * from new_low_x_bars');
        return $query->result();    
    }

}