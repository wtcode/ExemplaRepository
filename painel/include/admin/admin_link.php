<?php

if (isset($_GET['id']) == 1) {
	$id = $_GET['id']; 
	if($id == 1){   
		include "include/grid/grid_link.php";
	}else if ($id==2 ){
		include "include/form/form_link.php";
	}
} else{
	include "include/form/form_link.php";
}
?>