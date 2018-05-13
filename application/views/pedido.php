<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<div class="row d-flex justify-content-center">
	<div class="py-3 text-center">
		<div class="d-block mx-auto">
			<i class="fas fa-clipboard-list fa-3x"></i>
		</div>
		<h3>Finalizar pedido</h3>
	</div>
</div>

<hr>

<div class="row d-flex justify-content-center">


	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link disabled" href="#">Forma de entrega: </a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" id="form-retirar-tab" data-toggle="pill" href="#form-retirar" role="tab" aria-controls="form-retirar" aria-selected="true">Retirar no local </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="form-entregar-tab" data-toggle="pill" href="#form-entregar" role="tab" aria-controls="form-entregar" aria-selected="false">Entregar em domicílio </a>
		</li>
	</ul>

</div>

<hr>

<!-- Formulários -->
<div class="tab-content" id="pills-tabContent">

	<!-- Formulário de retirar -->
	<div class="tab-pane fade show active" id="form-retirar" role="tabpanel" aria-labelledby="form-retirar-tab">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<form class="form-signin" id="form-retirar" name="form-retirar" method="post" action="<?php echo base_url('Pedido/add') ?>">
					<fieldset>
						<div class="row">
							<div class="form-label-group col-md-12">
								<label for="observacoes">Observações sobre o pedido</label>
								<input id="observacoes" name="observacoes" class="form-control" placeholder="Observações" required="" autofocus="" type="text">
							</div>

							<div class="form-label-group col-md-12">
								<label for="">Endereço para retirar o pedido</label>
								<input class="form-control" type="text" placeholder="Rua X, número Y, bairro Centro, BH" readonly>
							</div>

							<div class="form-label-group col-md-12">
								<label for="">Valor Total</label>
								<input class="form-control" type="text" placeholder="<?php echo 'R$ '.formatar_preco($_SESSION['valorTotal']); ?>" readonly>
							</div>

							<div class="col-md-12 p-3">
								<button id="btnRetirar" name="btnRetirar" class="btn btn-lg btn-primary btn-block col-md-12" type="submit" value="Register" name="register">Finalizar pedido</button>
							</div>
						</div>
					<fieldset>
				</form>
			</div>
		</div>

	</div>

	<!-- Formulário de entregar -->
	<div class="tab-pane fade" id="form-entregar" role="tabpanel" aria-labelledby="form-entregar-tab">

		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<form class="form-signin" id="form-entregar" name="form-entregar" method="post">
					<fieldset>
						<div class="row">

							<div class="form-label-group col-md-6">
								<label for="cidade">Cidade</label>
								<select class="custom-select" id="cidade">
									<option value="1">Belo Horizonte</option>
									<option value="2">Sabará</option>
								</select>
							</div>

							<div class="form-label-group col-md-6">
								<label for="bairro">Bairro</label>
								<select class="custom-select" id="bairro">
									<option value="1">Centro</option>
									<option value="2">Horto</option>
								</select>
							</div>

							<div class="form-label-group col-md-8">
								<label for="inputEndereco">Logradouro</label>
								<input id="inputEndereco" name="inputEndereco" class="form-control" placeholder="Logradouro" required="" type="text">
							</div>

							<div class="form-label-group col-md-4">
								<label for="inputNumero">Número</label>
								<input id="inputNumero" name="inputNumero" class="form-control" placeholder="Número" required="" type="text">
							</div>

							<div class="form-label-group col-md-12">
								<label for="observacoesEntregar">Observações sobre o pedido</label>
								<input id="observacoesEntregar" name="observacoesEntregar" class="form-control" placeholder="Observações" required="" autofocus="" type="text">
							</div>

							<div class="form-label-group col-md-12">
								<label for="inputSenharetirar">Valor Total</label>
								<input class="form-control" type="text" placeholder="<?php echo 'R$ '.formatar_preco($_SESSION['valorTotal']); ?>" readonly>
							</div>

							<div class="form-label-group col-md-6">
								<label for="bairro">Forma de pagamento</label>
								<select class="custom-select" id="bairro">
									<option value="1">Dinheiro</option>
									<option value="2">Cartão</option>
								</select>
							</div>

							<div class="col-md-12 p-3">
								<button id="btnEntregar" name="btnEntregar" class="btn btn-lg btn-primary btn-block col-md-12" type="submit" value="Register" name="register">Finalizar pedido</button>
							</div>

						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
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