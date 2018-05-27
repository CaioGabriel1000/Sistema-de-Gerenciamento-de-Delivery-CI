<body>

<?php  
	$this->load->view('components/nav_gerenciamento.php');
?>

<div id="cadastro-box">
	<div id="cadastro-box-interno">
		<form method="post" id="form-cadastro">
		<fieldset>
			<div id="cadastro-produto-label">Cadastro de Produto</div>		
			<div class="input-div" id="input-produto">  Produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input id="nome" name="nome" type="text" required placeholder="Nome do Produto" widht="100px" maxlength="45" />
			</div>
			<div class="input-div" id="input-descrição">Descrição:&nbsp;&nbsp;
				<input id="descricao" name="descricao" type="text" required placeholder="Descrição do Produto" widht="190px" maxlength="100" />﻿
			</div>
			<div class="input-div" id="input-valor">Valor R$:&nbsp;&nbsp;&nbsp;&nbsp;
				<input id="preco" name="preco" type="text" required placeholder="Apenas números" widht="60px" required />
			</div>
			<div class="input-div" id="input-valor">Quantidade:
				<input id="quantidade" name="quantidade" type="number" required placeholder="Apenas números" widht="50px" required min="0" minlength="3" maxlength="10" />
			</div>
			<div class="input-div" id="input-valor">Imagem:&nbsp;&nbsp;&nbsp;&nbsp;
				<select id="imagem" name="imagem">
					<option value="sanduiche-min.png">
						Sanduiche
					</option>
					<option value="batatas-min.png">
						Batatas
					</option>
					<option value="refrigerante-min.png">
						Refrigerante
					</option>
				</select>
			</div>		
			<div id="botoes">
				<input type="submit" name="Cadastrar" value="Cadastrar" id="botao">
			</div>
		</fieldset>
		</form>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){

	//Cadastrar
	$('#botao').on('click',function(){

		// Pegando valores dos inputs
		var nome = $('#nome').val();
		var descricao = $('#descricao').val();
		var preco = $('#preco').val();
		var quantidade = $('#quantidade').val();
		var imagem = $('#imagem').val();

		// verificando se os campos estão preenchidos
		if (
			nome == "" || descricao == "" || preco == "" || quantidade == "" || imagem == ""
			) 
		{
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Produto/add
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Produto/add')?>",
				dataType : "JSON",
				data : {
					nome:nome,
					descricao:descricao,
					preco:preco,
					quantidade:quantidade,
					imagem:imagem,
				},
				success: function(data){
					alert(data);
				}
			});
			// Limpando o formulário
			document.getElementById("#form-cadastro").reset();
		}
	});

	// Mascaras nos inputs
	$('#preco').mask('#.##0,00', {reverse: true});

});

</script>

</body>
</html>