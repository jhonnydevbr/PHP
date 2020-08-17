<?php

	//Se uma função tem um 'return', é uma função. Se não tiver o 'return', é uma função, porém chamamos de subrotina

	function ola(){

		return "Olá mundo!<br>";

	}

	//Atribuir o retorno de uma função em uma variavél
	$frase = ola();

	/////////////////////////////////////////////////////////////

	function salario(){

		return 946.00;
	}

	echo "José recebeu 3 salários: ".(salario()*3);




?>