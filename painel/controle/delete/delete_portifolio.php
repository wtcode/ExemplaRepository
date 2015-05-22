<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	
	$sqlDeleteConsultoria = "DELETE FROM conteudo WHERE idconteudo= '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = "../../portifolio.php?id=1";
</script>