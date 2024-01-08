
<?php

class Model_transaksi extends CI_Model{

public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('produk', 'transaksi.id_priduk=produk.id_produk');
		$this->db->join('user', 'transaksi.id_user=user.id_user');
		return $this->db->get();
	}
}