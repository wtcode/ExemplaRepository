<?php
    session_start();
    require_once ("controle/conect.php");
    require_once("controle/validaSessao.php");
    $pagina = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Área Reservada</title>
</head>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />

<script>
	function showUser(str)
	{
	//document.getElementById("txtHint").innerHTML=str;
	
	if (str.length==0)
	  { 
	  document.getElementById("txtHint").innerHTML="";
	  return;
	  }
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","area_contato.php?q="+str,true);
	xmlhttp.send();
	}
</script>    

<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu-collapsed.js" type="text/javascript"></script>
<script type="text/javascript">
    function getValor(valor){
            $("#recebeValor").html("<option value='0'>Carregando...</option>");
            setTimeout(function(){
                    $("#recebeValor").load("include/ajaxValor.php",{id:valor})
            }, 2000);
    };
</script>
<?php include "include/validaBotoes.php" ?>
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
                            <td width="21%" class="td_menu_principal">
                                <?php
                                include ("include/menu.php");
                                ?>
                            </td>
                            <td width="79%">
                                <?php include ("include/admin/admin_configuracoes.php"); ?>
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