<?php	
require_once 'class.upload.php';

$_SESSION["erro"] = array();

$_SESSION["sucesso"] = array();

$tamanhoMaximo = "50000000000000000";

$GLOBALS['idconteudo'] = $_SESSION['idconteudo'];

function realizaUploadImagem($file, $tamanhoMaximo, $titulo) {

	include "../conect.php";

	  	// Instanciamos o objeto Upload

		$handle = new upload($file);

		// Ent�o verificamos se o arquivo foi carregado corretamente

		if ($handle->uploaded) {   

			$nomeFoto = rand(00000,99999);

			$nomeGrande = $nomeFoto;    

			// Definimos as configura��es desejadas da imagem maior

			$handle->file_new_name_body		 = $nomeGrande;

			$handle->file_max_size			 = $tamanhoMaximo;

			$handle->image_x                 = 270;

			$handle->image_y       			 = 155;

			$handle->image_resize            = true;

			$handle->image_ratio             = true;

			// Definimos a pasta para onde a imagem maior ser� armazenada

			$handle->process('../../../imagens/');

			// Em caso de sucesso no upload podemos fazer outras a��es como insert em um banco de cados

			if ($handle->processed) {

						/*echo "<script> window.location.href ='../fotoCadastra.php?msgFoto=1' </script>";*/

			} else {

				// Em caso de erro listamos o erro abaixo

			  $_SESSION["erro"][] = "<div id='mensagem'>".

									 "<div class='erro' >".

									 "Erro: " . $handle->error . " <br />".

									 "Contate o suporte e descreva os passos que chegaram ate aqui.".

									 "</div></div>";

				echo "<script> location.href = '../../link.php?id=1' </script>";

				die ();

			}

			$_SESSION["nomeImage"] =  $handle->file_dst_name;

			$imagem = $_SESSION["nomeImage"];
			/*
			$nomeThumb = "thumb_".$nomeGrande;

			// Aqui nos devifimos nossas configura��es de imagem do thumbs			

			$handle->image_resize            = true;						

			$handle->image_x                 = 270;

			$handle->image_y       			 = 155;

			$handle->file_new_name_body		 = $nomeThumb;

			$handle->file_max_size			 = $tamanhoMaximo;

			// colocar TRUE pra manter a propor��o da imagem original - by Rande A. Moreira

			$handle->image_ratio             = true;

			// Definimos a pasta para onde a imagem thumbs ser� armazenada

			$handle->process('../../../imagens/links/miniaturas/');
*/
			// Excluimos os arquivos temporarios

			$handle-> clean();

		 } else {

		  // Em caso de erro listamos o erro abaixo

		  $_SESSION["erro"][] = "<div id='mensagem'>".

								 "<div class='erro' >".

								 "Erro: " . $handle->error . " <br />".

								 "Contate o suporte e descreva os passos que chegaram ate aqui.".

								 "</div></div>";

			echo "<script> document.location.href='cadastraFoto.php'; </script>";

			die(" ");

		 } 

        // Aqui somente recupero o nome da imagem caso queira fazer um insert em banco de dados

		$nome_da_imagem = $handle->file_dst_name;

	  	$idconteudo = $GLOBALS['idconteudo'];

		$sqlUpdateImage = "update conteudo set patch = '$imagem' where idconteudo = $idconteudo";

		$resultInsertImage = mysql_query($sqlUpdateImage,$conect);

		mysql_close($conect);

}

if ($_POST['acao'] == 'imagem') {
	$count = 0;
	foreach ($_FILES as $img) {
		 if (!empty($img["name"])) {
			 realizaUploadImagem($img, $tamanhoMaximo, $_POST["titulo$count"]);
     	 }
		 $count++;
	}
}

?>		

