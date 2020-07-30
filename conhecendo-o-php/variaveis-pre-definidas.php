<?php
	
	echo "Variavéis Pré-Definidas"; echo "<br>";

	//Também conhecidas como arrays super globais(podem ser acessadas em qualquqer escopo em qualquer ponto)
	//São variavéis internas do PHP que já vem com alguns recursos, tanto externa(GET E POST que pegam informações externas) quanto ambiente.

	$nome = $_GET["a"];

	//var_dump($nome);
	
	$ip = $_SERVER["REMOTE_ADDR"];

	echo $ip;
?>