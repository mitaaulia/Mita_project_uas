<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function index()
	{
			$data['produk'] = $this->model_produk->tampil_data('produk')->result();
			// $this->load->view('templates_admin/header');
			$this->load->view('admin',$data);
			// $this->load->view('templates_admin/footer');
	}
	public function hapus($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$this->model_produk->hapus_data($where, 'produk');
		redirect('admin');
	}
	public function update($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$data['produk'] = $this->model_produk->edit_data($where, 'produk')->result();
		$this->load->view('edit_produk', $data);
	}
	public function update_aksi()
	{
		$id = $this->input->post('id_produk');
		$nama = $this->input->post('nama_produk');
		$jenis = $this->input->post('jenis');
		$warna = $this->input->post('warna');
		$ukuran = $this->input->post('ukuran');
		$harga = $this->input->post('harga');
		$foto = $this->input->post('foto');

		$data = array(
			'nama_produk' => $nama,
			'jenis' => $jenis,
			'warna' => $warna,
			'ukuran' => $ukuran,
			'harga' => $harga,
			'foto' => $foto


		);
		$where = array(
			'id_produk' => $id
		);
		$this->model_produk->update_data($where, $data, 'produk');
		redirect('admin');
	}
	public function detail($id_produk)
	{
		
		$where = array('id_produk' => $id_produk);
		$data['produk'] = $this->model_produk->detail($where, 'produk')->result();
		$this->load->view('detail', $data);
	}

}