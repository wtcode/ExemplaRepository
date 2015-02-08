<?php

	if(isset($_GET['id']) and $_GET['id'] == 1){

		include "include/grid/grid_alterar_senha.php";

	} else if(isset($_GET['id']) and $_GET['id'] == 2) {

		include "include/grid/grid_parametros_globais.php";

	} else if(isset($_GET['id']) and $_GET['id'] == 3) {

		include "include/grid/grid_configurar_contato.php";

	} else if(isset($_GET['pt']) and $_GET['pt']== 1) {

		include "include/form/form_produto.php";

	}?>

