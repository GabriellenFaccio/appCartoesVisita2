<?php
class cartoesVisitas_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function listarContatos(){ 
		$select = $this->db->get('cartoesvisitas');
	   	//$select = $this->db->query ("SELECT * FROM  cartoesvisitas");
	   	return $select->result(); 
	}

	public function inserirContatos($dados){
		$insert = $this->db->insert('cartoesvisitas', $dados);

	}

	public function getOneTable($idSelected){
		$select = $this->db->query("SELECT * FROM cartoesvisitas WHERE id = $idSelected");
		return $select->result();
	}

	public function getPesquisa($idSelected, $coluna){
		$select = $this->db->query("SELECT * FROM cartoesvisitas WHERE $coluna LIKE '%$idSelected%'");
		return $select->result();
	}

	public function updateOneItem($id, $dados){
		$dados = array(
			'nome' => 'Maria 123',
			'situacao' => 'Ativado',
			'email' => 'maria@maria.com',
			'telefone' => '1112224'
		);

		$this->db->where('id', $id);
		$this->db->update('cartoesvisitas', $dados);
		//$update = $this->db->query("UPDATE cartoesvisitas SET nome = \"$nome\", situacao = \"$sit\", email = \"$email\", telefone = \"$telefone\" WHERE id = $id");
	}

	public function deleteOneItem($id){

		$delete = $this->db->query("DELETE FROM cartoesvisitas WHERE id = $id");
	}
}
?>