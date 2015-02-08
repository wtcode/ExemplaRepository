<?php 
include "../controle/conect.php";

$id = $_POST["id"];

if( $id == 0 ){
	echo "<option value='0'>Nada escolhido</option>";
} else{
	echo "<option value=''></option>";
	$sql_sub_categoria = "SELECT * FROM sub_categoria where idcategoria = '$id' order by titulo";
	$result_sub_categoria = mysql_query($sql_sub_categoria,$conect);
	while($linha_sub_categoria = mysql_fetch_array($result_sub_categoria)){
		echo "<option value='".$linha_sub_categoria['idsub_categoria']."'>".$linha_sub_categoria['titulo']."</option>";
	}
}

?>