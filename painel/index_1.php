<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <title>Área Reservada</title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <body>
        <div id="pai">
            <div id="topo">
                <?php include "include/topo.php" ?>    
            </div>
            <div id="meio" align="center">
                <div id="corpo" align="left">
                    <div id="conteudo" align="center">
                        <table width="600" border="0" cellspacing="0" cellpadding="0" id="table_index" >
                            <tr>
                                <td align="center" colspan="2" class="titulo_index">Login Administrativo</td>
                            </tr>
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
                                    <div style="width:90%">
                                        <div style="width: 300px;height: 90px;"></div>
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="usuario">Usuário:</label>
                                                <input type="text" class="form-control" id="usuario" placeholder="Insira o usuário">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Password:</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                            </div>
                                            <button type="submit" class="btn btn-default">Login</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </div>   
                </div>
            </div>
            <div id="rodape" align="center">
                <?php include "include/rodape.php" ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>