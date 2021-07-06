function ocultaImagens()
{
	document.getElementById("camera").style.display = 'none';
	document.getElementById("oculos").style.display = 'none';
	document.getElementById("telefone").style.display = 'none';
}

function exibeImg(imagem)
{
	ocultaImagens();
	if (imagem=="camera")
		document.getElementById("camera").style.display = 'inline-block';
	else if (imagem=="oculos")
			document.getElementById("oculos").style.display = 'inline-block';
		else if (imagem=="telefone")
				document.getElementById("telefone").style.display = 'inline-block';
	
}