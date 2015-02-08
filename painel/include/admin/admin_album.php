<?php
if(isset($_GET['up'])){
		include "include/form/uploadFotos.php";
	}else{
		if(!isset($_GET['pt'])){
			include "include/grid/gridAlbum.php";
		}else{
			include "include/form/formAlbum.php";
		}
	}
	
?>