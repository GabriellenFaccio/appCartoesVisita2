<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartoesVisitas extends CI_Controller{
	public $nome;
	public $email;
	public $telefone;

	public function novoContato(){
		echo "Novo contato";

		$this->nome = $this->input->post('nome');
		$this->email = $this->input->post('email');
		$this->telefone = $this->input->post('telefone');

		echo "<br>Nome : ".$this->nome."<br>";
		echo "Email : ".$this->email."<br>";
		echo "Telefone : ".$this->telefone."<br>";
	}

	public function cadastrarNovoContato(){
		echo "Cadastrar Novo Contato <br>";
		$this->load->view('paginasContatos/cadastroContato');
	}

	public function buscarContato(){

		echo "Buscar Contato";
	}
}
?>