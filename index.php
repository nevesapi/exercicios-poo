<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercício 02</title>
</head>

<body>
	<?php
	require_once "./src/Livro.php";

	$livro = new Livro("Harry Potter e a Pedra Filosofal", "J.K. Rowling", 200);
	?>

	<h1>Exercício 02</h1>
	<hr>

	<h2>Descrição do livro 1</h2>
	<ul>
		<li><b>Titulo do livro: </b><?= $livro->getTitulo() ?></li>
		<li><b>Autor: </b><?= $livro->getAutor() ?></li>
		<li><b>Quantidade de páginas: </b><?= $livro->getPaginas() ?></li>
	</ul>

</body>

</html>