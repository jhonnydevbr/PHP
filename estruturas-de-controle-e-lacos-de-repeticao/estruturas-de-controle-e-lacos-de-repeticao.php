<?php

	echo "Estruturas de Controle e Laços de Repetição"; echo "<br>";

	// Servem para controlar o fluxo no sistema, para tomar as ações necessárias de acordo com determinada situação.
	
	echo "IF";	echo "<br>";

	//// IF ////

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
		echo "<br>";
		echo "<br>";
		echo "<br>";


		/////////////////////////////////////////////////////////


	//// SWITCH CASE ////

		//A difrença entre o IF e o Switch Case: usamos switch case quando sabemos quais informações irão vir.

		echo "SWITCH CASE"; echo "<br>";

		$diaDaSemana = date("w");

		switch ($diaDaSemana) {
			case 0:
				echo "Domingo";
				break;
			case 1:
				echo "Segunda-Feira";
				break;
			case 2:
				echo "Terça-Feira";
				break;
			case 3:
				echo "Quarta-Feira";
				break;
			case 4:
				echo "Quinta-Feira";
				break;
			case 5:
				echo "Sexta-Feira";
				break;
			case 6:
				echo "Sabado";
				break;
			default:
				echo "Data invalida";
			break;	
		}

		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";

	////////////////////////////////////////////

	///////////////// LAÇOS DE REPETIÇÕES: FOR, FOR EACH E WHILE /////////////////

	//// FOR ////
		
		//Utilizado como contador, tem inicio e fim, e tem decremento ou incremento;

		echo "FOR";	echo "<br>";

		for ($i = 0; $i < 10; $i++){

			echo $i . "<br>";

		}

		for ($i = 0; $i < 1000; $i+=5){

			echo $i . "<br>";

		}

		for ($i = 0; $i < 1000; $i+=5){

			if($i > 200 && $i < 800) continue;

			if($i === 900) break;

			echo $i . "<br>";

		}

		//Cuidado com o FOR

			//Nesse caso, o i está diminuindo, ou seja, ele nunca vai ser 0, vai ser -1, -2 e etc...
			//E pode até cair o servidor por causa disso.

		/*for ($i=0; $i < 10; $i--) { 
			
			echo $i . " ";
		}*/


		echo "<select>";

			for ($i=date("Y"); $i >= date("Y")-100; $i--) { 
				
				echo '<option value="'.$i.'">'.$i.'</option>';
			}

		echo "</select>";

		

?>