<body>

<?php  
	$this->load->view('components/nav_gerenciamento.php');
?>

<div id="manutencao-box">
	<div id="manutencao-box-interno">
		<form method="post" id="form-manutencao">
		<fieldset>
			<div id="cadastro-produto-label">Manutenção de Clientes</div>
			<div class="input-div" id="input-produto">  Cliente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select id="idCliente" name="idCliente" onchange="carregarDados()">
					<option>Selecione</option>
					<?php 
						foreach ($clientes as $c) {
							echo '<option value="'.$c['idCliente'].'">'.$c['nome'].'</option>';
						}
					 ?>
				</select>
			</div>
			<div class="input-div" id="input-valor">Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select id="status" name="status">
					<option>Selecione</option>
					<option value="ativo">
						Ativo
					</option>
					<option value="bloqueado">
						Bloqueado
					</option>
				</select>
			</div>		
			<div id="botoes">
				<input type="submit" name="Alterar" value="Alterar" id="botao">
			</div>
		</fieldset>
		</form>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){

	//Editar Status
	$('#botao').on('click',function(){

		event.preventDefault();

		// Pegando valores dos inputs
		var idCliente = $('#idCliente').val();
		var status = $('#status').val();

		// verificando se os campos estão preenchidos
		if (idCliente == "" || status == "") 
		{
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Cliente/edit
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Cliente/edit')?>",
				dataType : "JSON",
				data : {
					idCliente:idCliente,
					status:status,
				},
				success: function(data){
					alert(data);
				}
			});
			/* Limpando o formulário */
			document.getElementById("form-manutencao").reset();
		}
	});
});

function carregarDados() {

	var idCliente = $('#idCliente').val();

	// Ajax envia os dados para o Produto/getProduto
	$.ajax({
		type : "POST",
		url  : "<?php echo base_url('Cliente/getCliente')?>",
		dataType : "JSON",
		data : {
			idCliente:idCliente,
		},
		success: function(data){

			document.getElementById("status").value = data['status'];

		}
	});
}

</script>

</body>
</html>