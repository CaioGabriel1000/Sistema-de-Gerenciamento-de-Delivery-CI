<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Ícone de carrinho e título -->
<div class="py-3 text-center">
	<div class="d-block mx-auto mb-3">
		<i class="fas fa-shopping-cart fa-5x"></i>
	</div>
	<h2>Carrinho</h2>
</div>

<!-- Carrinho -->
<div class="row justify-content-md-center">
	<div class="col-md-6 col-xs-10 order-md-2 mb-4">

		<!-- Lista de produtos -->
		<ul class="list-group mb-3">
			<?php 

			// Caso o carrinho esteja vazio a mensagem é exibida
			if (!isset($carrinho['produtos'])) {
				echo '
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
						<h6 class="my-0">Carrinho vazio</h6>
						</div>
					</li>
				';

			} else {

				$valorTotal = 0;
				// caso existam produtos no carrinho, os dados que vieram do controller são exibidos
				foreach ($carrinho['produtos'] as $produtos => $p) {
					echo '
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">' . $p['quantidade'] . ' - ' . $p['nome'] . ' </h6>
								<small class="text-muted">Descrição</small>
							</div>
							<span class="text-muted"> R$ ' . formatar_preco($p['preco']) . '</span>
							<button type="button" class="btn btn-danger btn-sm" 
								id="'. $p['idProduto'] . '"
								name="'. $p['idProduto'] . '"
								value="'. $p['idProduto'] . '" 
								onclick="removerCarrinho('. $p['idProduto'] .')">
								<i class="fas fa-times"></i> Remover
							</button>
						</li>
					';
					$valorTotal += ($p['preco'] * $p['quantidade']);
				}

				echo '<!-- Total e botão de finalizar pedido -->';
				echo '
					<li class="list-group-item d-flex justify-content-between">
						<span>Total (R$)</span>
						<strong>R$ '. formatar_preco($valorTotal) .'</strong>
					</li>
					';
				echo '
					<li class="list-group-item">
						<a href="'. base_url('/pedido') .'">
							<button type="button" class="btn btn-success float-right">
								<i class="fas fa-check"></i> Finalizar Pedido
							</button>
						</a>
					</li>
					';
				$_SESSION['valorTotal'] = $valorTotal;
			}
			
			?>
		</ul>
	</div>
</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<script type="text/javascript">

function removerCarrinho(idProduto) {

	$.ajax({
		type : "POST",
		url  : "<?php echo base_url('Loja/removerCarrinho')?>",
		dataType : "JSON",
		data : {
			idProduto:idProduto
		},
		success: function(data){
			alert(data);
		}
	});
	location.reload();
}

</script>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>