<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel= "stylesheet" href="<?php echo base_url('application/views/assets/css/Menu.css'); ?>">
	<title>Home SGD</title>
	<style type="text/css">
		body {
		width: 100%;
		height: 100%;
		background-color: #d9d0f2;
		background-image: url("<?php echo base_url('application/views/assets/img/logo.png'); ?>");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
		padding-bottom: 80px;

		}
	</style>
</head>
<body>
	<nav class="menu">
		<ul>
			<li><a href="<?php echo base_url('/gerenciamento') ?>">Home</a></li>
			<li><a href="<?php echo base_url('/pedido_gerenciamento') ?>">Pedidos</a></li>
			<li><a href="<?php echo base_url('/gerenciamento') ?>">Produtos</a>
				<ul>
					<li><a href="<?php echo base_url('/gerenciamento') ?>">Cadastro</a></li>
					<li><a href="<?php echo base_url('/gerenciamento') ?>">Manutenção</a></li>
				</ul>
			</li>
			<li><a href="<?php echo base_url('/gerenciamento') ?>">Clientes</a>
				<ul>
					<li><a href="<?php echo base_url('/gerenciamento') ?>">Manutenção</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
		
	<div id="rodape">
		<p class="rodape">Todos os direitos reservados ao site SGD/Sagatz Empreendimentos!</p>
	</div>
	<div id="imagemrdp">
		<img src="<?php echo base_url('application/views/assets/img/rodape.jpg') ?>" align:"bottom-right" alt="Site Sustentável" width="100" height="100">	

	</div>
	
</body>
</html>
