<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Cliente extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente_model');
	} 

	/*
	 * Adicionando cliente
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'nome' => $this->input->post('nome'),
				'telefone' => $this->input->post('telefone'),
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha'),
			);
			
			$cliente_id = $this->Cliente_model->add_cliente($params);
			return true;
		}
		else
		{            
			return false;
		}
	}  

	/*
	 * Editando cliente
	 */
	function edit($idCliente)
	{   
		// check if the cliente exists before trying to edit it
		$data['cliente'] = $this->Cliente_model->get_cliente($idCliente);
		
		if(isset($data['cliente']['idCliente']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'nome' => $this->input->post('nome'),
					'telefone' => $this->input->post('telefone'),
					'email' => $this->input->post('email'),
					'senha' => $this->input->post('senha'),
				);

				$this->Cliente_model->update_cliente($idCliente,$params);            
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
	 * Deletando cliente
	 */
	function remove($idCliente)
	{
		$cliente = $this->Cliente_model->get_cliente($idCliente);

		// check if the cliente exists before trying to delete it
		if(isset($cliente['idCliente']))
		{
			$this->Cliente_model->delete_cliente($idCliente);
			return true;
		}
		else
			return false;
	}
	
}
