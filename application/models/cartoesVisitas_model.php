<?php
class cartoesVisitas_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function listarContatos(){ 
	   $query = $this->db->query ('SELECT * FROM  cartoesvisitas');
	   return $query; 
	}
}
?>