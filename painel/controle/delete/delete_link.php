<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	
	$sqlDeleteConsultoria = "DELETE FROM link WHERE idlink = '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = "../../link.php?id=1";
</script>