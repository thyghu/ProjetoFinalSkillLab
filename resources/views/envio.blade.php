<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Google Glass</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" type="image/png" sizes="32x32" href="Imagens/favicon-32x32.png">
	<link rel="stylesheet" type="text/CSS" href="css/estilo.css"> 
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

			<?php

				if(!($_POST['nome'] && $_POST['senha'] && $_POST['email'] && $_POST['sexo'] && $_POST['nascimento'] && $_POST['endereco'] && $_POST['numero'] && $_POST['estado'] && $_POST['cidade'] && $_POST['grau'] && $_POST['mensagem'] && $_POST['cor'] && $_POST['quantidade'] && $_POST['precoTotal']))
					echo "PREENCHA TODOS OS CAMPOS!<br>";
				else
				{
					$ligacao = mysqli_connect("localhost", "thiago2", "Y#Y7WEdlO*ApRTc5j", "provamodulo3");
					$insere = "INSERT INTO usuario (nome, senha, email, sexo, nascimento, endereco, numero, estado, cidade, grau, mensagem, cor, quantidade, precoTotal) VALUES ('" . $_POST['nome'] . "','" . $_POST['senha'] . "','" . $_POST['email'] . "','" . $_POST['sexo'] . "','" . $_POST['nascimento'] . "','" . $_POST['endereco'] . "','" . $_POST['numero'] . "','" . $_POST['estado'] . "','" . $_POST['cidade'] . "','" . $_POST['grau'] . "','" . $_POST['mensagem'] . "','" . $_POST['cor'] . "','" . $_POST['quantidade'] . "','" . $_POST['precoTotal'] . "');";
										
					if(mysqli_query($ligacao, $insere))
						echo "<h1>Enviado com sucesso!<br><img src='Imagens/chuck.jpg'><br>";
						
				}
			
			?>

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