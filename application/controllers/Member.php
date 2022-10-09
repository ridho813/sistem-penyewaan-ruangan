<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Pelanggan');
		$this->load->model('Sewa');
		$this->load->database();
	   }

	public function index()
	{
	
		$this->load->view('member/login');
	
}
//cek login
public function login(){
	$email = $this->input->post('email');
	$password = $this->input->post('password');

	// ambil username, karna di cek username
	$customer = $this->db->get_where('user', ['email' => $email])->row_array();

	if($customer != null) {
		// cek apakah password benar atau tidak
		if(MD5($password, $customer['password'])) {
			// jika benar
			$data = [
					'email' => $customer['email'],
					'nama' => $customer['nama'],
					'iduser' => $customer['iduser'],
					'role_id' => $customer['role_id']
			];
			// masukan $data kedalam session
			$this->session->set_userdata($data);

			if($customer['role_id'] == 1) {
				redirect('admin/gedung');
			} else {
				redirect('member/boking');
			}
		} else {
			// jika password salah
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger"><i class="far fa-lightbulb"></i> Password anda salah, coba lagi!.</div>');
			redirect('member');
		}
	} else {
		$this->session->set_flashdata('gagal', '<div class="alert alert-danger"><i class="far fa-lightbulb"></i> Akun Belum Di Daftar, Tidak Bisa Login!.</div>');
		redirect('member');
	}

}
//view daftar
	public function daftar()
	{
		$this->load->view('member/daftar');
	}

//awalan
	public function dashboard()
	{
		if($this->session->userdata('iduser') == ''){
            redirect('memeber');
        }else{
			
		
		$this->load->view('tamplate/header');
		$this->load->view('member/dashboard');
		$this->load->view('tamplate/footer');
	}
}
//tambah member
	public function tambahmember()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('email', 'Email', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		if ($this->form_validation->run()==false) {
						
			$this->load->view('member/daftar');
			}else{
				$data= array(
					'nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'pekerjaan' => $this->input->post('pekerjaan'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'role_id' => '3',
				
				);
				$this->Pelanggan->tambah($data);
		//pesan data berhasil
		
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
		
		redirect('member');	
			}


		
	}

//dashboard boking

public function boking()
	{
			
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();	
		$data['jadwal'] = $this->Pelanggan->jadwalsewa();
		$data['gedung'] = $this->Pelanggan->allgedung();
		$this->load->view('member/boking',$data);
	
}
//pemesanan gedung
public function pemesan($id)
	{
		if(!$this->session->userdata('role_id') == 3) {
			redirect('member');
		}else{
			$data['status'] = $this->Sewa->getgedung();
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		 $data['fasilitas'] = $this->Pelanggan->getall();
		$data['gedung'] = $this->Pelanggan->getgedungById($id);
		$this->form_validation->set_rules('tanggalsewa', 'Tanggal Sewa', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('tanggalkembali', 'Tanggal Kembali', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('tambahfasilitas');	 //falidasi data
		$this->form_validation->set_rules('judul_rapat', 'Judul Rapat', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		$this->form_validation->set_rules('penanggung_jwb', 'Penanggung Jawab', 'required', array(
			'required' => '%s Wajib Diisi !'
		));	 //falidasi data
		if ($this->form_validation->run()==false) {
			
			//$data['gedung'] = $this->Pelanggan->allgedung();
			$this->load->view('tamplate/header', $data);
			$this->load->view('member/dashboard',$data);
			$this->load->view('tamplate/footer');
	}else{
	
		$this->Pelanggan->aksisewa($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success mt-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Anda Berhasil Merental Mobil!.</div>');
			//$this->Pelanggan->aksisewa($data);
			//pesan data berhasil

		$this->session->set_flashdata('success', 'Data Berhasil Disimpan !');

			redirect('member/boking');	
				}
	}
}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('sucess', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Berhasil Logout.</div>');
			redirect('member/boking');
	}


}

