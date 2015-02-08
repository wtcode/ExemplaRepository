<table width="600" border="0" cellspacing="0" cellpadding="0" id="table_index" >
  <tr>
    <td align="center" colspan="2" class="titulo_index">Login Administrativo</td>
  </tr>
      <?php 
		if(isset($_GET['msg'])){
			if(is_numeric($_GET['msg'])){
				if($_GET['msg'] == 1){
					echo "
					<tr>
						<td colspan='2' align='center'>
							<div id='mensage_alerta'>
								Usuario ou Senha incorretos!<br>
								Tente novamente ou entre em contato com seu administrador!
							</div>
						</td>
					</tr>
					";
				}
				if($_GET['msg'] == 2){
					echo "
					<tr>
						<td colspan='2' align='center'>
							<div id='mensage_alerta'>
								Você deve estar logado para acessar esta área!
							</div>
						</td>
					</tr>
					";
				}
			}
		}
	?>
  <tr>
    <td width="287">
        <div style="width:285px; height:230px; text-align:center;">
        	<img style="width:150px; margin-top:56px;" src="images/login.png">
        </div>	
    	
        <div id="texto">
        Use um nome de usuario e senha válidos para acessar o painel de administrativo
        <a href="../index.php">Retornar para o site</a>
        </div>
    </td>
    <td width="313">
    <form action="controle/login.php" method="post" id="form_index">
        Login:<br>
        <input type="text" name="login" size="40" class="input"><br>
        Senha<br>
        <input type="password" name="senha"size="40" class="input"><br>
        <input type="submit" value="Entrar" class="submit_index">
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
