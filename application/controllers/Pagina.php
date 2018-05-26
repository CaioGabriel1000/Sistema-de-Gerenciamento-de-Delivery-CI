<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	protected $dados = array();

	// Página Inicial
	public function index()
	{
		$dados['title'] = "Ligeirinho";

		// Carregando o head, o corpo da página com o footer
		$this->load->view('components/head.php', $dados);
		$this->load->view('index.php');
	
	}

}
