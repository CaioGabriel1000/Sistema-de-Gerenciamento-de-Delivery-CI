<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// Cada função dessa classe carrega uma página.
	// Que deve ter sua rota correspondente no arquivo config/routes.php.

	// Página Inicial
	public function index()
	{
		$dados['title'] = "SGD - Home";

		// Carregando o head, o corpo da página e o footer
		$this->load->view('components/head', $dados);

		$this->load->view('home');

		$this->load->view('components/footer');
	
	}

	// Página do carrinho de compras
	public function carrinho()
	{
		$dados['title'] = "SGD - Carrinho";

		
		$this->load->view('components/head', $dados);

		$this->load->view('carrinho');

		$this->load->view('components/footer');
	
	}
}
