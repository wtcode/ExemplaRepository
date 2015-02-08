<?php
	session_start();
	include "conect.php";
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$sqlLogin = "select * from usuario where login = '$login'";
	$resultLogin = mysql_query($sqlLogin,$conect);
	$linhaLogin = mysql_fetch_array($resultLogin);	
	$loginMaster = $linhaLogin['login'];
	$senhaMaster = $linhaLogin['senha'];	
	
		if($login == $loginMaster){
			if($senha == $senhaMaster){
				echo "<script>
							location.href = '../principal.php'
					  </script>	";
					  $_SESSION['login'] = $loginMaster;
			}else{
				echo "
				<script>
					location.href = '../index.php?msg=1'
				</script>";	
			}
		}else{
			echo
			"<script>
					location.href = '../index.php?msg=1'
				</script>";
		}
?>