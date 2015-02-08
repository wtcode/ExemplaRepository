<?php

	if(isset($_GET['id']) and $_GET['id'] == 1){

		include "include/grid/grid_alterar_senha.php";

	} else if(isset($_GET['id']) and $_GET['id'] == 2) {

		include "include/grid/grid_parametros_globais.php";

	}

?>

