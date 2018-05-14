<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Formulários -->
<div class="tab-content" id="pills-tabContent">

	<!-- Formulário de Login -->
	<div class="tab-pane fade show active" id="form-login" role="tabpanel" aria-labelledby="form-login-tab">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<form class="form-signin" id="form-login" name="form-login" method="post">
					<fieldset>
						<div class="py-3 text-center">
							<div class="d-block mx-auto">
								<i class="fas fa-sign-in-alt fa-5x"></i>
							</div>
							<h2>Entrar</h2>
						</div>

						<div class="form-label-group">
							<label for="inputEmailLogin">Email</label>
							<input id="inputEmailLogin" name="inputEmailLogin" class="form-control" placeholder="Email" required="" autofocus="" type="email" maxlength="45">
						</div>

						<div class="form-label-group">
							<label for="inputSenhaLogin">Senha</label>
							<input id="inputSenhaLogin" name="inputSenhaLogin" class="form-control" placeholder="Senha" required="" type="password" value="" maxlength="45">
						</div>

						<div class="row d-flex justify-content-center p-3">
							<button id="btnLogar" name="btnLogar" class="btn btn-lg btn-success btn-block col-md-12" type="submit" value="Register" name="register">Entrar</button>
						</div>
					<fieldset>
				</form>
			</div>
		</div>

	</div>

	<!-- Formulário de Cadastro -->
	<div class="tab-pane fade" id="form-cadastro" role="tabpanel" aria-labelledby="form-cadastro-tab">

		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<form class="form-signin" id="form-cadastro" name="form-cadastro" method="post">
					<fieldset>
						<div class="py-3 text-center">
							<div class="d-block mx-auto">
								<i class="fas fa-edit fa-5x"></i>
							</div>
							<h2>Cadastrar</h2>
						</div>
						<div class="row">

							<div class="form-label-group col-md-6">
								<label for="inputNomeCadastro">Nome</label>
								<input id="inputNomeCadastro" name="inputNomeCadastro" class="form-control" placeholder="Nome" required="" type="text" maxlength="45">
							</div>

							<div class="form-label-group col-md-6">
								<label for="inputTelefoneCadastro">Telefone</label>
								<input id="inputTelefoneCadastro" name="inputTelefoneCadastro" class="form-control" placeholder="Telefone" required="" type="number">
							</div>

							<div class="form-label-group col-md-12">
								<label for="inputEmailCadastro">Email</label>
								<input id="inputEmailCadastro" name="inputEmailCadastro" class="form-control" placeholder="Email" required="" type="email" maxlength="45">
							</div>

							<div class="form-label-group col-md-12">
								<label for="inputSenhaCadastro">Senha</label>
								<input id="inputSenhaCadastro" name="inputSenhaCadastro" class="form-control" placeholder="Senha" required="" type="password" value="" maxlength="45">
							</div>

						</div>

						<div class="row d-flex justify-content-center p-3">
							<button id="btnCadastrar" name="btnCadastrar" class="btn btn-lg btn-success btn-block col-md-12" type="submit" value="Register" name="register">Cadastrar</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<hr>

<div class="row d-flex justify-content-center">
	<ul class="nav mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active text-secondary" id="form-login-tab" data-toggle="pill" href="#form-login" role="tab" aria-controls="form-login" aria-selected="true"><small>Entrar na sua conta.</small></a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-secondary" id="form-cadastro-tab" data-toggle="pill" href="#form-cadastro" role="tab" aria-controls="form-cadastro" aria-selected="false"><small>Não tem uma conta? Cadastre-se!</small></a>
		</li>
	</ul>
</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<script type="text/javascript">

$(document).ready(function(){

	//Logar
	$('#btnLogar').on('click',function(){

		// Pegando valores dos inputs
		var inputEmailLogin = $('#inputEmailLogin').val();
		var inputSenhaLogin = $('#inputSenhaLogin').val();

		// verificando se os campos estão preenchidos
		if (inputEmailLogin == "" || inputSenhaLogin == "") {
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Cliente/login
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Cliente/login')?>",
				dataType : "JSON",
				data : {
					inputEmailLogin:inputEmailLogin,
					inputSenhaLogin:inputSenhaLogin
				},
				success: function(data){
					alert(data);
				}
			});
			// Limpando o formulário
			document.getElementById("#form-login").reset();
			return false;
		}
	});

	//Cadastrar
	$('#btnCadastrar').on('click',function(){

		// Pegando valores dos inputs
		var inputNomeCadastro = $('#inputNomeCadastro').val();
		var inputTelefoneCadastro = $('#inputTelefoneCadastro').val();
		var inputEmailCadastro = $('#inputEmailCadastro').val();
		var inputSenhaCadastro = $('#inputSenhaCadastro').val();

		// verificando se os campos estão preenchidos
		if (inputNomeCadastro == "" || inputTelefoneCadastro == "" || inputEmailCadastro == "" || inputSenhaCadastro == "") {
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Cliente/add
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Cliente/add')?>",
				dataType : "JSON",
				data : {
					inputNomeCadastro:inputNomeCadastro,
					inputTelefoneCadastro:inputTelefoneCadastro,
					inputEmailCadastro:inputEmailCadastro,
					inputSenhaCadastro:inputSenhaCadastro
				},
				success: function(data){
					alert(data);
				}
			});
			// Limpando o formulário
			document.getElementById("#form-cadastro").reset();
			return false;
		}
	});
});

</script>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>