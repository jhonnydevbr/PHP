<?php 

	echo "Tipo de dados em PHP"

	//No PHP temos 8 tipos de dados primitivos, dividos em 3 grupos:

	// 1 º Grupo - Basicos: INT(Numerico), STRING (Texto), BOLEANO(Verdadeiro ou Falso);

	// 2 º Grupo - Compostos: Array e Objetos;

	// 4º Grupo - Especiais: Resource e Null;

	// Basicos

	$nome = "Code";
	$site = "www.google.com.br";
	$ano = 1998;
	$salario = 5500.99;
	$bloqueado = false;

	//Compostos

	$frutas = array("abacaxi", "morango", "maça");

	$nascimento = new DateTime();

	//Especiais

	$arquivo = fopen("tipos-de-dados-php.php", "r");

	$nulo = null;
	$vazio = " ";

	// Diferença entre Nulo e Vazio: Nulo é ausência de valor, já o vazio, foi iniciado e foi reservado na memória;



?>
