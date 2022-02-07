<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GapUpDown_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_gaps()
    {
        $query = $this->db->query('select * from gap_up_down');
        return $query->result();    
    }

}