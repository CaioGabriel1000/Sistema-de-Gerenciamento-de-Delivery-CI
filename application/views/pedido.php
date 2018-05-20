<body>

<!-- Carregando o nav -->
<?php $this->load->view('components/nav'); ?>

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


<div class="row d-flex justify-content-center p-3">


	<ul class="nav nav-pills" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link disabled">
				Forma de entrega:
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" id="form-retirar-tab" data-toggle="pill" href="#form-retirar" role="tab" aria-controls="form-retirar" aria-selected="true">
				Retirar no local 
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="form-entregar-tab" data-toggle="pill" href="#form-entregar" role="tab" aria-controls="form-entregar" aria-selected="false">
				Entregar em domicílio 
			</a>
		</li>
	</ul>

</div>


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
								<label for="observacoesRetirar">Observações sobre o pedido</label>
								<input id="observacoesRetirar" name="observacoesRetirar" class="form-control" placeholder="Observações" autofocus="" type="text" maxlength="45">
							</div>

							<div class="form-label-group col-md-12">
								<label for="">Endereço para retirar o pedido</label>
								<input class="form-control" type="text" placeholder="Rua X, número Y. Bairro Centro. Belo Horizonte" readonly>
							</div>

							<div class="form-label-group col-md-12">
								<label for="">Valor Total</label>
								<input class="form-control" type="text" placeholder="<?php echo 'R$ '.formatar_preco($_SESSION['valorTotal']); ?>" readonly>
							</div>

							<div class="col-md-12 p-3">
								<button id="tipoEntrega" name="tipoEntrega" class="btn btn-lg btn-block col-md-12" type="submit" value="RETIRAR">
									<label> Finalizar pedido </label>
								</button>
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
				<form class="form-signin" id="form-entregar" name="form-entregar" method="post" action="<?php echo base_url('Pedido/add') ?>">
					<fieldset>
						<div class="row">

							<div class="form-label-group col-md-6">
								<label for="cidade">Cidade</label>
								<select class="custom-select" id="cidade_idCidade" name="cidade_idCidade">
									<?php 
										foreach ($endereco['cidades'] as $cidades => $c) {
											echo '
												<option value="'. $c['idCidade'] .'">'. $c['nome'] .'</option>
											';
										}
									 ?>
								 </select>
							</div>

							<div class="form-label-group col-md-6">
								<label for="bairro">Bairro</label>
								<select class="custom-select" id="bairro_idBairro" name="bairro_idBairro">
									<?php 
										foreach ($endereco['bairros'] as $bairros => $b) {
											echo '
												<option value="'. $b['idBairro'] .'">'. $b['nome'] .'</option>
											';
										}
									 ?>
								</select>
							</div>

							<div class="form-label-group col-md-8">
								<label for="logradouro">Logradouro</label>
								<input id="logradouro" name="logradouro" class="form-control" placeholder="Logradouro" required="" type="text" maxlength="45">
							</div>

							<div class="form-label-group col-md-4">
								<label for="numero">Número</label>
								<input id="numero" name="numero" class="form-control" placeholder="Número" required="" type="text" maxlength="10">
							</div>

							<div class="form-label-group col-md-6">
								<label for="complemento">Complemento</label>
								<input id="complemento" name="complemento" class="form-control" placeholder="Complemento" type="text" maxlength="45">
							</div>

							<div class="form-label-group col-md-6">
								<label for="observacoesEntrega">Observações sobre o pedido</label>
								<input id="observacoesEntrega" name="observacoesEntrega" class="form-control" placeholder="Observações" autofocus="" type="text">
							</div>

							<div class="form-label-group col-md-6">
								<label for="inputSenharetirar">Valor Total</label>
								<input class="form-control" type="text" placeholder="<?php echo 'R$ '.formatar_preco($_SESSION['valorTotal']); ?>" readonly>
							</div>

							<div class="form-label-group col-md-6">
								<label for="bairro">Forma de pagamento</label>
								<select class="custom-select" id="formaPagamento" name="formaPagamento">
									<option value="dinheiro">Dinheiro</option>
									<option value="cartão">Cartão</option>
								</select>
							</div>

							<div class="col-md-12 p-3">
								<button id="tipoEntrega" name="tipoEntrega" class="btn btn-lg btn-block col-md-12" type="submit" value="ENTREGAR">
									<label> Finalizar pedido </label>
								</button>
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

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>