<!doctype html>
<html lang="pt-br">
<head>
	<!-- Tags de metadados necessárias -->
	<meta charset="utf-8">
	<meta name="description" content="Sistema de Gerenciamento de Delivery">
	<meta name="keywords" content="Delivery, Pedidos, Gerenciamento, Entregas, Fast Food">
	<meta name="author" content="Caio Gabriel, Jean Douglas, Matheus Landin, Marcus Vinicius, Ronaldo Ribeiro, Thales Henrique">

	<!-- Inserindo o título da página que veio do array $dados -->
	<title><?=$title?></title>

	<!-- Icone site (Fav Icon)-->
	<link rel="shortcut icon" href="<?=base_url('application/views/assets/img/icon.ico')?>" type="image/x-icon">
	
	<!-- CSS customizado -->
	<link 
	rel="stylesheet" 
	type="text/css" 
	href="<?=base_url('application/views/assets/css/estilo_gerenciamento.css')?>"	>

	<!-- Icones Font Awesome -->
	<link 
	rel="stylesheet" 
	href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" 
	integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" 
	crossorigin="anonymous">

	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			//Sair
			$('#Sair').on('click',function(){

					// Ajax envia os dados para o Cliente/login
					$.ajax({
						type : "POST",
						url  : "<?php echo base_url('Administrador/logout')?>",
						dataType : "JSON",
						success: function(data){
							alert(data);
						}
					});

					window.location.replace("<?php echo base_url('/') ?>");
			});
		});
	</script>

</head>
