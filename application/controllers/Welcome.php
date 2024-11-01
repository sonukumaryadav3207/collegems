<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('welcome_message');
	}
	public function AdminRegister()
	{
		$this->load->view('register');
	}
}
