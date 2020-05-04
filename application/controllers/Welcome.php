<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('welcome_message');
	}


	public function cadastrarNovoContato(){
		echo "Cadastrar Novo Contato";
		$this->load->view('formulario');
	}


	public function novoContato(){
		echo "Novo contato";
	}

	public function buscarContato(){
		echo "Buscar Contato";
	}
}
