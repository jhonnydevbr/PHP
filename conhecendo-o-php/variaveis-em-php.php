<?php
	
	//echo "Utilizando variavéis no PHP";

	//echo "A variavél é uma parte alocada na memória do servidor";
	
	//Declaração e atribuição de um valor em uma variavél
	$nome = "Jhonny";

	//Mostrando o valor da variavel na tela

	echo $nome;

	//Para saber informações sobre a variavél... o comando var_dump é muito útil quando você utiliza array, para ver o os valores dentro da variavel;

	var_dump($nome);

	//Sempre que for criar a variavel, importante sempre criar um nome que você saiba o que significa, de preferência, CamelCase(Cada inicio da palavra com letra maiuscula). 
	// O PHP é Case Sensitive, ou seja, quando for chamar as variaveis, chame exatamente como você a declarou.

	//Exemplo:

	$anoNascimento = 1998;
	$nomeCompleto = "Jhonny Brustolin";

	//Importante: Cuidado com os nomes reservados no PHP; For Example: $this, nao tem como, pois this é uma palavra reservada da linguagem;

	//Comando para limpar as variavéis, pode ser uma ou várias ao mesmo tempo: unset($nome, $anoNascimento, $nomeCompleto);

	//Condição para mostrar a variavél somente se ela existir

	if (isset($nome)) {

		echo $nome;

	}

	//Concatenação:

	$cliente = $nomeCompleto . " " . $anoNascimento;

	echo $cliente;

	//Ecopo de Variaveis

	//Cada função tem o seu Escopo function{ ..escopo }, <?php ..escopo ..

	//Toda variavel declarada em algum escopo, só podera ser usada no mesmo escopo. Para que a variavél seja usada em outros escopos, declare a variavel como "global $nomeDaVariavel" dentro do escopo que deseja usa-la;



	
?>