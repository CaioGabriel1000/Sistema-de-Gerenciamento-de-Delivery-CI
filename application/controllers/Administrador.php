<?php
 
class Administrador extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador_model');
	} 

	/*
	 * Página de login e cadastro do admin
	 */
	public function index()
	{
		if(!isset($_SESSION['idAdministrador'])) {
			$dados['title'] = "SGD - Gerenciamento Login";
			$this->load->view('components/head.php', $dados);
			$this->load->view('gerenciamento/entrar.php');

		} else {
			$dados['title'] = "SGD - Gerenciamento Home";
			$this->load->view('gerenciamento/home.php', $dados);

		}
	}

	/*
	 * Logando admin
	 * Verificando se o admin esta cadastrado, caso esteja cadastrado o login é realizado salvando os dados da sessão
	 */
	public function login()
	{

		$admin = array(
			'email' => $this->input->post('inputEmailLogin'),
			'senha' => md5($this->input->post('inputSenhaLogin'))
		);

		$logando = $this->Administrador_model->logar_administrador($admin['email'],$admin['senha']);

		if ($logando) {

			$this->session->set_userdata('idAdministrador',$logando['idAdministrador']);
			$this->session->set_userdata('email',$logando['email']);

			$this->index();

		} else {

			$mensagem = 'Email ou senha incorretos!';
			echo json_encode($mensagem);

		}
	}  

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	
}
