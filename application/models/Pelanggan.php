<?php 
 if (!defined('BASEPATH'))exit('No direct script access allowed');

 class Pelanggan extends CI_Model {
  
  function __construct() {
   parent::__construct();
  }
  //menampilkan fasilitas
  function getall() {
   $this->db->select('*');
   $this->db->from('fasilitas');
   $query = $this->db->get();
   
   return $query->result();
  }

  //menampilkan db gedung dan joinan
  function allgedung() {
	$this->db->select('*');
	$this->db->from('gedung');
	$this->db->join('fasilitas', 'fasilitas.idfasilitas = gedung.idfasilitas');
	// $this->db->join('sewa', 'sewa.idgedung = gedung.idgedung');
	return $this->db->get()->result_array();
   }
  public function tambah($data)
  {
	  $this->db->insert('user', $data);
  }

  //input data fasilitas
  public function inputdatafasilitas($data)
  {
	  $this->db->insert('fasilitas', $data);
  }
//scrip sewa gedung
  public function aksisewa($id)
  {

		$statusboking = 'pending';
		$data= array(
			'idgedung' => $id,
			'iduser'   => $this->session->userdata('iduser'),
			'id_fas' => $this->input->post('id_fas'),
			'tanggalsewa' => $this->input->post('tanggalsewa'),
			'tanggalkembali' => $this->input->post('tanggalkembali'),
			'tambahfasilitas' => $this->input->post('tambahfasilitas'),
			'judul_rapat' => $this->input->post('judul_rapat'),
			'penanggung_jwb' => $this->input->post('penanggung_jwb'),
		
		);
		$this->db->set('statusboking', $statusboking);
		//$this->db->where('idgedung', $id);
		//$this->db->update('gedung');
		$this->db->insert('sewa', $data);
  }


  //menampilkan validasi data benar
  function getbenargById() {
	$this->db->select('*');
	$this->db->from('sewa');
	$this->db->where('iduser');
	
	return $this->db->get()->result_array();
   }
//jadwl boking


  //menampilkan jadwal
  function jadwalsewa() {
	$this->db->select('*');
	$this->db->from('sewa');
	//$this->db->where('idgedung');
	//$this->db->join('sewa', 'sewa.idgedung = gedung.idgedung');
	$this->db->order_by('sewa.idgedung', 'DESC');
	return $this->db->get()->result_array();
   }



//menampilkan gedung id
public function getgedungById($id)
	{
		return $this->db->get_where('gedung', ['idgedung' => $id])->row_array();
	}

	function cekLogin2($email, $password){
		$sql = "SELECT * FROM user
						WHERE email = '$email' and password = '$password'";
		$user1 = $this->db->query($sql)->row_array();
		return $user1;
}
  
 }
?>
