<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pivotpoints_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_pivot_points_daily()
    {
        $query = $this->db->query('select * from pivot_points_daily');
        return $query->result();    
    }

}