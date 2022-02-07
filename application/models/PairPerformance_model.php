<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PairPerformance_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_pairs()
    {
        $query = $this->db->query('select * from pairs_ratio_performance');
        return $query->result();    
    }

}