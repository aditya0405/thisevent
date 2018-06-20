<?php 

class m_login extends CI_Model
{
	
	function cek_login($email, $password){
	$this->db->where('email', $email);
	$this->db->where('password', $password);
	return $this->db->get('user');
	
	}
}