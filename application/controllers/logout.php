<?php

/**
 * 
 */
class Logout extends CI_Controller
{
	
	public function index()
	{

			$this->load->view('templates/header');
			$this->load->view('logout');
			$this->load->view('templates/footer');
	}
}