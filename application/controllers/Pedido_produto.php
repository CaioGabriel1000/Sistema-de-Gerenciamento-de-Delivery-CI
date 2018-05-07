<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Pedido_produto extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pedido_produto_model');
	}

	/*
	 * Adicionando pedido_produto
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'quantidade' => $this->input->post('quantidade'),
			);
			
			$pedido_produto_id = $this->Pedido_produto_model->add_pedido_produto($params);
			return true;
		}
		else
		{            
			return false;
		}
	}  

	/*
	 * Editando pedido_produto
	 */
	function edit($pedido_idPedido)
	{   
		// check if the pedido_produto exists before trying to edit it
		$data['pedido_produto'] = $this->Pedido_produto_model->get_pedido_produto($pedido_idPedido);
		
		if(isset($data['pedido_produto']['pedido_idPedido']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'quantidade' => $this->input->post('quantidade'),
				);

				$this->Pedido_produto_model->update_pedido_produto($pedido_idPedido,$params);            
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
	 * Deletando pedido_produto
	 */
	function remove($pedido_idPedido)
	{
		$pedido_produto = $this->Pedido_produto_model->get_pedido_produto($pedido_idPedido);

		// check if the pedido_produto exists before trying to delete it
		if(isset($pedido_produto['pedido_idPedido']))
		{
			$this->Pedido_produto_model->delete_pedido_produto($pedido_idPedido);
			return true;
		}
		else
			return false;
	}
	
}
