<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Entrega extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Entrega_model');
	}

	/*
	 * Adicionando entrega
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'endereco_idEndereco' => $this->input->post('endereco_idEndereco'),
				'entregador' => $this->input->post('entregador'),
				'status' => $this->input->post('status'),
				'observacoes' => $this->input->post('observacoes'),
				'criacao' => $this->input->post('criacao'),
				'atualizacao' => $this->input->post('atualizacao'),
			);
			
			$entrega_id = $this->Entrega_model->add_entrega($params);
			return true;
		}
		else
		{
			return false;
		}
	}  

	/*
	 * Editando entrega
	 */
	function edit($idEntrega)
	{   
		// check if the entrega exists before trying to edit it
		$data['entrega'] = $this->Entrega_model->get_entrega($idEntrega);
		
		if(isset($data['entrega']['idEntrega']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'endereco_idEndereco' => $this->input->post('endereco_idEndereco'),
					'entregador' => $this->input->post('entregador'),
					'status' => $this->input->post('status'),
					'observacoes' => $this->input->post('observacoes'),
					'criacao' => $this->input->post('criacao'),
					'atualizacao' => $this->input->post('atualizacao'),
				);

				$this->Entrega_model->update_entrega($idEntrega,$params);            
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
	 * Deletando entrega
	 */
	function remove($idEntrega)
	{
		$entrega = $this->Entrega_model->get_entrega($idEntrega);

		// check if the entrega exists before trying to delete it
		if(isset($entrega['idEntrega']))
		{
			$this->Entrega_model->delete_entrega($idEntrega);
			return true;
		}
		else
			return false;
	}
	
}
