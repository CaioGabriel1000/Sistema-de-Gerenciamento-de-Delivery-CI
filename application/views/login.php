
<!-- Ícone de carrinho e título -->
<div class="py-3 text-center">
	<div class="d-block mx-auto mb-3">
		<i class="fas fa-sign-in-alt fa-5x"></i>
	</div>
	<h2>Login</h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#signin">Entrar</a></li>
				<li><a data-toggle="tab" href="#signup">Cadastrar</a></li>
			</ul>

			<div class="tab-content">
				<div id="signin" class="tab-pane fade in active">
					<h3>Entrar</h3>
					<form role="Form" method="POST" action="" accept-charset="UTF-8">
						<div class="form-group">
							<input type="text" name="email" placeholder="Telefone" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Senha..." class="form-control">
						</div>
						<div class="form-group">
							<label>
								<input type="checkbox" name="remember"> Lembrar
							</label>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Entrar</button>
						</div>
					</form>
				</div>
				<div id="signup" class="tab-pane fade">
					<h3>Cadastrar</h3>
					<p>Ainda não tem uma conta? Cadastre-se!</p>
					<form role="Form" method="POST" action="" accept-charset="UTF-8">
						<div class="form-group">
							<input type="text" name="email" placeholder="Telefone..." class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Senha..." class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="password2" placeholder="Repita sua senha..." class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Cadastrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>