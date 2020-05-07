<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartoesVisitas extends CI_Controller{
	public $nome;
	public $email;
	public $telefone;

	public function __construct(){
		parent::__construct();
		$this->load->model('cartoesVisitas_model');	
	}

	public function novoContato(){
		$this->nome = $this->input->post('nome');
		$this->email = $this->input->post('email');
		$this->telefone = $this->input->post('telefone');

		$this->cartoesVisitas_model->inserirContatos($this);

		$this->load->view('paginasContatos/home');
	}

	public function cadastrarNovoContato(){
		$this->load->view('paginasContatos/cadastroContato');
	}

	public function buscarContato(){
		$arrayBanco['novosItens'] = $this->cartoesVisitas_model->listarContatos();
		$this->load->view('paginasContatos/listarContatos', $arrayBanco);
	}

	public function visualizarContato(){
		$idSelected = filter_input(INPUT_GET, 'id');
		$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idSelected);

		$this->load->view('paginasContatos/visualizarContato', $tableBanco);
	}

	public function editarContato(){
		$idSelected = filter_input(INPUT_GET, 'id');
		$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idSelected);
		$this->load->view('paginasContatos/editarContato', $tableBanco);
	}

	public function salvarUpdate(){
		$idSelected = filter_input(INPUT_GET, 'id');
		$novoNome = filter_input(INPUT_POST, 'newNome');
		$novoEmail = filter_input(INPUT_POST, 'newEmail');
		$novoTelefone = filter_input(INPUT_POST, 'newTelefone');
		$novaSituacao = filter_input(INPUT_POST, 'newSituacao');
		$this->cartoesVisitas_model->updateOneItem($idSelected,$novoNome,$novoEmail,$novoTelefone,$novaSituacao);

		$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idSelected);
		$this->load->view('paginasContatos/editarContato', $tableBanco);
	}

	public function excluirContato(){
		$idSelected = filter_input(INPUT_GET, 'id');
		$this->cartoesVisitas_model->deleteOneItem($idSelected);

		$arrayBanco['novosItens'] = $this->cartoesVisitas_model->listarContatos();
		$this->load->view('paginasContatos/listarContatos', $arrayBanco);
	}
}
?>