<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Pedido extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pedido_model');
	}

	/*
	 * Adicionando pedido
	 */
	function add()
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
			
			$pedido_id = $this->Pedido_model->add_pedido($params);
			return true;
		}
		else
		{
			return false;
		}
	}  

	/*
	 * Editando pedido
	 */
	function edit($idPedido)
	{   
		// check if the pedido exists before trying to edit it
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

		// check if the pedido exists before trying to delete it
		if(isset($pedido['idPedido']))
		{
			$this->Pedido_model->delete_pedido($idPedido);
			return true;
		}
		else
			return false;
	}
	
}
