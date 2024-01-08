<?php

/**
 * 
 */
class Landing extends CI_Controller
{
	
	public function index()
	{
			$data['produk'] = $this->model_produk->tampil_data('produk')->result();
			$this->load->view('templates/head');
			$this->load->view('templates/side');
			$this->load->view('landing',$data);
			$this->load->view('templates/foot');
	}
}