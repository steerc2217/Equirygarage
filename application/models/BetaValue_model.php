<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BetaValue_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_betas()
    {
        $query = $this->db->query('select * from beta_value');
        return $query->result();    
    }

}