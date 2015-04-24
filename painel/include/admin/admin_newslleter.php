<?php
	if(isset($_GET['id']) == 1){
		include "include/grid/grid_newslleter.php";
	}else{
		include "include/exporta_excel.php";
	}	
?>