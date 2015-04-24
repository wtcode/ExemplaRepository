<?php

    //Incluir a classe excelwriter
    include("excelwriter.inc.php");

    //VocÊ pode colocar aqui o nome do arquivo que deseja salvar.
    $excel = new ExcelWriter("excel3.xls");

    if ($excel == false) {
        echo $excel->error;
    }

    //Escreve o nome dos campos de uma tabela
    $myArr = array('NOME', 'EMAIL');
    $excel->writeLine($myArr);

    //Seleciona os campos de uma tabela
    include "controle/conect.php";

    $consulta = "select * from newslletter order by nome";
    $resultado = mysql_query($consulta, $conect);
    if ($resultado == true) {
        while ($linha = mysql_fetch_array($resultado)) {
            $myArr = array($linha['nome'], $linha['email']);
            $excel->writeLine($myArr);
        }
    }

    $excel->close();
    echo "O arquivo foi salvo com sucesso clique no icone para baixar. <a href=\"excel3.xls\"><img src='images/excel8.png' width ='50'></a>";
?>
