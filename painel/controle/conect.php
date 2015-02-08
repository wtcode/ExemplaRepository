<?php	

	$conect = mysql_connect("localhost:3306","dqexhryv_exempla","wtcode3xempla") or die ("Não foi possivel conectar ao BD ".mysql_error());

	$db = mysql_select_db("dqexhryv_exempla",$conect) or die("Não foi possivel escolher o banco de dados ".mysql_error());

	

//----Site da construtora

/*$host = "localhost:3306";  // host do mysql

$user = "root";       // usuário

$pass = "phvb16";     // senha do usuário

$base = "Construtora"; // nome da base de dados




?>