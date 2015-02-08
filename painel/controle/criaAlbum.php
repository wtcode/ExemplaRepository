<?php
	include "conect.php";

	$album = $_POST['album'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	//$sessao = "galeria_fotos"; //$_POST['sessao'];
	$nome = $_POST['nome'];
	// nome do diretório
    //$diretorio = "d:/xampp/htdocs/rancho_dourado/imagemSite/$album";
	$diretorio = "../../album/".$album;
    // cria o diretório com a permissão 0777
     if(file_exists($diretorio)){
      echo "Não foi possível criar o diretório.";
	}else{
	  //echo $diretorio;
	  mkdir($diretorio,0777);
	  $sqlCriaAlbum = "insert into albuns(nome,descricao, nomeSite, sessao) values('$album', '$descricao', '$nome', '$sessao')";
	  $resultCriaAlbum = mysql_query($sqlCriaAlbum,$conect); 
	  echo "Processando...<br>";		
      echo "Diretório criado com sucesso.";
	 echo "<br><META HTTP-EQUIV='Refresh' CONTENT='2;URL=../albuns.php'>";
	}
?>
