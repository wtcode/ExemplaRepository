<?php
	include "../conect.php";
	
	$area 	= $_GET['area'];
	$emails	= $_GET['emails'];
	
	//echo $area;
	//echo $emails;
	
	$sqlUpdateConteudo = "update areacontato set emails = '" . $emails . "' where nome = '" . $area . "'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);


	echo "<script>
			location.href = '../../configuracoes.php?id=3'
		  </script>";
	

?>