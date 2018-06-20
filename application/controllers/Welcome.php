<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	    $this->load->library('form_validation');
	    $this->load->model('m_login');
	    $this->load->model('m_seminar');

	}

	

	public function header()
	{
		$this->load->view('header');
	}

		public function index()
	{
		$data['data']=$this->m_seminar->tampil_seminar()->result();
		$this->load->view('header');
		$this->load->view('Home1', $data);
		$this->load->view('footer');
	}
	

	public function detail($id)
	{
		$data['data'] = $this->db->select("*")->from("tbl_seminar")->where("id",$id)->get()->result();
		$data['kategori'] = $this->db->select("*")->from("tbl_kategori")->where("id",$data['data'][0]->id_kategori)->get()->result();
		$data['id'] = $id;
		$this->load->view('header');
		$this->load->view('detail', $data);
		$this->load->view('footer');

	}
	
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}
	
		public function daftar()
	{
		
		$this->load->view('header');
		$this->load->view('daftar');
	}

			public function allseminar()
	{
		$data['data']=$this->m_seminar->allseminar()->result();
		$this->load->view('header');
		$this->load->view('allseminar',$data);
		
	}
	
		public function buatseminar()
	{
		$data['kategori'] = $this->m_seminar->get_category()->result();
		$this->load->view('header');
		$this->load->view('buatseminar',$data);
		$this->load->view('footer');
	}

	public function editprofil()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('notelp', 'No Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('instansi', 'instansi', 'required');
		$this->form_validation->set_rules('password', 'password');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('editprofil');
		}else{
			$update['nama'] = $this->input->post('nama');
			$update['notelp'] = $this->input->post('notelp');
			$update['alamat'] = $this->input->post('alamat');
			$update['instansi'] = $this->input->post('instansi');
			if(!empty($this->input->post('password'))){
				$update['password'] = $this->input->post('password');	
			}

			$id = $this->session->userdata['id'];
			$this->db->where("id",$id)->update("user",$update);

			$cek = $this->db->where("id",$id)->get("user");
			if($cek->num_rows() > 0){
				foreach ($cek->result() as $wew) {
					$sess_data['id'] = $wew->id;
					$sess_data['nama'] = $wew->nama;
					$sess_data['email'] = $wew->email;
					$sess_data['notelp'] = $wew->notelp;
					$sess_data['alamat'] = $wew->alamat;
					$sess_data['instansi'] = $wew->instansi;
					$this->session->set_userdata($sess_data);
				}
			}
			
			$this->session->set_flashdata('successdaftar', 'berhasil! Kamu berhasil memperbaruhi data profile kamu.');
			redirect('/editprofil');
		}
	}

public function admin()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/admin');
		$this->load->view('admin/template/footer');

	}

	public function profil()
	{
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

		

	public function konfirmasi()
	{
		$this->load->view('header');
		$this->load->view('konfirmasi');
		
	}	



	public function pesertasmnr()
	{
		$this->load->view('header');
		$this->load->view('profil');
		$this->load->view('pesertasmnr');
		
	}	
	public function action_daftar(){
		$insert['email'] = $this->input->post('email');
		$insert['nama'] = $this->input->post('username');
		$insert['password'] = md5($this->input->post('password'));
		$insert['notelp'] = $this->input->post('notelp');
		$insert['alamat'] = $this->input->post('alamat');
		$insert['instansi'] = $this->input->post('instansi');
		

		$proses = $this->db->insert('user',$insert);
		if($proses==true){
			$this->session->set_flashdata('successdaftar', 'selamat anda berhasil masuk');
		}else{
			$this->session->set_flashdata('gagaldaftar','mohon maaf coba lagi');
		}
		redirect('login');

	}

	public function action_buatseminar(){
		$insert['nama'] = $this->input->post('nama');
		$insert['lokasi'] = $this->input->post('lokasi');
		$insert['dari'] = ($this->input->post('dari'));
		$insert['mulai'] = $this->input->post('mulai');
		$insert['sampai'] = $this->input->post('sampai');
		$insert['gmbr'] = $this->upload_image();
		$insert['harga'] = $this->input->post('harga');
		$insert['deskripsi'] = $this->input->post('deskripsi');
		$insert['id_kategori'] = $this->input->post('kategori');

		$proses = $this->db->insert('tbl_seminar',$insert);
		if($proses==true){
			$this->session->set_flashdata('successdaftar', 'selamat anda berhasil masuk');
		}else{
			$this->session->set_flashdata('gagaldaftar','mohon maaf coba lagi');
		}
		redirect('/');

	}

	public function aksi_login(){
		$email = $this->input->post('txtemail');
		$password = $this->input->post('txtpass');
		$eml = $email;
		$pass = md5($password);
		$cek = $this->m_login->cek_login($eml,$pass);{
				if($cek->num_rows() > 0){
					foreach ($cek->result() as $wew) {
						$sess_data['id'] = $wew->id;
						$sess_data['nama'] = $wew->nama;
						$sess_data['email'] = $wew->email;
						$sess_data['notelp'] = $wew->notelp;
						$sess_data['alamat'] = $wew->alamat;
						$sess_data['instansi'] = $wew->instansi;
						$this->session->set_userdata($sess_data);
		
					}
					$this->session->set_flashdata('successlogin', 'login berhasil !');
					redirect(base_url());
				}else{
					$this->session->set_flashdata('error', 'email atau password salah !');
					echo "<script>history.go(-1)</script>";
		
				}
			}
		}
		
			public function logout(){
				$this->session->sess_destroy();
				redirect('/');
			}
		
			public function upload_image(){
				$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'jpg|png|jpeg';

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
					if($this->upload->do_upload("image")){
						$gbr = $this->upload->data();
						return $gbr['file_name'];
					}else{
						return false;
					}
			}

}

