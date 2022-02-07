<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TightRange_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_tights()
    {
        $query = $this->db->query('select * from tight_range');
        return $query->result();    
    }

}