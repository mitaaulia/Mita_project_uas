<?php

/**
 * 
 */
class Detail extends CI_Controller
{
	
	public function index()
	{
			$this->load->view('templates/head');
			$this->load->view('templates/side');
			$this->load->view('detail');
			$this->load->view('templates/foot');
	}
}