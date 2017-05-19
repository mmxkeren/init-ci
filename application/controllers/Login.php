<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function index()
	{
		$this->login_form();
	}

	public function login_form(){
		$d['judul']="login form";
		$this->load->view('login_form',$d);
	}
}
