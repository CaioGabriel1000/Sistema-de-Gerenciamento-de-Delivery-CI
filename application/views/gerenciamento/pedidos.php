<body>
<div class="container">

	<nav class="navbar navbar-expand justify-content-between navbar-light sticky-top" style="background-color: #d9d0f2;">

			<div class="col-md-3 rodape-item">
				<div class="row d-flex justify-content-center">
					<a href="<?php echo base_url('/gerenciamento') ?>">Home</a>
				</div>
			</div>
			<div class="col-md-3 rodape-item">
				<div class="row d-flex justify-content-center">
					<a href="<?php echo base_url('/pedido_gerenciamento') ?>">Pedidos</a>
				</div>
			</div>
			<div class="col-md-3 rodape-item">
				<div class="row d-flex justify-content-center">
					<a href="<?php echo base_url('/gerenciamento') ?>">Produtos</a>
				</div>
			</div>
			<div class="col-md-3 rodape-item">
				<div class="row d-flex justify-content-center">
					<a href="<?php echo base_url('/gerenciamento') ?>">Clientes</a>
				</div>			
			</div>

	</nav>
		
	<!-- Pedidos -->
	<div class="row d-flex justify-content-center">
		<!-- Exibindo todos os pedidos -->
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

</div>

</body>
</html>
