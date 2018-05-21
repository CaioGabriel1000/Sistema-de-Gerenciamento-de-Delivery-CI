<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<section class="text-center">

	<!-- Logo -->
	<div class="container">
		<img src="<?php echo base_url('application/views/assets/img/logosfundo.png') ?>" class="rounded mx-auto d-block p-3" width="20%"> 
	</div>

	<!-- Conjunto de Ícones com texto -->
	<div class="album py-5">
		<div class="container">
			<div class="row">
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<a href="<?=base_url('/loja')?>">
						<div class="card mb-4 box-shadow home-item">
							<div class="d-flex justify-content-center">
								<i class="fas fa-home fa-5x p-3"></i>
							</div>
							<div class="card-body">
								<h3>Loja</h3>
								<p class="card-text">Página inicial da loja com os produtos disponíveis.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<a href="<?=base_url('/carrinho')?>">
						<div class="card mb-4 box-shadow home-item">
							<div class="d-flex justify-content-center">
								<i class="fas fa-shopping-cart fa-5x p-3"></i>
							</div>
							<div class="card-body">
								<h3>Carrinho</h3>
								<p class="card-text">Carrinho que armazena os produtos escolhidos.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<a href="<?=base_url('/pedido_cliente')?>">
						<div class="card mb-4 box-shadow home-item">
							<div class="d-flex justify-content-center">
								<i class="fas fa-clipboard-list fa-5x p-3"></i>
							</div>
							<div class="card-body">
								<h3>Meus Pedidos</h3>
								<p class="card-text">Informações sobre os pedidos realizados.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<a href="<?=base_url('/cliente')?>">
						<div class="card mb-4 box-shadow home-item">
							<div class="d-flex justify-content-center">
								<i class="fas fa-user fa-5x p-3"></i>
							</div>
							<div class="card-body">
								<h3>Minha Conta</h3>
								<p class="card-text">Conta pessoal com as informações cadastradas.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- Rodapé -->
<footer class="footer">
	<div class="container d-flex justify-content-center">
		<span><p class="small"><a href="<?php echo base_url('/gerenciamento') ?>">Entrar no gerenciamento</a> - SGD - 2018</p></span>
	</div>
</footer>

</div>

</body>

</html>