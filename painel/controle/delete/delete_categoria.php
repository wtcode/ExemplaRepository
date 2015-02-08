<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	$sql_sub_categoria = "SELECT * FROM sub_categoria where idcategoria = '$id'";
	$result_sub_categoria = mysql_query($sql_sub_categoria,$conect);
	while($linha_sub_categoria = mysql_fetch_array($result_sub_categoria)){
		if($linha_sub_categoria['idsub_categoria'] != ""){
			$delete_sub_categoria = "delete from sub_categoria where idcategoria = '$id'";			
			$result_delete_sub_categoria = mysql_query($delete_sub_categoria,$conect);
		}
	}
	
	$sql_delete_categoria 	 = "delete from categoria where idcategoria = '$id'";
	$result_delete_categoria = mysql_query($sql_delete_categoria,$conect); 
?>
<script>
	location.href = "../../produtos.php?id=1"
</script>