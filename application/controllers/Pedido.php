<?php
 
class Pedido extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pedido_model');
		$this->load->helper('funcoes_helper');
		$this->load->model('Entrega_model');
	}

	/*
	 * Pagina de finalização do pedido
	 * caso o cliente não esteja logado ele é direcionado para o login do cliente
	 */
	function index() 
	{
		if(isset($_SESSION['idCliente'])) {

		$dados['title'] = "SGD - Pedido";
		$this->load->view('components/head.php', $dados);
		$this->load->view('pedido.php');

		} else {

			redirect('/cliente');

		}
	}

	/*
	 * Adicionando pedido 
	 * retirar no local
	 */
	function add()
	{	
		$params = array(
			'cliente_idCliente' => $_SESSION['idCliente'],
			'valor' => $_SESSION['valorTotal'],
			'observacoes' => $this->input->post('observacoes'),
			'status' => 'A',
		);
		
		$pedido_id = $this->Pedido_model->add_pedido($params);

		redirect('/cliente_pedidos');
	}  

	/*
	 * Editando pedido
	 */
	function edit($idPedido)
	{   
		$data['pedido'] = $this->Pedido_model->get_pedido($idPedido);
		
		if(isset($data['pedido']['idPedido']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'cliente_idCliente' => $this->input->post('cliente_idCliente'),
					'entrega_idEntrega' => $this->input->post('entrega_idEntrega'),
					'valor' => $this->input->post('valor'),
					'formaPagamento' => $this->input->post('formaPagamento'),
					'observacoes' => $this->input->post('observacoes'),
					'status' => $this->input->post('status'),
					'criacao' => $this->input->post('criacao'),
					'atualizacao' => $this->input->post('atualizacao'),
				);

				$this->Pedido_model->update_pedido($idPedido,$params);            
				return true;
			}
			else
			{
				return false;
			}
		}
		else
			return false;
	} 

	/*
	 * Deletando pedido
	 */
	function remove($idPedido)
	{
		$pedido = $this->Pedido_model->get_pedido($idPedido);

		if(isset($pedido['idPedido']))
		{
			$this->Pedido_model->delete_pedido($idPedido);
			return true;
		}
		else
			return false;
	}
	
}
