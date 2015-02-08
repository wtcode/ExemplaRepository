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
	
	$sqlUpdateConteudo = "update produtos set idcategoria = '$categoria', idsub_categoria = '$sub_categoria', 
							idhabilitado = '$habilitar_site', titulo = '$titulo', descricao = '$descricao', 
							destaque_home = '$mostrar_home', destaque_topo = '$mostrar_topo', preco = '$preco' 
							where idprodutos = '$id'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
		
	$cont = 0;
	while($cont < 4){
		if($disponibilidade[$cont] != ""){
			$sql_insert_disponibilidade = "insert into diponibilidade_produto(idprodutos,descricao) values ('".$id."','".$disponibilidade[$cont]."')";
			$result_insert_disponibilidade = mysql_query($sql_insert_disponibilidade,$conect);
		}
		$cont++;
	}	
		
	$_SESSION['idProdutos'] = $id;
	include "../upload/fotos_produtos.php";	
	
	echo "<script>
			location.href = '../../produtos.php?id=3'
		  </script>";
?>