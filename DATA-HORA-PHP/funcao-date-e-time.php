<?php 

	// Função date()
		echo date("d/m/Y H:i:s");
		echo "<br>";

	// Timestamp atual (Quantidade de segundos desde 1970)
		echo time();
		echo "<br>";

	// Descobrir um timestamp de qualquer data
		echo strtotime("2001-09-11");
		echo "<br>";

	// Colocar qualquer time stamp em formato de date
		$ts = strtotime("2001-09-11");
		echo date("l, d/m/Y", $ts);

	// Timestamp de agora
		$today = strtotime("now");

	// Timestamp de amanhã
		$tomorrow = strtotime("+1 day");

	// Timestamp de semana que vem
		$nextWeek = strtotime("+1 week");
 ?>