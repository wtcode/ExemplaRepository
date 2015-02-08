<?php
	include "../conect.php";
	
	
	//variáveis referente a dados da empresa
	$nomeEmpresa = $_POST['nomeEmpresa'];
    $cnpjEmpresa = $_POST['cnpjEmpresa'];
	$telefoneEmpresa = $_POST['telefoneEmpresa'];
	$ruaEmpresa = $_POST['enderecoRuaEmpresa'];
	$bairroEmpresa = $_POST['enderecoBairroEmpresa'];
	$cidadeEmpresa = $_POST['enderecoCidadeEmpresa'];
	$ufEmpresa = $_POST['enderecoUFEmpresa'];
	$cepEmpresa = $_POST['enderecoCepEmpresa'];
	$horarioEmpresa = $_POST['horarioEmpresa'];
	$emailEmpresa = $_POST['emailEmpresa'];
	$senhaEmailEmpresa = $_POST['senhaEmailEmpresa'];
	
	//variáveis referente a layout	
	$larguraLogo = $_POST['larguraImgLogo'];
	$alturaLogo = $_POST['alturaImgLogo'];
	$cordefundo = $_POST['corDeFundo'];
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$nomeEmpresa' WHERE  nmparametro = 'nome_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$cnpjEmpresa' WHERE  nmparametro = 'cnpj_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$telefoneEmpresa' WHERE  nmparametro = 'telefone_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$ruaEmpresa' WHERE  nmparametro = 'rua_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$bairroEmpresa' WHERE  nmparametro = 'bairro_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$cidadeEmpresa' WHERE  nmparametro = 'cidade_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$ufEmpresa' WHERE  nmparametro = 'uf_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$cepEmpresa' WHERE  nmparametro = 'cep_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$horarioEmpresa' WHERE  nmparametro = 'horariofuncionamento_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$emailEmpresa' WHERE  nmparametro = 'emailpadrao_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$senhaEmailEmpresa' WHERE  nmparametro = 'senhaemail_empresa'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$larguraLogo' WHERE  nmparametro = 'img_logo_largura'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$alturaLogo' WHERE  nmparametro = 'img_logo_altura'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	$sqlUpdate = "UPDATE parametrizacao SET valorparametro =  '$cordefundo' WHERE  nmparametro = 'cordefundo_layout'";
	$resultUpdateConteudo = mysql_query($sqlUpdate,$conect);
	
	
	
		
	/*$cont = 0;
	while($cont < 4){
		if($disponibilidade[$cont] != ""){
			$sql_insert_disponibilidade = "insert into diponibilidade_produto(idprodutos,descricao) values ('".$id."','".$disponibilidade[$cont]."')";
			$result_insert_disponibilidade = mysql_query($sql_insert_disponibilidade,$conect);
		}
		$cont++;
	}*/	
		
	//$_SESSION['idProdutos'] = $id;
	include "../upload/foto_logo.php";	
	
	echo "<script>
			location.href = '../../configuracoes.php?id=2&msg=1'
		  </script>";
?>