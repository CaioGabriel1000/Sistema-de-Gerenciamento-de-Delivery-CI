<body>

<!-- div container agrupa todos os elementos do body, será fechada apenas no footer -->
<div class="container">

<!-- Ícone de carrinho e título -->
<div class="py-3 text-center">
	<div class="d-block mx-auto mb-3">
		<i class="fas fa-shopping-cart fa-5x"></i>
	</div>
	<h2>Carrinho</h2>
</div>

<!-- Carrinho -->
<div class="row row justify-content-md-center">
	<div class="col-md-8 col-xs-10 order-md-2 mb-4">
		
		<!-- Cabeçalho -->
		<h4 class="d-flex justify-content-between align-items-center mb-2">
			<span class="text-muted">Seus itens</span>
			<span class="badge badge-secondary badge-pill">3</span>
		</h4>

		<!-- Lista de itens -->
		<ul class="list-group mb-3">
			<li class="list-group-item d-flex justify-content-between lh-condensed">
				<div>
					<h6 class="my-0">Produto 1 </h6>
					<small class="text-muted">Descrição</small>
				</div>
				<span class="text-muted">R$ 12,00</span>
				<button type="button" class="btn btn-danger btn-sm">
					<i class="fas fa-times"></i> Remover
				</button>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
				<div>
					<h6 class="my-0">Produto 2</h6>
					<small class="text-muted">Descrição</small>
				</div>
				<span class="text-muted">R$ 8,00</span>
				<button type="button" class="btn btn-danger btn-sm">
					<i class="fas fa-times"></i> Remover
				</button>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
				<div>
					<h6 class="my-0">Produto 3</h6>
					<small class="text-muted">Descrição</small>
				</div>
				<span class="text-muted">R$ 5,00</span>
				<button type="button" class="btn btn-danger btn-sm">
					<i class="fas fa-times"></i> Remover
				</button>
			</li>

			<!-- Total e botão de finalizar pedido -->
			<li class="list-group-item d-flex justify-content-between">
				<span>Total (R$)</span>
				<strong>R$ 25,00</strong>
			</li>
			<li class="list-group-item">
				<button type="button" class="btn btn-primary float-right">
					<i class="fas fa-check"></i> Finalizar Pedido
				</button>
			</li>
		</ul>
	</div>
</div>

<br>

<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>