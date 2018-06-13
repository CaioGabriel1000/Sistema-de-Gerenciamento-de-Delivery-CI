<?php
 
class Produto extends CI_Controller{

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
	}

	/*
	 * Página de cadastro de produtos
	 */
	public function index()
	{
		if(isset($_SESSION['idAdministrador'])) {

			$dados['title'] = "SGD - Produto Cadastro";
			$this->load->view('components/head_gerenciamento.php', $dados);
			$this->load->view('gerenciamento/produto_cadastro.php');

		} else {

			redirect('/gerenciamento');

		}
	}

	/*
	 * Página de manutencao de produtos
	 */
	public function manutencao()
	{
		if(isset($_SESSION['idAdministrador'])) {

			$dados['title'] = "SGD - Manutenção";
			$this->load->view('components/head_gerenciamento.php', $dados);

			$produtos = $this->Produto_model->get_all_produto();

			$dados['produtos'] = $produtos;
			
			$this->load->view('gerenciamento/produto_manutencao.php', $dados);

		} else {

			redirect('/gerenciamento');

		}
	}

	/*
	 * Adicionando produto
	 */
	public function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'nome' => $this->input->post('nome'),
				'preco' => floatval($this->input->post('preco')) * 100,
				'descricao' => $this->input->post('descricao'),
				'quantidade' => $this->input->post('quantidade'),
				'imagem' => $this->input->post('imagem'),
			);
			
			$produto_id = $this->Produto_model->add_produto($params);
			
			$mensagem = 'Produto cadastrado com sucesso!';
			echo json_encode($mensagem);
		}
		else
		{            
			$mensagem = 'Ocorreu um erro ao enviar os dados!';
			echo json_encode($mensagem);
		}
	}  

	/*
	 * Editando produto
	 */
	public function edit()
	{   
		$idProduto = $this->input->post('idProduto');
		// check if the produto exists before trying to edit it
		$data['produto'] = $this->Produto_model->get_produto($idProduto);
		
		if(isset($data['produto']['idProduto']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'nome' => $this->input->post('nome'),
					'preco' => floatval($this->input->post('preco')) * 100,
					'descricao' => $this->input->post('descricao'),
					'quantidade' => $this->input->post('quantidade'),
				);

				$this->Produto_model->update_produto($idProduto,$params);  

				$mensagem = 'Produto alterado com sucesso!';
				echo json_encode($mensagem);
				return true;
			}
			else
			{
				$mensagem = 'Ocorreu um erro ao enviar os dados!';
				echo json_encode($mensagem);
				return true;
			}
		}
		else
			$mensagem = 'Selecione um produto para editar!';
			echo json_encode($mensagem);
			return true;
	}

	/*
	 * Editando produto
	 */
	public function getProduto()
	{
		$idProduto = $this->input->post('idProduto');
		$produto = $this->Produto_model->get_produto($idProduto);

		echo json_encode($produto);

	}
	
}