<?php 
	
	// Funcções anônimas: Função não tem nome, basta sua execução e também não tem return

	function teste($callback){

		// Processo lento

		$callback();

	}

	teste(function(){

		echo "Teriminou";

	});

	echo "<br>";
	echo "<br>";
	echo "<br>";

	$fn = function($a){

		var_dump($a);

	};
	
	$fn("Oi");
	
 ?>