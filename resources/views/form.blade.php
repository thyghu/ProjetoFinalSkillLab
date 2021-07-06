<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Google Glass</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/CSS" href="css/estilo.css"> 
	<link rel="icon" type="image/png" sizes="32x32" href="Imagens/favicon-32x32.png">
</head>

<body>



		
	<header>	
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="index.html" onmouseover="exibeImg('oculos');" onmouseout="ocultaImagens();">Home</a></li>
				<li><a href="galeria.html" onmouseover="exibeImg('camera');" onmouseout="ocultaImagens();">Galeria</a></li>
				<li><a href="contato.html" onmouseover="exibeImg('telefone');" onmouseout="ocultaImagens();">Fale Conosco</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	</header>	
	

	<section>
		<div id="imagens">
			<br>
			<img src="Imagens/oculos.png" id="oculos" class="imagens2">
			<img src="Imagens/telefone.png"  id="telefone" class="imagens2">
			<img src="Imagens/camera.png"  id="camera" class="imagens2">
		</div>
		</br>
		<h1>Google Glass</h1>
		<h2>A revolução do Google está chegando</h2>
		<br>
		<div class="secao">Formulário de Contato</div>
		<br>
		<div id="formulario">
			<form method="POST" action="{{route('registrar_produto')}}">
				@csrf
				<fieldset id="usuario">
					<legend>Identificação do usuário</legend>
					<table class="Tabela">
						<tr><td>Nome:</td><td><input type="text" placeholder="Nome completo" name="nome"></td></tr>
						<tr><td>Senha:</td><td><input type="password" placeholder="Digite sua senha" name="senha"></td></tr>
						<tr><td>Email:</td><td><input type="text" placeholder="exemplo@dominio.com" name="email"></td></tr>
					</table>
					<fieldset id="ffieldset">
						<legend>Sexo</legend>
						<input type="radio" id="masculino" name="sexo" value="Masculino" name="sexo">
						<label for="masculino">Masculino</label><br>
						<input type="radio" id="feminino" name="sexo" value="Feminino">
						<label for="feminino">Feminino</label><br>
					</fieldset>
					Data de Nascimento:<br><input type="date" placeholder="dd/mm/aaaa" name="nascimento">
					
					
				</fieldset>
				<br><br><br>
				<fieldset id="casa">
					<legend>Endereço do usuário</legend>
					
					<table class="Tabela">
						<tr><td>Logradouro:</td><td><input type="text" placeholder="Rua, Av, Tv" name="endereco"></td></tr>
						<tr><td>Número:</td><td><input type="number" name="numero"></td></tr>
						<tr><td>Estado:</td>
							<td><select id="estados" name="estado">
							  <option value="Maranhão">Maranhão</option>
							  <option value="São Paulo">São Paulo</option>
							  <option value="Rio de Janeiro">Rio de Janeiro</option>
							  <option value="Acre">Acre</option>
							</select>
							</td></tr>
						<tr><td>Cidade:</td><td><input type="text" placeholder="Sua cidade" name="cidade"></td></tr>
					</table>

				</fieldset>
				
				<br><br><br>
				
				<fieldset id="carta">
					<legend>Mensagem do usuário</legend>
					Grau de urgência:<input type="range" name="grau"><br>
					Mensagem:<textarea cols=30 rows=5 id="mensagem" name="mensagem" placeholder="Deixe aqui sua mensagem" maxlength="500"></textarea><br>			
				</fieldset>
				
				<br><br><br>
				
				<fieldset id="carteira">
					<legend>Quero um Google Glass</legend>
					<table class="Tabela">
						<tr><td>Cor:</td><td><input type="color" name="cor"></td></tr>
						<tr><td>Quantidade:</td><td><input type="number" name="quantidade" min="1" max="20" id="quantidade" value="1" onclick="document.getElementById('precoTotal').value = document.getElementById('quantidade').value * 3899.90"></td></tr>
						<tr><td>Preço Total:</td><td><input type="text" placeholder="Total a pagar" name="precoTotal" value="3899.00" id="precoTotal" readonly></td></tr>
					</table>
					
				</fieldset>
				
				<br><br>
				<div id="botaoBox"><input type="submit"  id="botao" value="Enviar"></div>

			</form>
		</div>
		<br>
		
		
	</section>
	
	<footer>
		<div id="objeto"></div>
		Copyright © 2021 - by Thiago David Costa<br>
		Facebook | Twitter <br>
		Skill Lab
	</footer>
	
	<script src="js/script.js"></script>
	
	<script>
		ocultaImagens();
	</script>
</body>

</html>