<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
	    parent::__construct();
	    $this->load->helper('url');
	    $this->load->model('m_login');
	    $this->load->model('m_seminar');
	}

	public function ikuti_seminar($id){
		if (isset($this->session->userdata['id'])){
			$insert['id_user'] = $this->session->userdata['id'];
			$insert['id_seminar'] = $id;
			$insert['status'] = "0";
			$this->db->insert("tbl_ikut_seminar",$insert);
			$this->session->set_flashdata('successdaftar', 'Kamu berhasil mengikuri seminar');
			redirect('daftar_ikut_seminar');
		}else{
			$this->session->set_flashdata('gagaldaftar', 'Anda harus login terlebih dahulu untuk bisa mengikuti seminar');
			redirect('detail/'.$id);
		}
	}

	public function daftar_ikut_seminar(){
		if (isset($this->session->userdata['id'])){
			$id = $this->session->userdata['id'];
			$data['data']=$this->m_seminar->daftar_ikut_seminar($id)->result();
			$data['title'] = "Daftar Ikut Seminar";
			$this->load->view('header');
			$this->load->view('profil');
			$this->load->view('daftar_seminar', $data);
			$this->load->view('footer');
		}else{
			$this->session->set_flashdata('gagaldaftar', 'Login terlebih dahulu');
			redirect('login');
		}
	}

	public function daftar_seminar(){
		if (isset($this->session->userdata['id'])){
			$id = $this->session->userdata['id'];
			$data['data']=$this->m_seminar->daftar_seminar($id)->result();
			$data['title'] = "Daftar Seminar";
			$this->load->view('header');
			$this->load->view('profil');
			$this->load->view('daftar_seminar', $data);
			$this->load->view('footer');
		}else{
			$this->session->set_flashdata('gagaldaftar', 'Login terlebih dahulu');
			redirect('login');
		}
	}

}
?>