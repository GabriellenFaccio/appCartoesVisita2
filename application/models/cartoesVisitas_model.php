<?php
class cartoesVisitas_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function listarContatos(){ 
	   $query = $this->db->query ("SELECT * FROM  cartoesvisitas");
	   return $query->result(); 
	}

	public function inserirContatos($dados){
		$insert = $this->db->query("INSERT INTO cartoesvisitas(nome, situacao, email, telefone) VALUES ('$dados->nome','PF','$dados->email','$dados->telefone')");
	}

	public function getOneTable($idSelected){
		$select = $this->db->query("SELECT * FROM cartoesvisitas WHERE id = $idSelected");
		return $select->result();
	}

	public function updateOneItem($id, $nome, $email, $telefone, $sit){
		$update = $this->db->query("UPDATE cartoesvisitas SET nome = \"$nome\", situacao = \"$sit\", email = \"$email\", telefone = \"$telefone\" WHERE id = $id");
	}

	public function deleteOneItem($id){
		$delete = $this->db->query("DELETE FROM cartoesvisitas WHERE id = $id");
	}
}
?>