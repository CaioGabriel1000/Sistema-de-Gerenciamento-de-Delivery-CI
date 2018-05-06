<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Formulários -->
<div class="tab-content" id="pills-tabContent">
	<!-- Formulário de Login -->
	<div class="tab-pane fade show active" id="form-login" role="tabpanel" aria-labelledby="form-login-tab">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<form class="form-signin">
					<div class="py-3 text-center">
						<div class="d-block mx-auto mb-3">
							<i class="fas fa-sign-in-alt fa-5x"></i>
						</div>
						<h2>Entrar</h2>
					</div>

					<div class="form-label-group">
						<label for="inputEmail">Email</label>
						<input id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="" type="email">
					</div>

					<div class="form-label-group">
						<label for="inputPassword">Senha</label>
						<input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password">
					</div>

					<div class="checkbox mb-3">
						<label>
							<input value="lembrar" type="checkbox"> Lembrar
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
				</form>
			</div>
		</div>

	</div>

	<!-- Formulário de Cadastro -->
	<div class="tab-pane fade" id="form-cadastro" role="tabpanel" aria-labelledby="form-cadastro-tab">

		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<form class="form-signin">
					<div class="py-3 text-center">
						<div class="d-block mx-auto mb-3">
							<i class="fas fa-edit fa-5x"></i>
						</div>
						<h2>Cadastrar</h2>
					</div>
					<div class="row">

						<div class="form-label-group col-md-6">
							<label for="inputNomeCadastro">Nome</label>
							<input id="inputNomeCadastro" class="form-control" placeholder="Nome" required="" type="text">
						</div>

						<div class="form-label-group col-md-6">
							<label for="inputTelefoneCadastro">Telefone</label>
							<input id="inputTelefoneCadastro" class="form-control" placeholder="Telefone" required="" type="text">
						</div>

						<div class="form-label-group col-md-12">
							<label for="inputEmailCadastro">Email</label>
							<input id="inputEmail" class="form-control" placeholder="Email" required="" type="email">
						</div>

						<div class="form-label-group col-md-6">
							<label for="inputPasswordCadastro">Senha</label>
							<input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password">
						</div>

						<div class="form-label-group col-md-6">
							<label for="inputPasswordCadastro">Repita sua senha</label>
							<input id="inputPassword" class="form-control" placeholder="Repita sua senha" required="" type="password">
						</div>

					</div>

					<div class="row d-flex justify-content-center p-3">
						<button class="btn btn-lg btn-primary btn-block col-md-6" type="submit">Cadastrar</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<hr>

<div class="row d-flex justify-content-center">
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="form-login-tab" data-toggle="pill" href="#form-login" role="tab" aria-controls="form-login" aria-selected="true"><small>Entrar na sua conta.</small></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="form-cadastro-tab" data-toggle="pill" href="#form-cadastro" role="tab" aria-controls="form-cadastro" aria-selected="false"><small>Não tem uma conta? Cadastre-se!</small></a>
		</li>
	</ul>
</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>