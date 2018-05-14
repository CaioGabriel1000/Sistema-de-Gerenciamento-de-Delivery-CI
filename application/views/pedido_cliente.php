<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Barra de pesquisa --> 
<nav class="navbar stick-top navbar-expand">

	<div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="Pesquisar pedidos" aria-label="Pesquisar pedidos" aria-describedby="basic-addon2">
		<div class="input-group-append">
			<button class="btn btn-outline-secondary" type="button">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</div>
</nav>
<!-- Fim da barra de pesquisa -->

<!-- Pedidos -->
<div class="row d-flex justify-content-center">
	<!-- Exibindo pedidos -->
	<?php foreach($pedidos as $p){ ?>

		<div class="col-xs-12 col-md-8">
			<div class="my-3 p-3 bg-white rounded box-shadow">
				<h4>
					<?php 
						echo 'Pedido: '.$p['idPedido'].' - Status: '.$p['status'].' - Valor: R$ '.formatar_preco($p['valor']);
					?>	
				</h4>
				<p>Produtos:</p>
				<ul class="list-group col-md-12">
					<?php 
						$produtos = $this->Pedido_model->get_pedido_informacoes($p['idPedido']);
						foreach ($produtos as $pro) {
							echo '<li class="list-group-item">'. $pro['quantidade'] .' - '. $pro['nome_produto'] .'</li>';
						}
						if ($produtos[0]['logradouro'] != NULL) {
							echo '<li class="list-group-item list-group-item-success">';
							echo '<p>Forma de Pagamento: '.$produtos[0]['formaPagamento_pedido'].' - Entregador: '.$produtos[0]['entregador'].'</p>';
							echo '<p>'.$produtos[0]['logradouro'].', '.$produtos[0]['numero'].', '.$produtos[0]['complemento'].', '.$produtos[0]['bairro'].', '.$produtos[0]['cidade'].'</p>';
							echo '</li>';
						} else {
							echo '<li class="list-group-item list-group-item-success">';
							echo 'Retirar no local.';
							echo '</li>';
						}
					 ?>
				</ul>
			</div>
		</div>

	<?php } ?>

</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

</div>

</body>

</html>