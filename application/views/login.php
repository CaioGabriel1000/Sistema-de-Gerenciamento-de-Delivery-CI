<!-- div container agrupa todos os elementos do body, será fechada apenas no footer -->
<div class="container">

<!-- Ícone de carrinho e título -->
<div class="py-3 text-center">
	<div class="d-block mx-auto mb-3">
		<i class="fas fa-sign-in-alt fa-5x"></i>
	</div>
	<h2>Login</h2>
</div>

<div class="row justify-content-md-center">
	<div class="col-md-8 col-xs-10">
		<form class="form-signin">
			<label for="inputEmail" class="sr-only">Telefone</label>
				<input id="inputLogin" class="form-control" placeholder="Telefone" required="" autofocus="" type="text">
			<label for="inputPassword" class="sr-only">Senha</label>
				<input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password">
			<div class="checkbox mb-3">
			<label>
				<input value="remember-me" type="checkbox"> Lembrar
			</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		</form>
	</div>
</div>
</div>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>