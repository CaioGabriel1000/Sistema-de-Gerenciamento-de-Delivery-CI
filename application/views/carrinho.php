<!doctype html>
<html lang="pt-br">
<head>
	<!-- Tags de metadados necessárias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Sistema de Gerenciamento de Delivery">
    <meta name="keywords" content="Delivery, Sistema de Pedidos, Sistema de Gerenciamento">
    <meta name="author" content="Caio Gabriel, Jean Douglas, Matheus Landin, Marcus Vinicius, Ronaldo Ribeiro">
   

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- CSS customizado -->
	<link rel="stylesheet" type="text/css" href="<?=base_url("application/views/assets/css/estilo.css");?>">

	<!-- Icones Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	
	<!-- Inserindo o título da página que veio do array $dados -->
	<title><?=$title?></title>

</head>
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
<!-- Fechando o container, body e html do corpo da página. Que devem ser abertos na view carregada antes dessa. -->
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>