<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	
	$sqlDeleteConsultoria = "DELETE FROM receita WHERE idreceita = '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = "../../receita.php";
</script>