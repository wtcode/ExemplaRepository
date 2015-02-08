<?php
	include "../conect.php";
	
	$id 			 = $_POST['id'];
	$titulo 		 = $_POST['titulo'];
	$descricao 		 = addslashes(stripslashes($_POST['descricao']));
	$preco 			 = $_POST['preco'];
	$habilitar_site  = $_POST['habilitar_site'];
	$mostrar_topo 	 = $_POST['mostrar_topo'];
	$mostrar_home	 = $_POST['mostrar_home'];
	$disponibilidade = $_POST['disponibilidade'];
	$categoria 		 = $_POST['categoria'];
	$sub_categoria   = $_POST['sub_categoria'];
	
	$sqlInsertConteudo = "insert into produtos(idcategoria, idsub_categoria, idhabilitado, titulo, descricao, destaque_home, destaque_topo, preco) 
							values ('$categoria', '$sub_categoria', '$habilitar_site', '$titulo', '$descricao', '$mostrar_home', '$mostrar_home', '$preco')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	$capturaid = "select idprodutos from produtos where idprodutos = LAST_INSERT_ID()";
	$resultCapturaId = mysql_query($capturaid,$conect);
	$linhaCapturaId = mysql_fetch_array($resultCapturaId);
	
	$cont = 0;
	while($cont < 4){
		if($disponibilidade[$cont] != ""){
			$sql_insert_disponibilidade = "insert into diponibilidade_produto(idprodutos,descricao) values ('".$linhaCapturaId['idprodutos']."','".$disponibilidade[$cont]."')";
			$result_insert_disponibilidade = mysql_query($sql_insert_disponibilidade,$conect);
		}
		$cont++;
	}

	$_SESSION['idProdutos'] = $linhaCapturaId['idprodutos'];
	
	include "../upload/fotos_produtos.php";
	
	echo "
	<script>
		location.href = '../../produtos.php?id=3'
	</script>
	";
?>