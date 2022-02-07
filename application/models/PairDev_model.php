<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PairDev_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_devs()
    {
        $query = $this->db->query('select * from pairs_ratio_dev');
        return $query->result();    
    }

}