<?php

	echo "Estruturas de Controle e Laçõs de Repetição"; echo "<br>";

	// Servem para controlar o fluxo no sistema, para tomar as ações necessárias de acordo com determinada situação.

	// IF

		$idadeCrianca = 12;
		$idadeMaior = 18;
		$idadeMelhor = 65;
		$suaIdade = 30;

		if ($suaIdade < $idadeCrianca){

			echo "Você é criança";

		} else if ($suaIdade < $idadeMaior) {
			
			echo "Adolescente";

		}else if ($suaIdade < $idadeMelhor) {

			echo "Adulto";

		} else {

			echo "Idoso";
		}

		echo "<br>";

		//Utilizando operador ternario, ao inves do IF.
		echo ($suaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";
		

?>