<?php
	session_start();
	require_once ("controle/conect.php");
	require_once("controle/validaSessao.php");
	$pagina = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Área Reservada</title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu-collapsed.js" type="text/javascript"></script>
<script type="text/javascript">
		function getValor(valor){

			$("#recebeValor").html("<option value='0'>Carregando...</option>");
			setTimeout(function(){
				$("#recebeValor").load("../ajaxValor.php",{id:valor})
			}, 2000);
		};
    </script>
<?php include "include/validaBotoes.php";?>
<body>
<div id="pai">
	<div id="topo">
    </div>
    <div id="meio" align="center">
    	<div id="corpo" align="left">
        <?php
			include "include/boasVindas.php";
		?>
        	<div id="conteudo">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="21%">
				<?php 
					include ("include/menu.php");
				?>
				</td>
                <td width="79%">
                
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
                </td>
              </tr>
            </table>
            </div>   
        </div>
    </div>
    <div id="rodape" align="center">
    	<?php include "include/rodape.php" ?>
    </div>
</div>
</body>
</html>