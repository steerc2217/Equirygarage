<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NarrowRange_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_narrows()
    {
        $query = $this->db->query('select * from narrow_range');
        return $query->result();    
    }

}