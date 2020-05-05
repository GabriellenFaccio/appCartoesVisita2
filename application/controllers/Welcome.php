<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		parent::__construct();
	  //$this->db->reconnect();	
	  //realiza um ping no servidor antes de enviar outras consultas

	  //$this->db->close(); 
	  //codeig cuida do fechamento inteligente de conexões e podemos apenas usar este para fechar.
		$this->load->view('paginasContatos/home');
	}
}
