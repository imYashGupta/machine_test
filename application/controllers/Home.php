<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    date_default_timezone_set('Asia/Kolkata');
	    
	    
	}

	public function index()	{
		
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	
}
