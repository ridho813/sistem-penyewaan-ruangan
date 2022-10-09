<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Sewa');
		$this->load->database();
	   }

	public function tolak($id)
	{
	
		$data['sewa'] = $this->Sewa->getorderById($id);
		$this->form_validation->set_rules('tambahan', 'tambahan ', array(
			'' => '%s Wajib Diisi !'
		));	 //falidasi data
		if ($this->form_validation->run()==false) {
		$this->load->view('tamplate/header');
		$this->load->view('admin/fasilitasstatus' ,$data);
		$this->load->view('tamplate/footer');
	}else{
	
		$this->Sewa->aksisewafasilitas($id);
			$this->session->set_flashdata('success', '<div class="alert alert-success mt-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Anda Berhasil Memverifikasi Status!.</div>');
			//pesan data berhasil

		$this->session->set_flashdata('gagal', '<div class="alert alert-danger mt-1"><i class="fa fa-check-circle" aria-hidden="true"></i>  Data Tidak Di Verivikasi !.</div>');

			redirect('order');	
				}
	}
	
	public function index()
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();	
		//$data['sewa'] = $this->db->get_where('sewa')->row_array();	
		$data['status'] = $this->Sewa->getgedung();
		$this->load->view('tamplate/admintamplate',$data);
		$this->load->view('admin/listreques', $data);
		$this->load->view('tamplate/footer');
	
}

//verifikasi data gedung

public function verifikasi($id)
{
	$data['sewa'] = $this->Sewa->getorderByIdsewa($id);
	
	$this->session->set_flashdata('success', '<div class="alert alert-success mt-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Data  Berhasil Di Verifikasi!.</div>');
				redirect('admin/gedung/list');
}


//verifikasi data fasilitas

public function verifikasifasilitas($id)
{
	$data['sewa'] = $this->Sewa->getorderByverif($id);
	
	$this->session->set_flashdata('success', '<div class="alert alert-success mt-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Data  Berhasil Di Verifikasi!.</div>');
				redirect('order');
}

}
