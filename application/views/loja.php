<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

<!-- Barra de pesquisa --> 
<nav class="navbar stick-top navbar-expand">

	<div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="Pesquisar produtos" aria-label="Pesquisar produtos" aria-describedby="basic-addon2">
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
	
	<!-- Produto -->
	<div class="col-xs-12 col-md-6">
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Produto</h6>
			<div class="media text-muted pt-3">
					<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
					<p class="media-body pb-3 mb-0 small lh-125">
						<strong class="d-block text-gray-dark">R$ XX,XX</strong>
						Descrição detalhada do produto...
					</p>
			</div>
			<div class="d-flex justify-content-between align-items-center w-100">

				<!-- input da forma antiga
				<div class="input-group col-md-2 col-xs-2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
					</div>
					<input type="text" class="form-control input-group-sm" placeholder="0" aria-label="quantidade" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				-->
				<div class="col-md-4 col-xs-3">
					Quantidade: &nbsp
					<select class="custom-select custom-select-sm col-md-12">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>

				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>

			</div>
		</div>
	</div>

	<!-- Produto -->
	<div class="col-xs-12 col-md-6">
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Produto</h6>
			<div class="media text-muted pt-3">
					<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
					<p class="media-body pb-3 mb-0 small lh-125">
						<strong class="d-block text-gray-dark">R$ XX,XX</strong>
						Descrição detalhada do produto...
					</p>
			</div>
			<div class="d-flex justify-content-between align-items-center w-100">

				<!-- input da forma antiga
				<div class="input-group col-md-2 col-xs-2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
					</div>
					<input type="text" class="form-control input-group-sm" placeholder="0" aria-label="quantidade" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				-->
				<div class="col-md-4 col-xs-3">
					Quantidade: &nbsp
					<select class="custom-select custom-select-sm col-md-12">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>

				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>

			</div>
		</div>
	</div>

	<!-- Produto -->
	<div class="col-xs-12 col-md-6">
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Produto</h6>
			<div class="media text-muted pt-3">
					<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
					<p class="media-body pb-3 mb-0 small lh-125">
						<strong class="d-block text-gray-dark">R$ XX,XX</strong>
						Descrição detalhada do produto...
					</p>
			</div>
			<div class="d-flex justify-content-between align-items-center w-100">

				<!-- input da forma antiga
				<div class="input-group col-md-2 col-xs-2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
					</div>
					<input type="text" class="form-control input-group-sm" placeholder="0" aria-label="quantidade" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				-->
				<div class="col-md-4 col-xs-3">
					Quantidade: &nbsp
					<select class="custom-select custom-select-sm col-md-12">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>

				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>

			</div>
		</div>
	</div>

	<!-- Produto -->
	<div class="col-xs-12 col-md-6">
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Produto</h6>
			<div class="media text-muted pt-3">
					<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
					<p class="media-body pb-3 mb-0 small lh-125">
						<strong class="d-block text-gray-dark">R$ XX,XX</strong>
						Descrição detalhada do produto...
					</p>
			</div>
			<div class="d-flex justify-content-between align-items-center w-100">

				<!-- input da forma antiga
				<div class="input-group col-md-2 col-xs-2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
					</div>
					<input type="text" class="form-control input-group-sm" placeholder="0" aria-label="quantidade" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				-->
				<div class="col-md-4 col-xs-3">
					Quantidade: &nbsp
					<select class="custom-select custom-select-sm col-md-12">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>

				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>

			</div>
		</div>
	</div>

	<!-- Produto -->
	<div class="col-xs-12 col-md-6">
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Produto</h6>
			<div class="media text-muted pt-3">
					<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
					<p class="media-body pb-3 mb-0 small lh-125">
						<strong class="d-block text-gray-dark">R$ XX,XX</strong>
						Descrição detalhada do produto...
					</p>
			</div>
			<div class="d-flex justify-content-between align-items-center w-100">

				<!-- input da forma antiga
				<div class="input-group col-md-2 col-xs-2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
					</div>
					<input type="text" class="form-control input-group-sm" placeholder="0" aria-label="quantidade" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				-->
				<div class="col-md-4 col-xs-3">
					Quantidade: &nbsp
					<select class="custom-select custom-select-sm col-md-12">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>

				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>

			</div>
		</div>
	</div>

	<!-- Produto -->
	<div class="col-xs-12 col-md-6">
		<div class="my-3 p-3 bg-white rounded box-shadow">
			<h6 class="border-bottom border-gray pb-2 mb-0">Produto</h6>
			<div class="media text-muted pt-3">
					<img src="<?=base_url('application/views/assets/img/sanduiche.jpg')?>" class="img-fluid w-25 p-2">
					<p class="media-body pb-3 mb-0 small lh-125">
						<strong class="d-block text-gray-dark">R$ XX,XX</strong>
						Descrição detalhada do produto...
					</p>
			</div>
			<div class="d-flex justify-content-between align-items-center w-100">

				<!-- input da forma antiga
				<div class="input-group col-md-2 col-xs-2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
					</div>
					<input type="text" class="form-control input-group-sm" placeholder="0" aria-label="quantidade" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				-->
				<div class="col-md-4 col-xs-3">
					Quantidade: &nbsp
					<select class="custom-select custom-select-sm col-md-12">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>

				<button type="button" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Adicionar ao carrinho</button>

			</div>
		</div>
	</div>	

</div>

<br>
<br>
<br>

<!-- Carregando o footer -->
<?php $this->load->view('components/footer'); ?>

</div>

</body>

</html>