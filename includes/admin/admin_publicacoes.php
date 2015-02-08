<?php 
//admin publicações
	
	if (isset($_GET["nt"])){
			include("detalhe_publicacao.php");
		}
	else{
		//quando não houver nenhumm parametro deve entrar neste else
		//echo "1";
		include'include/grid/grid_pubilicacao.php';
		}
	
?>
