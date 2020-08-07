<?php

	// JSON - JAVA SCRIPT OBJECT NATATION

	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'João',
		'idade'=>20
	));

	array_push($pessoas, array(
		'nome'=>'Maria',
		'idade'=>25
	));

	// Tranforma Array em JSON
	echo json_encode($pessoas);

	echo "<br>";
	echo "<br>";
	echo "<br>";


	// Tranforma JSON em Array

	$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Maria","idade":25}]';

	$data = json_decode($json, true);
		
	var_dump($data);

?>