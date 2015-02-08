<?php
	/* $conect = mysql_connect("localhost","root","");
	 $db = mysql_select_db("viajetem_site",$conect);*/

	/*$conect = mysql_connect("localhost","viajetem_site","ad0k_07.");
	$db = mysql_select_db("viajetem_site",$conect);*/
		
require_once 'class.upload.php';

$_SESSION["erro"] = array();
$_SESSION["sucesso"] = array();


$tamanhoMaximo = "50000000";

$GLOBALS['album'] = $_POST['album'];
$GLOBALS['sessao'] = $_POST['sessao'];

function realizaUploadImagem($file, $tamanhoMaximo) {
		include "../conect.php";
	
		$_SESSION['album']  = $GLOBALS['album'];  
	 	$_SESSION['sessao'] = $GLOBALS['sessao'];
		
		$album = $_SESSION['album'];
		$sessao = $_SESSION['sessao'];
	  
	  	// Instanciamos o objeto Upload
		$handle = new upload($file);
				
		// Então verificamos se o arquivo foi carregado corretamente
		if ($handle->uploaded) {   
			$nomeFoto = rand(00000,99999);
			$nomeGrande = $nomeFoto;    
			// Definimos as configurações desejadas da imagem maior
			$handle->image_resize            = true;						
			$handle->file_new_name_body		 = $nomeGrande;
			$handle->file_max_size			 = $tamanhoMaximo;
			$handle->image_x                 = 150;
			$handle->image_y       			 = 100;
			$handle->image_ratio             = true;
			// Definimos a pasta para onde a imagem maior será armazenada
			$handle->process('../../../album/midia/');
					
			// Em caso de sucesso no upload podemos fazer outras ações como insert em um banco de cados
			if ($handle->processed) {
						/*echo "<script> window.location.href ='../fotoCadastra.php?msgFoto=1' </script>";*/
				
			} else {
				// Em caso de erro listamos o erro abaixo
			  $_SESSION["erro"][] = "<div id='mensagem'>".
									 "<div class='erro' >".
									 "Erro: " . $handle->error . " <br />".
									 "Contate o suporte e descreva os passos que chegaram ate aqui.".
									 "</div></div>";
				echo "<script> document.location.href='../../principal.php?error=1' </script>";
				die ();
			}
			$_SESSION["nomeImage"] =  $handle->file_dst_name;
			
			$imagem = $_SESSION["nomeImage"];
					
			$nomeThumb = "thumb_".$nomeGrande;
			
					
			// Aqui nos devifimos nossas configurações de imagem do thumbs			
			$handle->image_resize            = true;						
			$handle->image_x                 = 188;
			$handle->image_y       			 = 280;
			$handle->file_new_name_body		 = $nomeThumb;
			$handle->file_max_size			 = $tamanhoMaximo;
			
			// colocar TRUE pra manter a proporção da imagem original - by Rande A. Moreira
			$handle->image_ratio             = true;
				
			// Definimos a pasta para onde a imagem thumbs será armazenada
			$handle->process('../../../album/midia_thumb/');
					
			// Excluimos os arquivos temporarios
			$handle-> clean();
			
		 } else {
			 
			 echo "erro 2";
		  // Em caso de erro listamos o erro abaixo
		$_SESSION["erro"][] = "<div id='mensagem'>".
								 "<div class='erro' >".
								 "Erro: " . $handle->error . " <br />".
								 "Contate o suporte e descreva os passos que chegaram ate aqui.".
								 "</div></div>";
			echo "<script>document.location.href='../../principal.php';</script>";
			die(" ");
		 } 
        
        // Aqui somente recupero o nome da imagem caso queira fazer um insert em banco de dados
		$nome_da_imagem = $handle->file_dst_name;
	    //$imagem;
		
		
		/*$sqlBuscaAlbum = "select idAlbuns from albuns where nome like '%$album%'";
		$resultAlbum = mysql_query($sqlBuscaAlbum,$conect);
		$linhaAlbum = mysql_fetch_array($resultAlbum);
		$idAlbum = $linhaAlbum['idAlbuns'];
		
		$sqlInsertImage = "insert into image_album (idAlbuns,patch) values ('$idAlbum','album/$sessao/$album/$imagem')";
		$resultInsertImage = mysql_query($sqlInsertImage,$conect);
		//mysql_close($conect);*/

}


if ($_POST['acao'] == 'imagem') {
	$count = 0;
	foreach ($_FILES as $img) {
		 if (!empty($img["name"])) {
			 realizaUploadImagem($img, $tamanhoMaximo);
     	 }
		 $count++;
	}
}

echo "Processando...";

?>