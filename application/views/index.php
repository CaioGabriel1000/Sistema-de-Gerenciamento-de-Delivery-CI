<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<section class="text-center">
	<div class="container">
		<img src="application/views/assets/img/logo.png" class="img-fluid w-20" width="25%"> 
		<p class="lead text-muted">O Sistema de Gerenciamento de Delivery está sendo desenvolvido com o objetivo de oferecer as empresas do ramo de delivery um sistema eficiente, amigável e economicamente atrativo. Por isso o SGD é open source, disponibilizado gratuitamente no <a href="https://github.com/CaioGabriel1000/Sistema-de-Gerenciamento-de-Delivery">github</a>, para que pequenas empresas possam ser informatizadas, tendo apenas um custo inicial de implantação.
		<p class="lead text-muted">Este exemplo de utilização do sistema demonstra uma loja de delivery de fast food, contando com as seguintes funções:</p>
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
							<p class="card-text">Página inicial da loja com os produtos disponíveis.</p>
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
							<i class="fas fa-clipboard-list fa-5x p-3"></i>
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