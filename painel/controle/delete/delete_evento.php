<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	
	$sqlDeleteConsultoria = "DELETE FROM evento WHERE idEvento = '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = "../../evento.php";
</script>