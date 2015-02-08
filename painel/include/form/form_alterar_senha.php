<?php
	session_start();
	require_once ("controle/conect.php");
	require_once("controle/validaSessao.php");
	$pagina = 1;
	
?>
<div>
                	<?php 
					if(isset($_GET['msg']) and $_GET['msg'] = 1){ echo "<span style='color:red; font-family: Arial;'>Senha alterada com sucesso!</span>"; }
					else
					if(isset($_GET['msg']) and $_GET['msg'] = 2){ echo "Senha inválida!"; }
					?>
                </div>
                <h1 class="titulo" style="padding-left:49px;"> Alterar Senha</h1>
                    <div style="width:30%; height:250px; padding-left:10px; padding-top:10px; float:left; margin:0px 0px 0px 15px;">
                       
                                <form action="alterar_senha_adim.php" id="form_alterar" name="form_alterar" method="post" enctype="multipart/form-data">
                                    Login:<br /> <input class="input" name="login" id="login" style="width:195px;" value="<?php echo $Usuario; ?>" /><br />
                                    Senha:<br /> <input type="password" class="input" name="senha" id="senha" style="width:195px;" /><br />
                                    Nova Senha:<br /> <input type="password" class="input" name="newsenha" id="senha" style="width:195px;"/><br />
                                    Repetir Senha:<br /> <input type="password" class="input" name="rptnewsenha" id="senha"  style="width:195px;"/><br /><br />
                                    <input type="submit" class="User_painel" value="Alterar Senha" />
                                  </form>
                         
                      </div>