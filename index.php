<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercício 03</title>
</head>

<body>
	<?php
	require_once "./src/Enums/Genero.php"; //Enum class
	require_once "./src/Enums/Formato.php"; //Enum class

	require_once "./src/Models/Livro.php"; //main class

	require_once "./src/Models/Literario.php"; //subclass
	require_once "./src/Models/Tecnico.php"; //subclass
	require_once "./src/Models/Programacao.php"; //subclass

	$livroLiterario = new Literario("Harry Potter e a Pedra Filosofal", "J.K. Rowling", GENERO::DRAMA);

	$livroProgramacao = new Programacao("Learn PHP 8: Using MySQL, JavaScript, CSS3, and HTML5", "Steve Prettyman", Formato::DIGITAL, "PHP 8");
	?>

	<h1>Exercício 03</h1>
	<hr>

	<h2>Livro 1</h2>
	<ul>
		<li><b>Titulo do livro: </b><?= $livroLiterario->getTitulo() ?></li>
		<li><b>Autor do livro: </b><?= $livroLiterario->getAutor() ?></li>
		<li><b>Gênero do livro: </b><?= $livroLiterario->getGenero()->name ?></li>
	</ul>
	<hr>

	<h2>Livro 2</h2>
	<ul>
		<li><b>Titulo do livro: </b><?= $livroProgramacao->getTitulo() ?></li>
		<li><b>Autor do livro: </b><?= $livroProgramacao->getAutor() ?></li>
		<li><b>Gênero do livro: </b><?= $livroProgramacao->getLinguagem() ?></li>
		<li><b>Formato: </b><?= $livroProgramacao->getFormato()->name ?></li>
	</ul>
</body>

</html>