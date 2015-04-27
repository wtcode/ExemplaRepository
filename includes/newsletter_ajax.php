<?php 
    $nome = $_POST["n"];
    $email = $_POST["e"];

    include "conect.php";
    
    $sql_insert = "INSERT into newslletter(nome, email)
   			 values('$nome', '$email');";
    
    $result_insert = mysql_query($sql_insert,$conect);
    $result = mysql_query($sql);
?>