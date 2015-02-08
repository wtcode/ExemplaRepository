<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	
	$delete_sub_categoria = "delete from sub_categoria where idsub_categoria = '$id'";			
	$result_delete_sub_categoria = mysql_query($delete_sub_categoria,$conect);

?>
<script>
	location.href = "../../produtos.php?id=2"
</script>