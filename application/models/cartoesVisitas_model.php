<?php
class cartoesVisitas_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function listarContatos(){ 
	   $query = $this->db->query ('SELECT * FROM  cartoesvisitas');
	   return $query->result(); 
	}

	public function inserirContatos($dados){
		$insert = $this->db->query("INSERT INTO cartoesvisitas(nome, situacao, email, telefone) VALUES ('$dados->nome','PF','$dados->email','$dados->telefone')");
	}
}
?>