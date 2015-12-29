<?php
	if(isset($_GET['id']) && $_GET['id'] == 1){
		include "../painel/clientes.php";
	} else if(isset($_GET['cad']) && $_GET['cad'] == 2) {
		include "include/grid/grid_parceiros.php";
	} else if(isset($_GET['cad']) && $_GET['cad'] == 3) {
		include "include/grid/grid_funcionarios.php";
	} else if(isset($_GET['nf']) && $_GET['nf'] == 1) {
		//cadastra funcionario
		include "include/form/form_funcionario.php";
	} else if(isset($_GET['cad']) && $_GET['cad'] == 4) {
		//cadastra portifolio
		include "include/grid/grid_portifolio.php";
	} else if(isset($_GET['cad']) && $_GET['cad'] == 5) {
		//lista area de atuação
		include "include/grid/grid_areadeatuacao.php";
	} else if(isset($_GET['cad']) && $_GET['cad'] == 6) {
		//formulario area de atuação
		include "include/form/form_areadeatuacao.php";
	}
?>
