<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<section class="text-center">
	<div class="container">
		<img src="<?=base_url('application/views/assets/img/logo.png')?>" class="img-fluid w-30">
		<p class="lead text-muted">O Sistema de Gerenciamento de Delivery tem o objetivo de [...] e conta com as seguintes funções:</p>
	</div>

	<!-- Conjunto de Ícones com texto -->
	<div class="album py-5">
		<div class="container">
			<div class="row">
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<div class="card mb-4 box-shadow">
						<div class="d-flex justify-content-center">
							<i class="fas fa-home fa-5x p-3"></i>
						</div>
						<div class="card-body">
							<h3>Loja</h3>
							<p class="card-text">Página inicial da loja com os produtos disponiveis.</p>
						</div>
					</div>
				</div>
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<div class="card mb-4 box-shadow">
						<div class="d-flex justify-content-center">
							<i class="fas fa-shopping-cart fa-5x p-3"></i>
						</div>
						<div class="card-body">
							<h3>Carrinho</h3>
							<p class="card-text">Carrinho que armazena os produtos escolhidos.</p>
						</div>
					</div>
				</div>
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<div class="card mb-4 box-shadow">
						<div class="d-flex justify-content-center">
							<i class="fas fa-motorcycle fa-5x p-3"></i>
						</div>
						<div class="card-body">
							<h3>Meus Pedidos</h3>
							<p class="card-text">Informações sobre os pedidos realizados.</p>
						</div>
					</div>
				</div>
				<!-- Icone mais texto explicativo -->
				<div class="col-md-3">
					<div class="card mb-4 box-shadow">
						<div class="d-flex justify-content-center">
							<i class="fas fa-user fa-5x p-3"></i>
						</div>
						<div class="card-body">
							<h3>Minha Conta</h3>
							<p class="card-text">Conta pessoal com as informações cadastradas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-center">
		<p class="small">SGD - 2018</p>
	</div>

</section>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>