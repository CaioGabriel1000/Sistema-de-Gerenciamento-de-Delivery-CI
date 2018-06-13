<?php
 
class Loja extends CI_Controller {

	protected $dados = array();

	/*
	 * Construtor adiciona o acesso aos produtos, funções de ajuda
	 * e caso o carrinho da sessão ainda não exista ele é criado
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->helper('funcoes_helper');
		if (!isset($_SESSION['carrinho'])) {
			$_SESSION['carrinho'] = array();
		}
		
	}

	/*
	 * Página da loja
	 * Selecionando todos os produtos ativos no banco e mostrando eles na página inicial da loja
	 */
	public function index()
	{
		$dados['produtos'] = $this->Produto_model->get_all_produto();
		$dados['title'] = "Ligeirinho - Loja";
		$this->load->view('components/head.php', $dados);
		$this->load->view('loja.php');
	}

	/*
	 * Página do carrinho de compras
	 * selecionando as informações dos produtos que estão no carrinho do usuário, juntamente com a quantidade que havia sido escolhida e passando essas informações como parâmetro para o carrinho
	 */
	public function carrinho() 
	{
		$dados['title'] = "Ligeirinho - Carrinho";
		$this->load->view('components/head.php', $dados);

		foreach ($_SESSION['carrinho'] as $idProduto => $i) {
			$dados['carrinho']['produtos'][$idProduto] = $this->Produto_model->get_produto($idProduto);
			$dados['carrinho']['produtos'][$idProduto]['quantidade'] = $i;
		}

		$this->load->view('carrinho.php', $dados);
	}

	/*
	 * Adicionando produto ao carrinho
	 */
	public function add()
	{

		$idProduto = $this->input->post('idProduto');
		$quantidade = $this->input->post('quantidade');

		if (isset($_SESSION['carrinho'][$idProduto])) {
			$_SESSION['carrinho'][$idProduto]  += $quantidade;
		} else {
			$_SESSION['carrinho'][$idProduto]  = $quantidade;
		}

		echo json_encode('Produto adicionado ao carrinho!');
		return true;
		
	}

	/*
	 * Removendo produto do carrinho
	 */
	public function removerCarrinho()
	{
		$idProduto = $this->input->post('idProduto');

		unset($_SESSION['carrinho'][$idProduto]);

		echo json_encode('Produto removido do carrinho!');
		return true;
	}
	
}
