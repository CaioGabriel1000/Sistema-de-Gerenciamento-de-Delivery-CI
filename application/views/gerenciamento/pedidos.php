<body>

<?php  
	$this->load->view('components/nav_gerenciamento.php');
?>

<br>
<br>
<br>

<div class="row d-flex justify-content-center">

<?php 
	// Se existem pedidos
	if ($pedidos)
	{

		/*Exibindo cada pedido*/
		foreach($pedidos as $p)
		{

			echo '<div class="col-xs-12 col-md-8">';
			echo '<div class="my-3 p-3 box-shadow rounded">';
			echo '<h3 class="p-3"> Pedido: '.$p['idPedido'].' - Valor: R$ '.formatar_preco($p['valor']).'</h3>';
			echo '<hr style="background-color: #563d7c; height: 1px; border: 0;">';
			echo '<h6 class="p-1"> Atualizado em: '. (is_null($p['atualizacao']) ? formatarData($p['criacao']) : formatarData($p['atualizacao'])). '</h6>';
			echo '<p class="p-1"><b>'.$p['nome'].'</b> - Telefone: '.formatarTelefone($p['telefone']).'</p>';
			echo is_null($p['observacoes']) ? '' : '<p class="p-1"> Observação: '.$p['observacoes'].'</p>';
			echo '<hr style="background-color: #563d7c; height: 1px; border: 0;">';
			echo '<p class="p-1">Produtos:</p>';
			echo '<ul class="list-group col-md-12 p-3">';

			/*Exibindo os produtos que são daquele pedido*/
			$produtos = $this->Pedido_model->get_pedido_informacoes($p['idPedido']);

			foreach ($produtos as $pro) {
				echo '<li class="list-group-item p-1">'. $pro['quantidade'] .' - '. $pro['nome_produto'] .'</li>';
			}

			echo '</ul>';

			echo '<hr style="background-color: #563d7c; height: 1px; border: 0;">';

			if ($produtos[0]['logradouro'] != NULL) {
				
				echo '<p class="p-2">Forma de Pagamento: '.$produtos[0]['formaPagamento_pedido'].' - Entregador: '.$produtos[0]['entregador'].'</p>';
				echo '<p class="p-2">'.$produtos[0]['logradouro'].', '.$produtos[0]['numero'].', '.$produtos[0]['complemento'].', '.$produtos[0]['bairro'].', '.$produtos[0]['cidade'].'</p>';
			} else {
				echo '<p class="p-2">Retirar no local.</p>';
			}

			echo '<hr style="background-color: #563d7c; height: 1px; border: 0;">';

			if ($p['status'] == 'Aberto') {
				echo '<br>';
				echo '<input type="submit" id="botao2" onclick="cancelar('.$p['idPedido'].')" value="Cancelar"/>';
				echo '<input type="submit" id="botao" onclick="finalizar('.$p['idPedido'].')" value="Finalizar"/>';
				echo '<br>';
			}	
			echo '</div>';
			echo '</div>';


		} /*Fechando o foreach*/
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

<script type="text/javascript">
	function finalizar(idPedido) {
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('Pedido/finalizar')?>",
			dataType : "JSON",
			data : {
				idPedido:idPedido
			},
			success: function(data){
				alert(data);
			}
		});
		location.reload();
	}	
	function cancelar(idPedido) {

		var result = confirm("Deletar pedido?");

		if (result) {
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Pedido/cancelar')?>",
				dataType : "JSON",
				data : {
					idPedido:idPedido
				},
				success: function(data){
					alert(data);
				}
			});
			location.reload();
		}
	}	
</script>

</body>
</html>
