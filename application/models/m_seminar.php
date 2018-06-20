<?php 

class m_seminar extends CI_Model
{
	
	function tampil_seminar(){
	$this->db->select('tbl_seminar.*');
	$this->db->from('tbl_seminar');
	$this->db->join('tbl_kategori','tbl_kategori.id=tbl_seminar.id_kategori');
	// $this->db->where('tbl_kategori.nama_kategori',$what);
	return $this->db->get();
	}

	function daftar_ikut_seminar($id){
		$this->db->select('tbl_seminar.*');
		$this->db->from('tbl_ikut_seminar');
		$this->db->join('tbl_seminar','tbl_seminar.id=tbl_ikut_seminar.id_seminar');
		$this->db->join('user','user.id=tbl_ikut_seminar.id_user');
		$this->db->join('tbl_kategori','tbl_kategori.id=tbl_seminar.id_kategori');
		$this->db->where('tbl_ikut_seminar.id_user',$id);
		return $this->db->get();
	}

	function daftar_seminar($id){
		$this->db->select('tbl_seminar.*');
		$this->db->from('tbl_seminar');
		$this->db->join('tbl_kategori','tbl_kategori.id=tbl_seminar.id_kategori');
		$this->db->where('tbl_seminar.id_user',$id);
		return $this->db->get();
	}

	function allseminar(){
		$this->db->select('tbl_seminar.*');
		$this->db->from('tbl_seminar');
		$this->db->join('tbl_kategori','tbl_kategori.id=tbl_seminar.id_kategori');
		return $this->db->get();
	}

	function get_category(){
	return $this->db->get('tbl_kategori');
	}
}