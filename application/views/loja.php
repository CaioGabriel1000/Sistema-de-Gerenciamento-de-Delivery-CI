<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Barra de pesquisa --> 
<nav class="navbar stick-top navbar-expand">

	<div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="Pesquisar produtos - ainda não implementada" aria-label="Pesquisar produtos" aria-describedby="basic-addon2">
		<div class="input-group-append">
			<button class="btn btn-outline-secondary" type="button">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</div>
</nav>
<!-- Fim da barra de pesquisa -->

<!-- Produtos -->
<div class="row ">
	<!-- Exibindo produtos -->
	<?php foreach($produtos as $p){ ?>

		<!-- Produto <?php echo $p['idProduto']; ?> -->
		<div class="col-xs-12 col-md-6">
			<div class="my-3 p-3 bg-white rounded box-shadow">
				<h6 class="border-bottom border-gray pb-2 mb-0">

					<?php echo $p['nome']; ?>
						
				</h6>
				<div class="media text-muted pt-3">
						<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
						<p class="media-body pb-3 mb-0 small lh-125">
							<strong class="d-block text-gray-dark">R$ <?php echo formatar_preco($p['preco']); ?></strong>

							<?php echo $p['descricao']; ?>

						</p>
				</div>
				<div class="d-flex justify-content-between align-items-center w-100">
						<div class="col-md-4 col-xs-3">
							Quantidade: &nbsp
							<select class="custom-select custom-select-sm col-md-12" id="<?php echo $p['idProduto']; ?>" name="<?php echo $p['idProduto']; ?>">

								<?php for ($i=1; $i <= $p['quantidade'] ; $i++) { ?>

									<option value=" <?php echo $i ?> "> <?php echo $i ?></option>
									
								<?php } ?>

							</select>
						</div>

						<button type="button" class="btn btn-success btn-sm float-right position-relative  fixed-bottom" onclick="addCarrinho(<?php echo $p['idProduto']; ?>)"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>
				</div>
			</div>
		</div>

	<?php } ?>

</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

<script type="text/javascript">

function addCarrinho(idProduto) {

	var quantidade = document.getElementById(idProduto).value;

	$.ajax({
		type : "POST",
		url  : "<?php echo base_url('Loja/add')?>",
		dataType : "JSON",
		data : {
			idProduto:idProduto,
			quantidade:quantidade
		},
		success: function(data){
			alert(data);
		}
	});
}

</script>

</div>

</body>

</html>