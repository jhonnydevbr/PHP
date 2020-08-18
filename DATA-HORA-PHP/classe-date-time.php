<?php 

	// Classe para usar datas com mais praticidade.

	$dt = new DateTime();

	$periodo = new DateInterval("P15D");

	$dt->add($periodo);

	echo $dt->format("d/m/Y H:i:s");

 ?>