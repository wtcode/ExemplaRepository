<?php

	if(isset($_GET['id']) and $_GET['id'] == 1){
		//alterar senha
		include "include/form/form_alterar_senha.php";

	} else if(isset($_GET['id']) and $_GET['id'] == 2) {
		//alterar parametros globais
		include "include/form/form_parametrizacao.php";

	} else if(isset($_GET['id']) and $_GET['id'] == 3) {

		include "include/grid/grid_configurar_contato.php";

	} else if(isset($_GET['pt']) and $_GET['pt']== 1) {

		include "include/form/form_produto.php";

	}

?>
