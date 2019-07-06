<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arena extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register');
		$this->load->library(array('session','form_validation'));
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('login_arena');
	}
}
