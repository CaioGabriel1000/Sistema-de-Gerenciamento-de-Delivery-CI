<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<div class="row d-flex justify-content-center">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			  <div class="row">
			  	<div class="col-md-12 lead p-3">Minha Conta<hr></div>
			  </div>
			  <div class="row">
				<div class="col-md-4 text-center">
				  <i class="fas fa-user fa-5x p-3"></i>
				</div>
				<div class="col-md-8">
				  <div class="row">
					<div class="col-md-12">
					  <h1 class="only-bottom-margin"><?php echo $_SESSION['nome']; ?></h1>
					</div>
				  </div>
				  <div class="row">
					<div class="col-md-6">
					  <span class="text-muted">Email: </span> <?php echo $_SESSION['email']; ?> <br>
					  <span class="text-muted">Telefone: </span> <?php echo $_SESSION['telefone']; ?> <br> <br>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-12">
					<form class="form-signin" id="form-logout" name="form-logout" role="form" method="post" action="<?php echo base_url('Cliente/logout'); ?>">
						<fieldset>
							<hr><button class="btn btn-default pull-right" id="btnDeslogar" name="btnDeslogar" type="submit" value="Register" name="register"><i class="fas fa-times"></i> Sair</button>
						</fieldset>
					</form>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>