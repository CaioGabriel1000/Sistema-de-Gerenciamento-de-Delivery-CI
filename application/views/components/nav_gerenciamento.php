<nav class="menu navbar">
	<ul>
		<li><a href="<?php echo base_url('/gerenciamento') ?>">Home</a></li>
		<li><a href="">Pedidos</a>
			<ul>
				<li><a href="<?php echo base_url('/pedido_gerenciamento_abertos') ?>">Abertos</a></li>
				<li><a href="<?php echo base_url('/pedido_gerenciamento_pagos') ?>">Pagos</a></li>
				<li><a href="<?php echo base_url('/pedido_gerenciamento_finalizados') ?>">Finalizados</a></li>
				<li><a href="<?php echo base_url('/pedido_gerenciamento_cancelados') ?>">Cancelados</a></li>
				
			</ul>
		</li>
		<li><a href="">Relatórios</a>
			<ul>
				<li><a href="<?php echo base_url('/pedido_relatorio_abertos') ?>">Abertos</a></li>
				<li><a href="<?php echo base_url('/pedido_relatorio_pagos') ?>">Pagos</a></li>
				<li><a href="<?php echo base_url('/pedido_relatorio_finalizados') ?>">Finalizados</a></li>
				<li><a href="<?php echo base_url('/pedido_relatorio_cancelados') ?>">Cancelados</a></li>
				
			</ul>
		</li>
		<li><a href="">Produtos</a>
			<ul>
				<li><a href="<?php echo base_url('/produto_gerenciamento_cadastro') ?>">Cadastro</a></li>
				<li><a href="<?php echo base_url('/produto_gerenciamento_manutencao') ?>">Manutenção</a></li>
			</ul>
		</li>
		<li><a href="">Clientes</a>
			<ul>
				<li><a href="<?php echo base_url('/cliente_gerenciamento_manutencao') ?>">Manutenção</a></li>
			</ul>
		</li>
		<li style="float: right;"><a id="Sair" href="">Sair</a></li>
	</ul>
</nav>