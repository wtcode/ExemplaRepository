<?php
	if(isset($_GET['pt'])){
		include "include/form/form_evento.php";
	}else{
		include "include/grid/grid_evento.php";
	}
?>