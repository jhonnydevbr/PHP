<?php

session_start();

// Gera um novo arquivo/id de sessão, por exemplo: A tela de login chama o valida.php e nesse arquivo valida, criamos o sesssion_regenerate_id() para segurança que será realmente criado um novo id;
sesssion_regenerate_id();

?>