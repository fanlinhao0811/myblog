<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}


	public function login(){
		$this->load->view('login');
	}
	public function reg(){
		$this->load->view('reg');
	}
	public function add_user(){

	}

}
