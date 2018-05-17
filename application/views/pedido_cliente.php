<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Ícone de carrinho e título -->
<div class="py-3 text-center">
	<div class="d-block mx-auto mb-3">
		<i class="fas fa-clipboard-list fa-5x"></i>
	</div>
	<h2>Meus Pedidos</h2>
</div>

<!-- Pedidos -->
<div class="row d-flex justify-content-center">
	<!-- Exibindo pedidos -->
		<?php 
		// Se existem pedidos
		if ($pedidos) {

			/*Exibindo cada pedido*/
			foreach($pedidos as $p){ 

		?>

			<div class="col-xs-12 col-md-8">
				<div class="my-3 p-3 bg-white rounded box-shadow">
					<h3>
						<?php 
							echo 'Pedido: '.$p['idPedido'].' - Status: '.$p['status'].' - Valor: R$ '.formatar_preco($p['valor']);
						?>	
					</h3>
					<hr>
					<h6>
						<?php 
							echo 'Atualizado em: '.formatarData($p['criacao']);
						 ?>
					</h6>
					<p>Produtos:</p>
					<ul class="list-group col-md-12">
						<?php 
							/*Exibindo os produtos que são daquele pedido*/
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

		<?php
			} /*Fechando o foreach*/
		/*Caso não exista um pedido*/
		} else {
			echo '
			<ul class="list-group col-md-6 p-2">
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">Você ainda não fez nenhum pedido, entre na loja!</h6>
					</div>
				</li>
			</ul>
			';
		}
		?>

</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

</div>

</body>

</html>