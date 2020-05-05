<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public $nome;
	public $telefone;
	public $email;


	public function index(){
		$this->load->view('welcome_message');
	}


	public function cadastrarNovoContato(){
		echo "Cadastrar Novo Contato <br>";
		$this->load->view('formulario');
	}


	public function novoContato(){
		echo "Novo contato";

		$this->nome = $this->input->post('nome');
		$this->email = $this->input->post('email');
		$this->telefone = $this->input->post('telefone');

		echo "<br>Nome : ".$this->nome."<br>";
		echo "Email : ".$this->email."<br>";
		echo "Telefone : ".$this->telefone."<br>";
	}

	public function buscarContato(){
		echo "Buscar Contato";
	}
}
