<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Administrador extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador_model');
	} 

	/*
	 * Adicionando administrador
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'usuario' => $this->input->post('usuario'),
				'senha' => $this->input->post('senha'),
			);
			
			$administrador_id = $this->Administrador_model->add_administrador($params);
			return true;
		}
		else
		{            
			return false;        }
	}  

	/*
	 * Editando administrador
	 */
	function edit($idAdministrador)
	{   
		// check if the administrador exists before trying to edit it
		$data['administrador'] = $this->Administrador_model->get_administrador($idAdministrador);
		
		if(isset($data['administrador']['idAdministrador']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'usuario' => $this->input->post('usuario'),
					'senha' => $this->input->post('senha'),
				);

				$this->Administrador_model->update_administrador($idAdministrador,$params);            
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
	 * Deletando administrador
	 */
	function remove($idAdministrador)
	{
		$administrador = $this->Administrador_model->get_administrador($idAdministrador);

		// check if the administrador exists before trying to delete it
		if(isset($administrador['idAdministrador']))
		{
			$this->Administrador_model->delete_administrador($idAdministrador);
			return true;
		}
		else
			return false;
	}
	
}
