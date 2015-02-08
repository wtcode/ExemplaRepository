<?php
	session_start();
require_once ("controle/conect.php");
require_once("controle/validaSessao.php");

$senha = $_POST['senha'];
$newsenha = $_POST['newsenha'];
$rptnewsenha = $_POST['rptnewsenha'];
$login = $_POST['login'];

	$sql = "SELECT senha FROM usuario where login = '$login'";
	$result = mysql_query($sql,$conect);
	if($linha_senha = mysql_fetch_array($result)){
		if($linha_senha['senha'] == $senha){
			
			if($newsenha = $rptnewsenha){
			$sql2 = "UPDATE usuario SET senha='$newsenha' where login = '$login'";
			$result2 = mysql_query($sql2,$conect);
			echo "<script>
					location.href = 'grid_alterar_senha.php?msg=1'
				  </script>";
			}
			else {
				echo "<script>
					location.href = 'grid_alterar_senha.php?msg=2'
				  </script>";
				}
		}
		else {
				echo "<script>
					location.href = 'grid_alterar_senha.php?msg=2'
				  </script>";
				}
	}

?>
