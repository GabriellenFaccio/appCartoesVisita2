<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartoesVisitas extends CI_Controller{
	public $nome;
	public $email;
	public $telefone;
	public $situacao;

	public function __construct(){
		parent::__construct();
		$this->load->model('cartoesVisitas_model');
		$this->load->helper('url');
	}

	public function novoContato(){
		$arrayDados['nome']	 	= $this->input->post('nome');
		$arrayDados['email']    = $this->input->post('email');
		$arrayDados['telefone'] = $this->input->post('telefone');
		$arrayDados['situacao'] = "Ativo";

		$this->cartoesVisitas_model->inserirContatos($arrayDados);

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
		$arrayDados['nome'] 		= $this->input->post('nome');
		$arrayDados['email'] 		= $this->input->post('email');
		$arrayDados['telefone'] 	= $this->input->post('telefone');
		$arrayDados['situacao'] 	= $this->input->post('situacao');
		$this->cartoesVisitas_model->updateOneItem($idContato, $arrayDados);

		redirect('cartoesVisitas/buscarContato');
		/*$tableBanco['itemSelect'] = $this->cartoesVisitas_model->getOneTable($idSelected);
		$this->load->view('paginasContatos/editarContato', $tableBanco);*/
	}

	public function excluirContato($idContato){
		$this->cartoesVisitas_model->deleteOneItem($idContato);

		redirect('welcome');
	}

	public function pesquisarContato(){
		$novaPesquisa = $this->input->post('pesquisar');
		$coluna = "nome";
		$selectBanco['novosItens'] = $this->cartoesVisitas_model->getPesquisa($novaPesquisa, $coluna);
		$this->load->view('paginasContatos/listarContatos', $selectBanco);
	}
}
?>