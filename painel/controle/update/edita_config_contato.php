<?php
	include "../conect.php";
	
	$autenticacaosmtp 	= $_POST['autenticacaosmtp'];
	$destino1 		 	= $_POST['destino1'];
	$destino2 		 	= $_POST['destino2'];
	$destino3		 	= $_POST['destino3'];
	$emailorigem     	= $_POST['emailorigem'];
	$host 	 		 	= $_POST['host'];
	$mensagemcliente 	= addslashes(stripslashes($_POST['mensagemcliente']));
	$nomeorigem 	 	= $_POST['nomeorigem'];
	$notificarcliente	= $_POST['notificarcliente'];
	$senha   		 	= $_POST['senha'];
	$usuario  	     	= $_POST['usuario'];
	$assuntonotificacao	= $_POST['assuntonotificacao'];
	$assuntoresposta   	= $_POST['assuntoresposta'];
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$autenticacaosmtp' where nmparametro = 'autenticacaosmtp'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$destino1' where nmparametro = 'destino1'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$destino2' where nmparametro = 'destino2'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$destino3' where nmparametro = 'destino3'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$emailorigem' where nmparametro = 'emailorigem'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$host' where nmparametro = 'host'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$mensagemcliente' where nmparametro = 'mensagemcliente'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$nomeorigem' where nmparametro = 'nomeorigem'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$notificarcliente' where nmparametro = 'notificarcliente'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$senha' where nmparametro = 'senha'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$usuario' where nmparametro = 'usuario'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$assuntonotificacao' where nmparametro = 'assuntonotificacao'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	$sqlUpdateConteudo = "update configcontato set valorparametro = '$assuntoresposta' where nmparametro = 'assuntoresposta'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	echo "<script>
			location.href = '../../configuracoes.php?id=3'
		  </script>";
	

?>