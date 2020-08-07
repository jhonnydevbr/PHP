<?php

	// Array em PHP

		// Vetor = quando tem somente 1 dimensão.

	//Criação básica de um array(vetor)
	$frutas = array("Laranja","Abacaxi","Melancia");

	//exibir o conteudo de um array
	print_r($frutas);

	// Array bidimensional

	$carro[0][0] = "GM";
	$carro[0][1] = "Cobalt";
	$carro[0][2] = "Onix";
	$carro[0][3] = "Camaro";

	$carro[1][0] = "Ford";
	$carro[1][1] = "Fiesta";
	$carro[1][2] = "Fusion";
	$carro[1][3] = "EcoSport";

	echo $carro[0][3];

	// A função end(), traz o último registro de uma determinada posição..
	echo end($carro[1]);

	///////////////////////////////////////////////////////////////////////////////////////////////

	// Funções em Arrays:


?>