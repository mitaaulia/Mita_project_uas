<?php

/**
 * 
 */
class About extends CI_Controller
{
	
	public function index()
	{
			$this->load->view('templates/head');
			$this->load->view('templates/side');
			$this->load->view('about');
			$this->load->view('templates/foot');
	}
}