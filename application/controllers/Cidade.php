<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Cidade extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cidade_model');
	}

	/*
	 * Adicionando cidade
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'nome' => $this->input->post('nome'),
			);
			
			$cidade_id = $this->Cidade_model->add_cidade($params);
			return true;
		}
		else
		{            
			return false;
		}
	}  

	/*
	 * Editando cidade
	 */
	function edit($idCidade)
	{   
		// check if the cidade exists before trying to edit it
		$data['cidade'] = $this->Cidade_model->get_cidade($idCidade);
		
		if(isset($data['cidade']['idCidade']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'nome' => $this->input->post('nome'),
				);

				$this->Cidade_model->update_cidade($idCidade,$params);            
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
	 * Deletando cidade
	 */
	function remove($idCidade)
	{
		$cidade = $this->Cidade_model->get_cidade($idCidade);

		// check if the cidade exists before trying to delete it
		if(isset($cidade['idCidade']))
		{
			$this->Cidade_model->delete_cidade($idCidade);
			return true;
		}
		else
			return false;
	}
	
}
