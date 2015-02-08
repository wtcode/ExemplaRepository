<div id="boas_vindas">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="20%">
<div id="message_usuario">
<?php
	$Usuario = $_SESSION['login'];
	  echo "Ola! senhor(a): <span class='User_painel'>".$Usuario."</span>";
?>
</div>
</td>
<td width="80%">
<?php
if($pagina == 1){
	?>
<div id="deslogar" align="center">
<a href="controle/deslogar.php">
<img src="images/exit.png" />
<br />
Sair
</a>
</div>
<?php
}
?>
</td>
</tr>
</table>
</div>