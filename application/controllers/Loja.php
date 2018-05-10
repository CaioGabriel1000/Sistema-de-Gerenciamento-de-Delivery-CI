<?php
 
class Loja extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->helper('funcoes_helper');
	}

	/*
	 * Página da loja
	 */
	function index()
	{
		$dados['produtos'] = $this->Produto_model->get_all_produto();
		$dados['title'] = "SGD - Loja";
		$this->load->view('components/head.php', $dados);
		$this->load->view('loja.php');
	}

	/*
	 * Adicionando produto ao carrinho
	 */
	function add()
	{
		$produto = array(
			'idProduto' => $this->input->post('idProduto'),
			'quantidade' => $this->input->post('idQuantidade'),
		);	

	}
	
}
