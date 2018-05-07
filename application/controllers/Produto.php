<?php
/* 
 * Gerado com CRUDigniter v3.2 
 */
 
class Produto extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
	}

	/*
	 * Adicionando produto
	 */
	function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'nome' => $this->input->post('nome'),
				'preco' => $this->input->post('preco'),
				'descricao' => $this->input->post('descricao'),
				'quantidade' => $this->input->post('quantidade'),
			);
			
			$produto_id = $this->Produto_model->add_produto($params);
			return true;
		}
		else
		{            
			return false;
		}
	}  

	/*
	 * Editando produto
	 */
	function edit($idProduto)
	{   
		// check if the produto exists before trying to edit it
		$data['produto'] = $this->Produto_model->get_produto($idProduto);
		
		if(isset($data['produto']['idProduto']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'nome' => $this->input->post('nome'),
					'preco' => $this->input->post('preco'),
					'descricao' => $this->input->post('descricao'),
					'quantidade' => $this->input->post('quantidade'),
				);

				$this->Produto_model->update_produto($idProduto,$params);            
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
	 * Deletando produto
	 */
	function remove($idProduto)
	{
		$produto = $this->Produto_model->get_produto($idProduto);

		// check if the produto exists before trying to delete it
		if(isset($produto['idProduto']))
		{
			$this->Produto_model->delete_produto($idProduto);
			return true;
		}
		else
			return false;
	}
	
}
