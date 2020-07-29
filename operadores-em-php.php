<?php

	echo "Operadores em PHP";

	// ' = ' é o operador de atribuição
	$nome = "Jhonny";

	// ' . ' é o operador ponto, de string, concatenação

	echo $nome . " Brustolin";

	// ' .= ' é o operador para atribuir mais um valor na variavel

	$nome .= " Nascido em curitiba";

	// ' += ', ' -= ', ' *= 'usados para atribuir valres as variaveis somando com o valor já existente:

	$valorTotal = 0;

	$valorTotal += 100;

	$valorTotal -= 25;

	$valorTotal *= .9;

	// Operadores aritimeticos: '+', '-', '/', '%'(resto da divisão), '**'(ao quadrado);
	// $a++ acrescenta +1
	// $a-- diminuy -1

	$a = 10;
	$b = 2;

	echo $a + $b; echo "<br>";
	echo $a - $b; echo "<br>";
	echo $a * $b; echo "<br>";
	echo $a / $b; echo "<br>";
	echo $a % $b; echo "<br>";
	echo $a ** $b; echo "<br>";

	// Operadores de comparação:

		// == igualdade de valor
		// === igualdade de tipo de variavel
		// != diferente
		//!== valida tmb o tipo de dados
		// <=> operador spaceship 
		// ?? Se for nulo o valor da variavel, ele nao mostra;
		// && Verifica se ambas ações são verdadeiras
		// || verifica se alguma operação é verdadeira

	$j = 30;
	$b = 55;

	var_dump($a > $b); echo "<br>";
	var_dump($a < $b); echo "<br>";
	var_dump($a == $b); echo "<br>";
	var_dump($a === $b); echo "<br>";
	var_dump($a != $b); echo "<br>";
	var_dump($a !== $b); echo "<br>";
	var_dump($a <=> $b); echo "<br>";


?>