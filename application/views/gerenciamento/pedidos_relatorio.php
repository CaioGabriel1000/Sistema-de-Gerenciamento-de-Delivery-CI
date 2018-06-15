<body>

<?php  
	$this->load->view('components/nav_gerenciamento.php');
?>

<br>
<br>
<br>

<div class="row d-flex justify-content-center">

	<form method="post" action="<?php echo base_url('/Pedido/relatorio/'.$status);?>">
	<div class="form-row align-items-center">
		<div class="col-auto">
			<p>Data Inicial: </p>
			<input type="date" class="form-control mb-2" id="dtInicial" name="dtInicial" placeholder="DD/MM/AAAA">
		</div>
		<div class="col-auto">
			<p>Data Final:</p>
			<input type="date" class="form-control" id="dtFinal" name="dtFinal" placeholder="DD/MM/AAAA">
		</div>
		<div class="col-auto">
			<br>
			<button type="submit" class="btn btn-primary mb-2" style="color: white; padding: 3px;">Exibir</button>
		</div>
	</div>
	</form>

</div>

<div class="row d-flex justify-content-center">

<?php 
	// Se existem pedidos
	if ($pedidos)
	{
		echo '<div class="col-xs-12 col-md-8">';
		echo '<div class="my-3 p-3 box-shadow rounded">';
		echo '<div class="row d-flex justify-content-center">';
			echo '<table border="1">';
			echo '	<thead>';
			echo '		<tr>';
			echo '			<th>Pedido</th>';
			echo '			<th>Data Criação</th>';
			echo '			<th>Data Atualização</th>';
			echo '			<th>Valor Total</th>';
			echo '			<th>Cliente</th>';
			echo '			<th>Endereço</th>';
			echo '			<th>Status</th>';

			echo '		</tr>';
			echo '	</thead>';
			echo '	<tbody>';

		/*Exibindo cada pedido*/
		foreach($pedidos as $p)
		{

			echo '		<tr>';
			echo '			<th>'.$p['idPedido'].'</th>';
			echo '			<th>'.formatarData($p['criacao_pedido']).'</th>';
			echo '			<th>'.formatarData($p['atualizacao_pedido']).'</th>';
			echo '			<th> R$ '.formatar_preco($p['valor_pedido']).'</th>';
			echo '			<th>'.$p['cliente'].'</th>';
			echo is_null($p['logradouro']) ? '<th>Retirar no Local</th>' : '<th>'.$p['logradouro'].', '.$p['numero'].', '.$p['bairro'].', '.$p['cidade'].'</th>';
			echo '			<th>'.$p['status_pedido'].'</th>';
			echo '		</tr>';

		} /*Fechando o foreach*/
			echo '	</tbody>';
			echo '</table>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	/*Caso não exista um pedido*/
	} 
	else 
	{
		echo '
		<ul class="list-group col-md-6 box-shadow p-3">
			<li class="list-group-item d-flex justify-content-between lh-condensed">
				<div>
					<h6 class="my-0">Nenhum Pedido!</h6>
				</div>
			</li>
		</ul>
		';
	}
?>

</div>
</body>
</html>
