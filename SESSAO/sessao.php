<?php

	// Variavel local, só funciona na pagina onde foram criados ou com include / require
	// Variavel de sessão é enxergada em todo o código, enquanto o usuário está conectado.

	// Sessão

		// A partir do momento em que o usuário acessa o site, uma sessão é criada entre o cliente e o servidor

	session_start();

	$_SESSION['nome'] = "Hcode";

	// Excluir sessao, limpa variavel
	session_unset($_SESSION['nome']);
	// Exlui sessão e usuario
	session_destroy();


?>