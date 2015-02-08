<?php
	if(isset($_GET['pt'])){
		include "include/form/form_receita.php";
	}else{
		include "include/grid/grid_frete.php";
	}
?>