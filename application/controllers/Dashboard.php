<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
    	parent::__construct();
		$this->load->helper('url');
              
    }
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['js'] = 'dashboard.js';
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->view('footer',$data);
	}
}
