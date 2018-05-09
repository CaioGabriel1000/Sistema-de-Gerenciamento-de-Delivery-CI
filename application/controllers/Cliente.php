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
	 * Página de login e cadastro do cliente
	 */
	function index()
	{
		if(!isset($_SESSION['idCliente']))
		{
			$dados['title'] = "SGD - Login";
			$this->load->view('components/head.php', $dados);
			$this->load->view('entrar_cadastrar.php');
		} else {
			$this->conta();
		}
	}

	/*
	 * Página da conta do cliente
	 */
	function conta()
	{
		if(isset($_SESSION['idCliente']))
		{
			$dados['title'] = "SGD - Conta";
			$this->load->view('components/head.php', $dados);
			$this->load->view('cliente_conta.php');
		} else {
			$this->index();
		}
	}

	/*
	 * Adicionando cliente
	 * Verificando o email, caso já esteja cadastrado, o usuário é informado, caso ainda não esteja, os dados são salvos.
	 */
	function add()
	{
		$cliente = array(
			'nome' => $this->input->post('inputNomeCadastro'),
			'telefone' => $this->input->post('inputTelefoneCadastro'),
			'email' => $this->input->post('inputEmailCadastro'),
			'senha' => md5($this->input->post('inputSenhaCadastro')),
		);

		$cadastrado = $this->Cliente_model->verificar_email($cliente['email']);

		if ($cadastrado) {
			$this->session->set_flashdata('mensagem', 'Email já cadastrado! Por favor, entre em sua conta.');
			redirect('Cliente/index');
		} else {
			$this->Cliente_model->add_cliente($cliente);
			$this->session->set_flashdata('mensagem', 'Cadastro realizado com sucesso! Por favor, entre em sua conta.');
			redirect('Cliente/index');
		}
	}  

	/*
	 * Logando cliente
	 */
	function login()
	{

		$cliente = array(
		'email' => $this->input->post('inputEmailLogin'),
		'senha' => md5($this->input->post('inputSenhaLogin'))
		);

		$logando = $this->Cliente_model->logar_cliente($cliente['email'],$cliente['senha']);

		if ($logando) {
			$this->session->set_userdata('idCliente',$logando['idCliente']);
			$this->session->set_userdata('nome',$logando['nome']);
			$this->session->set_userdata('telefone',$logando['telefone']);
			$this->session->set_userdata('email',$logando['email']);

			$this->conta();

		} else {
			$this->session->set_flashdata('mensagem', 'Email ou senha incorretos!');
			redirect('Cliente/index');
		}
	}  

	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
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
