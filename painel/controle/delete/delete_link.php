<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	
	$sqlDeleteConsultoria = "DELETE FROM frete WHERE idfrete = '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = "../../frete.php";
</script>