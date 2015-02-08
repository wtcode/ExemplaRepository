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
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />

<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu-collapsed.js" type="text/javascript"></script>
<body>
<div id="pai">
	<div id="topo">
    <div style="width:952px;  margin:0 auto; height:100px;">
        	<div style="float:left; width:24%; height:100px;">
            </div>
            <div style="float:left; width:56%; ">
                <table style="width:100%;">
                    <tr>
                        <td style="vertical-align:middle; text-align:center">
                             <img src="../imagens/logo.png"/>
                        </td>
                    </tr>
                </table>
            </div>
        	<div style="float:left; width:20%; height:100px; ">
            </div>
        </div>
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
					<?php include ("include/admin/admin_frete.php"); ?>
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