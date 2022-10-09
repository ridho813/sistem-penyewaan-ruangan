<?php 
 if (!defined('BASEPATH'))exit('No direct script access allowed');

 class Sewa extends CI_Model {
  
  function __construct() {
   parent::__construct();
  }
//menampilkan Order id
	public function getorderById($id)
	{
		return $this->db->get_where('sewa', ['id_order' => $id])->row_array();
	}
//menampilkan data sewa
public function konfirmstatus()
{
			$this->db->select('*');
		$this->db->from('orderfasilitas');
		return $this->db->get()->result_array();

	}

	//menampilkan data sewa
public function getgedung()
{
			$this->db->select('*');
		$this->db->from('sewa');
		//$this->db->join('orderfasilitas', 'orderfasilitas.id_order = sewa.id_order');
		return $this->db->get()->result_array();

	}
	//menampilkan data sewa
	public function getfasilitas()
	{
				$this->db->select('*');
			$this->db->from('orderfasilitas');
			$this->db->join('sewa', 'sewa.id_order = orderfasilitas.id_order');
			return $this->db->get()->result_array();
	
		}
//verifikasi data gedung
		public function getorderByIdsewa($id){
			$statusboking = 'Verifikasi';

			$data= array(
				'statusboking' => 'Verifikasi',			
			);
		$this->db->set('statusboking');
		$this->db->where('id_order', $id);
		//$this->db->update('gedung');
		$this->db->update('sewa', $data);
		}
   
//verifikasi Tolak Gedung
function verifikasigedung($where, $data)
{
	$statusfasilitas = 'Verifikasi';

	 $this->db->set('statusboking', $statusfasilitas);
	  $this->db->update('sewa', $data);
}

public function edit_data($where,$table){
	return $this->db->get_where($table,$where);
}
public function update_data($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table,$data);	
}

//verifikasi data Fasilitas
public function getorderByverif($id){
	$statusboking = 'Verifikasi';

	$data= array(
		'statusfas' => 'Verifikasi',			
	);
$this->db->set('statusfas');
$this->db->where('id_order', $id);
//$this->db->update('gedung');
$this->db->update('sewa', $data);
}
 }
