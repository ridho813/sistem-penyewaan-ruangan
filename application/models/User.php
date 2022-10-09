<?php 
 if (!defined('BASEPATH'))exit('No direct script access allowed');

 class User extends CI_Model {
  
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
	$query = $this->db->get();
   
	return $query->result();
   }
  public function input($data)
  {
	  $this->db->insert('gedung', $data);
  }

  //input data fasilitas
  public function inputdatafasilitas($data)
  {
	  $this->db->insert('fasilitas', $data);
  }


  
 }
?>
