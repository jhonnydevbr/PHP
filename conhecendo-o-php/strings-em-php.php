<?php

	echo "Strings em PHP"; echo "<br>";

	$nome = "Jhonny";
	$nome2 = 'Exemplo';

	// Diferenças entre aspas duplas e aspas simples:
		// Se usar aspas duplas, da para mostrar o conteudo da variavel junto com algum valor (Mais viavél usar concatenação):

		echo "Nome: $nome"; echo "<br>";

		//Aspas simples, o PHP entende que tudo é texto, ou seja, se vc escrever o nome da variavel, ele imprime o que vc digitou, nao o valor da variavel

		echo 'Nome: $nome'; echo "<br>";

	//////////////////////////

	// Função para colocar a string em MAIUSCULO:

		$texto = "aqui vai um texto"; 

		echo strtoupper($texto); echo "<br>";

	// Função para colocar a string em MINUSCULO:

		$texto2 = "AQUI VAI UM TEXTO";

		echo strtolower($texto2); echo "<br>";

	// Função para colocar em maiusculo as letras iniciais

		$texto3 = "jhonny brustolin";

		echo ucwords($texto3); echo "<br>";

	// Função para colocar em maiusculo somente a primeira letra

		$texto4 = "jhonny brustolin";

		echo ucfirst($texto4); echo "<br>";

	// Trocar informação de uma string(Replace), por outra coisa, exemplo: Substituir o E do nome Apple, por 3.

		$empresa = "Apple";

		$empresa = str_replace("e", "3", $empresa);

		echo $empresa; echo "<br>";

	// Como procurar algo em uma String, texto e etc...

		$frase = "A repetição é a mãe da retenção";

		 //Aqui retorna o indice de onde a palavra esta no texto que vc esta procurando;
		
		$qualPalavraEstouProcurando = strpos($frase, "mãe");

		//No caso da palavra "mãe", ela está no indice 17.
			//Caso você queira pegar o texto antes dessa palavra, utilize a função abaixo, passando como parametro a variavel em que o texto está, 0 que é o inicio do indice e a variavel do indice da palavra.

		$parteDoTexto = substr($frase, 0, $qualPalavraEstouProcurando);

			//Caso você queira pegar o texto DEPOIS dessa palavra, utilize a função abaixo:

		$parteDoTexto = substr($frase, $qualPalavraEstouProcurando);

		var_dump($parteDoTexto);


?>