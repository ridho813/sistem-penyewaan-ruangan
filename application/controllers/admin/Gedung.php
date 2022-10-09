<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('User');
		$this->load->model('Sewa');
		$this->load->database();
	   }


	public function index()
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
			
		$data['fasilitas'] = $this->User->getall();//menampilkan daftar fasilitas
		$this->load->view('tamplate/admintamplate',$data);
		$this->load->view('admin/gedung', $data);
		$this->load->view('tamplate/footer');
	
}


	public function tambah()
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
			$this->form_validation->set_rules('namagedung', 'Nama Gedung', 'required', array(
					'required' => '%s Wajib Diisi !'
				));	 //falidasi data
				$this->form_validation->set_rules('harga', 'Harga Sewa', 'required', array(
					'required' => '%s Wajib Diisi !'
				));	
				$this->form_validation->set_rules('idfasilitas', 'Fasilitas Gedung', 'required', array(
					'required' => '%s Wajib Diisi !'
				));	
				
				if ($this->form_validation->run()==false) {
					
					$data['fasilitas'] = $this->User->getall();
					$this->load->view('tamplate/admintamplate',$data);
					$this->load->view('admin/gedung', $data , false);
					$this->load->view('tamplate/footer');
					//$this->load->view('v_tamplate', $data, false);
					
				}
		//konfigurasi upload

		$config['upload_path']		='./sertifikat/';
		$config['allowed_types']		='gif|jpg|png|jpeg|pdf';
		$config['max_size']				= 5048;
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('sertifikat')) {
			//jika gagal upload
			
					//	$data['fasilitas'] = $this->User->getall();
			$data =  $this->upload->display_errors();
			redirect('admin/gedung', $data, false);
		
			
		}else{
			//jika berhasil upload

			$upload_data =array('upload_data' => $this->upload->data());
			$config['image_library'] ='gd2';
			$config['source_image'] ='./sertifikat/'. $upload_data['upload_data']['file_name'];
			$this->load->library('upload', $config);
			
					$data= array(
						'namagedung' => $this->input->post('namagedung'),
						'harga' => $this->input->post('harga'),
						'idfasilitas' => $this->input->post('idfasilitas'),
						'sertifikat' =>$upload_data['upload_data']['file_name'],
					);
					$this->User->input($data);
			//pesan data berhasil
			
			$this->session->set_flashdata('pesan', 'Data Berhasil Disimpan !');
			
			redirect('admin/gedung/daftar');
				}
							
	}
//daftar fasilitas
	public function fasilitas()
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['sewa'] = $this->db->get_where('sewa')->row_array();	
		$data['status'] = $this->Sewa->konfirmstatus();
		$this->load->view('tamplate/admintamplate',$data);
		$this->load->view('admin/fasilitas', $data);
		$this->load->view('tamplate/footer');
	
}
//tambah fasilitas

		public function tambahfasilitas()
		{
			$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();	
	$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required', array(
		'required' => '%s Wajib Diisi !'
	));	 //falidasi data
	if ($this->form_validation->run()==false) {
					
	$this->load->view('tamplate/admintamplate',$data);
		$this->load->view('admin/fasilitas');
		$this->load->view('tamplate/footer');
		}else{
			$data= array(
				'fasilitas' => $this->input->post('fasilitas'),
			
			);
			$this->User->inputdatafasilitas($data);
	//pesan data berhasil
	
	$this->session->set_flashdata('pesan', 'Data Berhasil Disimpan !');
	
	redirect('admin/gedung/fasilitaslis');	
		}
		}
		///end
	public function daftar()
	{
		$data['gedung'] = $this->User->allgedung();
		$this->load->view('tamplate/admintamplate');
		$this->load->view('admin/daftar', $data);
		$this->load->view('tamplate/footer');
	}
	public function list()
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['status'] = $this->Sewa->getgedung();
		$this->load->view('tamplate/admintamplate',$data);
		$this->load->view('admin/listgedung',$data);
		$this->load->view('tamplate/footer');
	}
//scrip penolakan gedung
	public function tolak($id)
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();	
		$data['sewa'] = $this->db->get_where('sewa')->row_array();
		$where = array('id_order' =>$id);	
		$data['sewa'] = $this->Sewa->edit_data($where,'sewa')->result();
		$this->load->view('tamplate/header', $data);
		$this->load->view('admin/verifgedung' ,$data);
		$this->load->view('tamplate/footer');
}
public function update (){
	$id			= $this->input->post('id_order');
	//$statusboking			= 'Tolak';
	$tambahan		= $this->input->post('tambahan');
	


		$data = array(
		'tambahan'			=> $tambahan,
		'statusboking'		=> 'Tolak',
	);

	$where = array(
		'id_order'	=> $id
	);
	$this->Sewa->update_data($where,$data,'sewa');
	$this->session->set_flashdata('success', 'Data Berhasil Di Tolak !');
	redirect('admin/gedung/list');	
}

//scrip penolakan Fasilitas
	public function tolakfas($id)
	{
		$data['customer'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();	
		$data['sewa'] = $this->db->get_where('sewa')->row_array();
		$where = array('id_order' =>$id);	
		$data['sewa'] = $this->Sewa->edit_data($where,'sewa')->result();
		$this->load->view('tamplate/header', $data);
		$this->load->view('admin/fasilitasstatus' ,$data);
		$this->load->view('tamplate/footer');
}
public function updatefas (){
	$id			= $this->input->post('id_order');
	//$statusboking			= 'Tolak';
	$tambah		= $this->input->post('tambah');
	


		$data = array(
		'tambah'			=> $tambah,
		'statusfas'		=> 'Tolak',
	);

	$where = array(
		'id_order'	=> $id
	);
	$this->Sewa->update_data($where,$data,'sewa');
	$this->session->set_flashdata('success', 'Data Berhasil Di Tolak !');
	redirect('order');	
}

}
