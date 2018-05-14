<body>

<!-- Div que contém todos os elementos da página -->
<div class="container">

	<!-- Formulário de Login -->
	<div class="row d-flex justify-content-center">
		<div class="col-md-6">
			<form class="form-signin" id="form-login" name="form-login" method="post">
				<fieldset>
					<div class="py-3 text-center">
						<div class="d-block mx-auto">
							<i class="fas fa-sign-in-alt fa-5x"></i>
						</div>
						<h2>Gerenciamento</h2>
					</div>

					<div class="form-label-group">
						<label for="inputEmailLogin">Email</label>
						<input id="inputEmailLogin" name="inputEmailLogin" class="form-control" placeholder="Email" required="" autofocus="" type="email" maxlength="45">
					</div>

					<div class="form-label-group">
						<label for="inputSenhaLogin">Senha</label>
						<input id="inputSenhaLogin" name="inputSenhaLogin" class="form-control" placeholder="Senha" required="" type="password" value="" maxlength="45">
					</div>

					<div class="row d-flex justify-content-center p-3">
						<button id="btnLogar" name="btnLogar" class="btn btn-lg btn-success btn-block col-md-12" type="submit" value="Register" name="register">Entrar</button>
					</div>
				<fieldset>
			</form>
		</div>
	</div>

<br>
<br>
<br>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script 
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
crossorigin="anonymous"></script>

<script 
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" 
integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" 
crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function(){

	//Logar
	$('#btnLogar').on('click',function(){

		// Pegando valores dos inputs
		var inputEmailLogin = $('#inputEmailLogin').val();
		var inputSenhaLogin = $('#inputSenhaLogin').val();

		// verificando se os campos estão preenchidos
		if (inputEmailLogin == "" || inputSenhaLogin == "") {
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Administrador/login
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Administrador/login')?>",
				dataType : "JSON",
				data : {
					inputEmailLogin:inputEmailLogin,
					inputSenhaLogin:inputSenhaLogin
				},
				success: function(data){
					alert(data);
				}
			});
			// Limpando o formulário
			document.getElementById("#form-login").reset();
			return false;
		}
	});
});

</script>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>