<?php 
	
	// A função setlocale, define em que linguagem e qual plataforma seu código irá rodar. Por precaução, deixar todas as possibilidades escritas na função.
	
	setlocale(LC_ALL, "pt_BR", "pt_BR.uft-8", "portuguese");

	echo ucwords(strftime("%A %B"));
	
 ?>