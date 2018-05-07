<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Bairro extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Bairro_model');
	}

	/*
	 * Adicionando bairro
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'cidade_idCidade' => $this->input->post('cidade_idCidade'),
				'nome' => $this->input->post('nome'),
			);
			
			$bairro_id = $this->Bairro_model->add_bairro($params);
			return true;
		}
		else
		{
			return false;
		}
	}  

	/*
	 * Editando bairro
	 */
	function edit($idBairro)
	{   
		// check if the bairro exists before trying to edit it
		$data['bairro'] = $this->Bairro_model->get_bairro($idBairro);
		
		if(isset($data['bairro']['idBairro']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'cidade_idCidade' => $this->input->post('cidade_idCidade'),
					'nome' => $this->input->post('nome'),
				);

				$this->Bairro_model->update_bairro($idBairro,$params);            
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
	 * Deletando bairro
	 */
	function remove($idBairro)
	{
		$bairro = $this->Bairro_model->get_bairro($idBairro);

		// check if the bairro exists before trying to delete it
		if(isset($bairro['idBairro']))
		{
			$this->Bairro_model->delete_bairro($idBairro);
			return true;
		}
		else
			return false;
	}
	
}
