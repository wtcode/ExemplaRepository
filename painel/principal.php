<?php
    session_start();
    /*require_once("include/pegaVIsitas.php");*/
    require_once("controle/validaSessao.php");
    $pagina = 1
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Área Reservada</title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />

<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu-collapsed.js" type="text/javascript"></script>
<body>
    <div id="pai">
        <div id="topo">
            <?php include "include/topo.php" ?>
        </div>
        <div id="meio" align="center">
            <div id="corpo" align="left">
            <?php
                include "include/boasVindas.php";
            ?>
                <div id="conteudo">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                         <tr>   
                             <td width="22%">
                                <?php 
                                    include ("include/menu.php");
                                ?>
                            </td>
                            <td width="78%">
                                <?php //include ("analitycs/exemplo1.php"); ?>
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