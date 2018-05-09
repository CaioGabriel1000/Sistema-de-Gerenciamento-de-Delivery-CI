<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<section class="text-center">
	<div class="container">
		<i class="fas fa-user fa-5x p-3"></i>
		<p><?php echo 'idCliente: ' . $_SESSION['idCliente']; ?></p>
		<p><?php echo 'nome: ' . $_SESSION['nome']; ?></p>
		<p><?php echo 'telefone: ' . $_SESSION['telefone']; ?></p>
		<p><?php echo 'email: ' . $_SESSION['email']; ?></p>
	</div>

	<form class="form-signin" id="form-logout" name="form-logout" role="form" method="post" action="<?php echo base_url('Cliente/logout'); ?>">
		<fieldset>
			<div class="row d-flex justify-content-center p-3">
				<div class="col-md-4">
					<button id="btnDeslogar" name="btnDeslogar" class="btn btn-lg btn-primary btn-block col-md-12" type="submit" value="Register" name="register">Logout</button>
				</div>
			</div>
		</fieldset>
	</form>

	<div class="d-flex justify-content-center">
		<p class="small">SGD - 2018</p>
	</div>

</section>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>