<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if($id == 1){
			include "include/grid/grid_portifolio.php";
		} else {
			include "include/form/form_portifolio.php";
	    } 
	} else {
		include "include/form/form_portifolio.php";
	}  
?>
