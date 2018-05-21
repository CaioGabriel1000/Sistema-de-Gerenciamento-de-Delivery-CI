<body>

<!-- Carregando o nav -->
<?php $this->load->view('components/nav'); ?>

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
		if ($pedidos)
		{

			/*Exibindo cada pedido*/
			foreach($pedidos as $p)
			{

				echo '<div class="col-xs-12 col-md-8">';
				echo '<div class="my-3 p-3 box-shadow rounded">';
				echo '<h3> Pedido: '.$p['idPedido'].' - Status: '.$p['status'].' - Valor: R$ '.formatar_preco($p['valor']).'</h3>';
				echo '<hr>';
				echo '<h6> Atualizado em: '. (is_null($p['atualizacao']) ? formatarData($p['criacao']) : formatarData($p['atualizacao'])). '</h6>';
				echo '<p>Produtos:</p>';
				echo '<ul class="list-group col-md-12">';

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
				echo '</ul>';
				echo '</div>';
				echo '</div>';


			} /*Fechando o foreach*/
		/*Caso não exista um pedido*/
		} 
		else 
		{
			echo '
			<ul class="list-group col-md-6 p-2 box-shadow">
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

</div>

</body>

</html>