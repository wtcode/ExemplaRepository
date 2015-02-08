<?php
	include "../conect.php";
	
	$cdcadastro	     = $_POST['cdcadastro'];
	$nome 		     = $_POST['nome'];
	$descricao 		 = addslashes(stripslashes($_POST['descricao']));
	$cpf 			 = $_POST['cpf'];
	$cnpj		     = $_POST['cnpj'];
	$email 	         = $_POST['email'];
	$telefone	     = $_POST['telefone'];
	$rua 		     = $_POST['rua'];
	$numero		     = $_POST['numero'];
	$complemento	 = $_POST['complemento'];
	$bairro 		 = $_POST['bairro'];
	$cidade  		 = $_POST['cidade'];
	$estado  		 = $_POST['estado'];
	//Redes sociais
	$txtFacebook		 = $_POST['txtFacebook'];
	$txtLinkedIn		 = $_POST['txtLinkedIn'];
	$txtTwiter		 	 = $_POST['txtTwiter'];
	$txtInstagran		 = $_POST['txtInstagran'];
	
	
	$sqlInsertConteudo = "insert into cadastro(nome, 
												descricao, 
												cpf, 
												cnpj, 
												email, 
												telefone, 
												rua, 
												numero,  
												complemento, 
												bairro, 
												cidade, 
												estado, 
												tipo) 
							            values ('$nome', 
										        '$descricao', 
												'$cpf', 
												'$cnpj', 
												'$email', 
												'$telefone', 
												'$rua', 
												'$numero',  
												'$complemento', 
												'$bairro', 
												'$cidade', 
												'$estado',
												'T')";
							
	//echo $sqlInsertConteudo;
							
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	//echo $resultInsertConteudo;
	
	$capturaid = "SELECT max(cdcadastro) as ultimo FROM cadastro";
	$resultCapturaId = mysql_query($capturaid,$conect);
	$linhaCapturaId = mysql_fetch_array($resultCapturaId);
	
	$_SESSION['cdcadastro'] = $linhaCapturaId['ultimo'];
	
	$sqlInsertRedeSocial =  "INSERT INTO cadastro_redesocial (cdcadastro, facebook, twiter, linkedin, instagran) 
							VALUES 
							('" . $linhaCapturaId['ultimo'] . "', '$txtFacebook', '$txtTwiter', '$txtLinkedIn', '$txtInstagran')";
							
	$resultInsertRedeSocial = mysql_query($sqlInsertRedeSocial,$conect);
	
	//echo $_SESSION['cdcadastro'];
	
	include "../upload/fotos_funcionario.php";	
	
	echo "<script>
			location.href = '../../cadastramento.php?cad=3'
		  </script>";
?>