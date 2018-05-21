<?php
 
class Pedido extends CI_Controller {

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('funcoes_helper');
		$this->load->model('Pedido_model');
		$this->load->model('Pedido_produto_model');
		$this->load->model('Produto_model');
		$this->load->model('Endereco_model');

		// Variável que contem o nome do entregador padrão
		if (!isset($_SESSION['entregadorPadrao'])) {
			$_SESSION['entregadorPadrao'] = 'Motoboy';
		}

	}

	/*
	 * Pagina de finalização do pedido
	 * caso o cliente não esteja logado ele é direcionado para o login do cliente
	 */
	public function index() 
	{
		if(isset($_SESSION['idCliente'])) {

			$dados['title'] = "SGD - Pedido";
			$this->load->view('components/head.php', $dados);

			$dados['endereco']['cidades'] = $this->Endereco_model->get_all_cidade();
			$dados['endereco']['bairros'] = $this->Endereco_model->get_all_bairro();		

			$this->load->view('pedido.php', $dados);

		} else {

			redirect('/entrar');

		}
	}

	/*
	 * Pagina com os pedidos realizados pelo cliente
	 * caso o cliente não esteja logado ele é direcionado para o login do cliente
	 */
	public function cliente() 
	{
		if(isset($_SESSION['idCliente'])) {

			$dados['title'] = "SGD - Pedidos Cliente";
			$this->load->view('components/head.php', $dados);

			$pedidos = $this->Pedido_model->get_all_pedido_cliente($_SESSION['idCliente']);

			$dados['pedidos'] = $pedidos;
			
			$this->load->view('pedido_cliente.php', $dados);

		} else {

			redirect('/entrar');

		}
	}

	/*
	 * Adicionando pedido 
	 * Caso o pedido seja para entregar, o endereço e entrega são cadastrados antes do pedido
	 * caso o pedido seja diferente de entrega, ou seja, retirar no local, o endereço, entrega e forma de pagamento do pedido ficam nulos
	 * após o cadastro do pedido o cliente é direcionado para o cliente_pedidos
	 */
	public function add()
	{	
		$tipoEntrega = $this->input->post('tipoEntrega');

		if ($tipoEntrega === 'ENTREGAR') {

			$this->load->model('Entrega_model');

			$endereco = array(
				'logradouro' => $this->input->post('logradouro'),
				'numero' => $this->input->post('numero'),
				'complemento' => $this->input->post('complemento'),
				'bairro_idBairro' => $this->input->post('bairro_idBairro'), 
			);
			
			$endereco_id = $this->Endereco_model->add_endereco($endereco);

			$entrega = array(
				'entregador' => $_SESSION['entregadorPadrao'],
				'observacoes' => null,
				'status' => 'aberto',
				'endereco_idEndereco' => $endereco_id, 
			);

			$entrega_id = $this->Entrega_model->add_entrega($entrega);

			$pedido = array(
				'valor' => $_SESSION['valorTotal'],
				'formaPagamento' => $this->input->post('formaPagamento'),
				'observacoes' => $this->input->post('observacoesEntrega'),
				'status' => 'aberto',
				'cliente_idCliente' => $_SESSION['idCliente'],
				'entrega_idEntrega' => $entrega_id,
			);
			
			$pedido_id = $this->Pedido_model->add_pedido($pedido);

			foreach ($_SESSION['carrinho'] as $idProduto => $i) {
				$pedido_produtos['quantidade'] = $i + 0;
				$pedido_produtos['produto_idProduto'] = $idProduto ;
				$pedido_produtos['pedido_idPedido'] = $pedido_id;

				$this->Pedido_produto_model->add_pedido_produto($pedido_produtos);

			}
			unset($_SESSION['carrinho']);
			redirect('/pedido_cliente');

		} else {

			$pedido = array(
				'cliente_idCliente' => $_SESSION['idCliente'],
				'valor' => $_SESSION['valorTotal'],
				'observacoes' => $this->input->post('observacoes'),
				'status' => 'aberto',
			);
			
			$pedido_id = $this->Pedido_model->add_pedido($pedido);

			foreach ($_SESSION['carrinho'] as $idProduto => $i) {
				$pedido_produtos['quantidade'] = $i + 0;
				$pedido_produtos['produto_idProduto'] = $idProduto ;
				$pedido_produtos['pedido_idPedido'] = $pedido_id;

				$this->Pedido_produto_model->add_pedido_produto($pedido_produtos);

			}
			unset($_SESSION['carrinho']);
			redirect('/pedido_cliente');

		}
	} 

	/*
	 * Pagina com todos os pedidos abertos exibidos no gerenciamento
	 * caso o admin não esteja logado ele é direcionado para o login do admin
	 */
	public function gerenciamento($status) 
	{

		if(isset($_SESSION['idAdministrador'])) {

			$dados['title'] = "SGD - Pedidos";
			$this->load->view('components/head_gerenciamento.php', $dados);

			$pedidos = $this->Pedido_model->get_pedido_status($status);

			$dados['pedidos'] = $pedidos;
			
			$this->load->view('gerenciamento/pedidos.php', $dados);

		} else {

			redirect('/gerenciamento');

		}
	}

	/*
	 * Editando pedido
	 */
	public function finalizar()
	{   
		$idPedido = $this->input->post('idPedido');

		if(isset($_SESSION['idAdministrador'])) {
		
			if($idPedido)
			{
				$params = array(
					'status' => 'finalizado',
				);

				$this->Pedido_model->update_pedido($idPedido,$params);

				$mensagem = 'Pedido finalizado!';        
				echo json_encode($mensagem);
			}
			else
				$mensagem = 'Pedido não encontrado!';        
				echo json_encode($mensagem);

		} else {

			redirect('/gerenciamento');

		}
	} 
	
}
