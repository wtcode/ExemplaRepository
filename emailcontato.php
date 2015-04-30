<?php

	//Retorna do banco(tab configcontato) as variáveis utilizadas para envio de email -----teste git
	
	include("includes/conect.php");
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'autenticacaosmtp'";
	$autenticacaosmtp = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'emailorigem'";
	$emailorigem = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'host'";
	$host = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'mensagemcliente'";
	$mensagemcliente = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'nomeorigem'";
	$nomeorigem = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'notificarcliente'";
	$notificarcliente = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'senha'";
	$senha = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'usuario'";
	$usuario = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'assuntonotificacao'";
	$assuntonotificacao = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'assuntoresposta'";
	$assuntoresposta = mysql_fetch_array(mysql_query($sql,$conect));
	
	
	//Captura os campos do formulário de contato (FrontEnd)
	$nome_FE 		= $_POST['nome'];
	$email_FE  		= $_POST['email'];
	$telefone_FE 	= $_POST['telefone'];
	$assunto_FE 	= $_POST['assunto'];
	$area_FE  	    = $_POST['area'];
	$mensagem_FE 	= $_POST['mensagem'];
	
	/*
	echo $nome_FE;
	echo $email_FE;
	echo $telefone_FE;
	echo $assunto_FE;
	echo $area_FE;
	echo $mensagem_FE;
	
	echo $autenticacaosmtp['valorparametro'];
	echo $emailorigem['valorparametro'];
	echo $host['valorparametro'];
	echo $mensagemcliente['valorparametro'];
	echo $nomeorigem['valorparametro'];
	echo $notificarcliente['valorparametro'];
	echo $senha['valorparametro'];
	echo $usuario['valorparametro'];
	echo $assuntonotificacao['valorparametro'];
	echo $assuntoresposta['valorparametro'];
	*/

	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
	require("phpmailer/class.phpmailer.php");
	
	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	
	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsSMTP(); // Define que a mensagem será SMTP
	$mail->Host = $host['valorparametro']; // Endereço do servidor SMTP
	if ($autenticacaosmtp = 'on'){
		$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	}
	$mail->Username = $usuario['valorparametro']; // Usuário do servidor SMTP
	$mail->Password = $senha['valorparametro']; // Senha do servidor SMTP
	
	// Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->From = $emailorigem['valorparametro']; // Seu e-mail
	$mail->FromName = $nomeorigem['valorparametro']; // Seu nome
	
	//Envia email de resposta para o cliente
	
	if ($notificarcliente['valorparametro'] == "on"){
		//Define o destinatário
		$mail->AddAddress($email_FE, $nome_FE);
		$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
		// Define a mensagem (Texto e Assunto)
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		$mail->Subject  = $assuntoresposta['valorparametro']; // Assunto da mensagem
		$mail->Body = $mensagemcliente['valorparametro'];
		$mail->AltBody = $mensagemcliente['valorparametro'];
		// Envia o e-mail
		$enviado = $mail->Send();
		
		// Limpa os destinatários e os anexos
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
		
		//Mensagens de sucesso de envio		
		if ($enviado) {
		echo "E-mail 1 enviado com sucesso!";
		} else {
		echo "Não foi possível enviar o e-mail.<br /><br />";
		echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
		}
	}
	
	//Envia notificação para os donos da empresa acerca do contato do cliente
	
	$mail = new PHPMailer();
	
	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsSMTP(); // Define que a mensagem será SMTP
	$mail->Host = $host['valorparametro']; // Endereço do servidor SMTP
	if ($autenticacaosmtp['valorparametro'] = 'on'){
		$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	}
	$mail->Username = $usuario['valorparametro']; // Usuário do servidor SMTP
	$mail->Password = $senha['valorparametro']; // Senha do servidor SMTP
	
	// Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->From = $emailorigem['valorparametro']; // Seu e-mail
	$mail->FromName = $nomeorigem['valorparametro']; // Seu nome
	
	// Define os destinatário(s)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$sql = "SELECT emails FROM areacontato where nome = '$area_FE'";
	$emailsarea = mysql_fetch_array(mysql_query($sql,$conect));
	
	//echo $sql;
	//echo "campo email: " . $emailsarea['emails'];
	
	
	$emailsarea_cut = explode(',', $emailsarea['emails']);

	//print_r( $emailsarea_cut);

	foreach($emailsarea_cut as $valor){
		$mail->AddAddress($valor);
		//echo "Valor: $valor<br />\n";
	}
		
	//$mail->AddAddress('wallaceat14@gmail.com', 'Wallace teste destinatario');
	//$mail->AddAddress('ciclano@site.net');
	//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
	//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
	
	// Define os dados técnicos da Mensagem
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
	//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
	
	// Define a mensagem (Texto e Assunto)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->Subject  = $assuntonotificacao['valorparametro'] . "-" . "$assunto_FE"; // Assunto da mensagem
	$mail->Body = "Um cliente entrou em contato com voce! <br /><br />
	 				 Nome: $nome_FE <br />
					 Email: $email_FE <br />
					 Telefone: $telefone_FE <br />
					 Assunto: $assunto_FE <br />
					 Area: $area_FE <br /><br />
					 Mensagem: <br /><br /> $mensagem_FE";
	$mail->AltBody = "Um cliente entrou em contato com voce! <br /><br />
	 				 Nome: $nome_FE <br />
					 Email: $email_FE <br />
					 Telefone: $telefone_FE <br />
					 Assunto: $assunto_FE <br />
					 Area: $area_FE <br /><br />
					 Mensagem: <br /><br /> $mensagem_FE";
	
	// Define os anexos (opcional)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
	
	// Envia o e-mail
	$enviado = $mail->Send();
	
	// Limpa os destinatários e os anexos
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();
	
	// Exibe uma mensagem de resultado
	
	if ($enviado) {
	echo "E-mail 2 enviado com sucesso!";
	} else {
	echo "Não foi possível enviar o e-mail.<br /><br />";
	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
	}
	
?>