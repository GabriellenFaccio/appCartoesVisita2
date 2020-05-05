<?php
class New_models extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function listarContatos(){
		//simple_query retorn falso/true
		if($this->db->simple_query ('SELECT * FROM  exercicio1')){ 
	    	$query = $this->db->query ('SELECT * FROM  exercicio1');
	    	foreach ($query->result() as $row) {
	    		echo $row->nome."<br>";
		   	}
		} else { 
	    echo  "Consulta falhou!" ; 
		}
	}
}
?>