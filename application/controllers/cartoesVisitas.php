<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartoesVisitas extends CI_Controller{
	public $nome;
	public $email;
	public $telefone;

	public function teste(){
		redirect('cartoesVisitas/buscarContato');
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('cartoesVisitas_model');
		$this->load->helper('url');
	}

	public function novoContato(){
		$this->nome 	= $this->input->post('nome');
		$this->email 	= $this->input->post('email');
		$this->telefone = $this->input->post('telefone');

		$this->cartoesVisitas_model->inserirContatos($this);

		redirect('cartoesVisitas/buscarContato');
	}

	public function cadastrarNovoContato(){
		$this->load->view('paginasContatos/cadastroContato');
	}

	public function buscarContato(){
		$arrayBanco['novosItens'] = $this->cartoesVisitas_model->listarContatos();
		$this->load->view('paginasContatos/listarContatos', $arrayBanco);
	}

	public function visualizarContato($idContato){
		$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idContato);
		$this->load->view('paginasContatos/visualizarContato', $tableBanco);
	}

	public function editarContato($idContato){
		$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idContato);
		$this->load->view('paginasContatos/editarContato', $tableBanco);
	}

	public function salvarUpdate($idContato){
		$novoNome 		= $this->input->post('newNome');
		$novoEmail 		= $this->input->post('newEmail');
		$novoTelefone 	= $this->input->post('newTelefone');
		$novaSituacao 	= $this->input->post('newSituacao');
		$this->cartoesVisitas_model->updateOneItem($idContato,$novoNome,$novoEmail,$novoTelefone,$novaSituacao);

		redirect('paginasContatos/editarContato');
		/*$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idSelected);
		$this->load->view('paginasContatos/editarContato', $tableBanco);*/
	}

	public function excluirContato(){
		$idSelected = filter_input(INPUT_GET, 'id');
		$this->cartoesVisitas_model->deleteOneItem($idSelected);

		redirect('welcome');
	}
}
?>