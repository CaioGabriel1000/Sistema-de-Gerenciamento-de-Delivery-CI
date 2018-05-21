<body>

<?php  
	$this->load->view('components/nav_gerenciamento.php');
?>

<div id="cadastro-box">
	<div id="cadastro-box-interno">
		<form method="post" id="form-cadastro">
		<fieldset>
			<div id="cadastro-produto-label">Manutenção de Produtos</div>
			<div class="input-div" id="input-produto">  Produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select id="idProduto" name="idProduto" onchange="carregarDados()">
					<option>Selecione</option>
					<?php 
						foreach ($produtos as $p) {
							echo '<option value="'.$p['idProduto'].'">'.$p['nome'].'</option>';
						}
					 ?>
				</select>
			</div>
			<div class="input-div" id="input-produto">  Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input id="nome" name="nome" type="text" required placeholder="Nome do Produto" widht="100px" maxlength="45" />
			</div>
			<div class="input-div" id="input-descrição">Descrição:&nbsp;&nbsp;
				<input id="descricao" name="descricao" type="text" required placeholder="Descrição do Produto" widht="190px" maxlength="100" />﻿
			</div>
			<div class="input-div" id="input-valor">Valor R$:&nbsp;&nbsp;&nbsp;&nbsp;
				<input id="preco" name="preco" type="number" required placeholder="Apenas números" widht="60px" required min="0" minlength="3" maxlength="10" />
			</div>
			<div class="input-div" id="input-valor">Quantidade:
				<input id="quantidade" name="quantidade" type="number" required placeholder="Apenas números" widht="50px" required min="0" minlength="3" maxlength="10" />
			</div>
			<div class="input-div" id="input-valor">Imagem:&nbsp;&nbsp;&nbsp;&nbsp;
				<select id="imagem" name="imagem">
					<option>Selecione</option>
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
				<input type="submit" name="Alterar" value="Alterar" id="botao">
			</div>
		</fieldset>
		</form>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){

	//Cadastrar
	$('#botao').on('click',function(){

		event.preventDefault();

		// Pegando valores dos inputs
		var idProduto = $('#idProduto').val();
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
			// Ajax envia os dados para o Produto/edit
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Produto/edit')?>",
				dataType : "JSON",
				data : {
					idProduto:idProduto,
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
			/* Limpando o formulário */
			document.getElementById("form-cadastro").reset();
		}
	});
});

function carregarDados() {

	var idProduto = $('#idProduto').val();

	// Ajax envia os dados para o Produto/getProduto
	$.ajax({
		type : "POST",
		url  : "<?php echo base_url('Produto/getProduto')?>",
		dataType : "JSON",
		data : {
			idProduto:idProduto,
		},
		success: function(data){

			document.getElementById("nome").value = data['nome'];
			document.getElementById("descricao").value = data['descricao'];
			document.getElementById("preco").value = data['preco'];
			document.getElementById("quantidade").value = data['quantidade'];
			document.getElementById("imagem").value = data['imagem'];

		}
	});
}

</script>

</body>
</html>