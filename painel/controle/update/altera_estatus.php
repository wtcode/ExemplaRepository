<?php
	include "../conect.php";
	$id = $_GET['id'];
	$est = $_GET['est'];
	
	$sql_altera_estatus = "update banner set estatus = '$est' where idbanner = '$id'";
	$result_altera_estatus = mysql_query($sql_altera_estatus,$conect);
?>
<script>  
 location.href = "../../gestao_banner.php"
</script>  
