<?php
	include "../conect.php";
	
	$cdcadastro		 = $_POST['cdcadastro'];
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
	
	$sqlUpdateConteudo = "update cadastro set nome = '$nome', 
							cpf = '$cpf', cnpj = '$cnpj', email = '$email', 
							telefone = '$telefone', tipo = 'T', rua = '$rua', numero = '$numero', complemento = '$complemento', bairro = '$bairro',
							cidade = '$cidade', estado = '$estado', descricao = '$descricao'
							where cdcadastro = '$cdcadastro'";
		
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	
	//redes sociais
	$sqlUpdatetRedeSocial =  "UPDATE cadastro_redesocial 
								SET facebook = '$txtFacebook', 
								twiter = '$txtTwiter', 
								linkedin = '$txtLinkedIn', 
								instagran = '$txtInstagran' 
								WHERE cdcadastro = '$cdcadastro'; ";
							
	$resultUpdateRedeSocial = mysql_query($sqlUpdatetRedeSocial,$conect);
	
	$_SESSION['cdcadastro'] = $cdcadastro;
	
	//echo $_SESSION['cdcadastro'];
	
	include "../upload/fotos_funcionario.php";	
	
	echo "<script>
			location.href = '../../cadastramento.php?cad=3'
		  </script>";
?>