<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('Login_view');
		$this->load->view('templates/footer');

	}
}
