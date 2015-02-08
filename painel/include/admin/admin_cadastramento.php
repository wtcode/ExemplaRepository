<?php
	if($_GET['cad'] == 1){
		include "../painel/clientes.php";
	} else if($_GET['cad'] == 2) {
		include "include/grid/grid_parceiros.php";
	} else if($_GET['cad'] == 3) {
		include "include/grid/grid_funcionarios.php";
	} else if($_GET['nf'] == 1) {
		//cadastra funcionario
		include "include/form/form_funcionario.php";
	} 
?>
