<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PricePerformance_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_priceperformance()
    {
        $query = $this->db->query('select * from simple_price_performance');
        return $query->result();    
    }

}