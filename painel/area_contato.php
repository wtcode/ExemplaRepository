<?php
	//$teste = "conteudo";
	require_once ("controle/conect.php");

	$q = $_GET['q'];
	
	$sql="SELECT * FROM areacontato WHERE nome = '".$q."'";
	//echo $sql;
	
	$result = mysql_query($sql,$conect);
	$row = mysql_fetch_array($result);
	echo "<textarea rows='3' id='emails' name='emails' >" . $row['emails'] . " </textarea>";
	//echo "<textarea rows='3' id='emails' name='emails' >" . $q . " </textarea>";
	echo "<input type='submit' value='Atualizar'>";
	
	
?>