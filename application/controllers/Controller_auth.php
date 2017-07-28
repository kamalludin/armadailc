<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_auth extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index(){
		$this->load->view('view_sub_menu/header');
		$this->load->view('view_menu/home');
		$this->load->view('view_sub_menu/footer');
	}
}