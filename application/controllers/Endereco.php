<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Endereco extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Endereco_model');
	}

	/*
	 * Adicionando endereco
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'bairro_idBairro' => $this->input->post('bairro_idBairro'),
				'logradouro' => $this->input->post('logradouro'),
				'numero' => $this->input->post('numero'),
				'complemento' => $this->input->post('complemento'),
			);
			
			$endereco_id = $this->Endereco_model->add_endereco($params);
			return true;
		}
		else
		{
			return false;
		}
	}  

	/*
	 * Editando endereco
	 */
	function edit($idEndereco)
	{   
		// check if the endereco exists before trying to edit it
		$data['endereco'] = $this->Endereco_model->get_endereco($idEndereco);
		
		if(isset($data['endereco']['idEndereco']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'bairro_idBairro' => $this->input->post('bairro_idBairro'),
					'logradouro' => $this->input->post('logradouro'),
					'numero' => $this->input->post('numero'),
					'complemento' => $this->input->post('complemento'),
				);

				$this->Endereco_model->update_endereco($idEndereco,$params);            
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
	 * Deletando endereco
	 */
	function remove($idEndereco)
	{
		$endereco = $this->Endereco_model->get_endereco($idEndereco);

		// check if the endereco exists before trying to delete it
		if(isset($endereco['idEndereco']))
		{
			$this->Endereco_model->delete_endereco($idEndereco);
			return true;
		}
		else
			return false;
	}
	
}
