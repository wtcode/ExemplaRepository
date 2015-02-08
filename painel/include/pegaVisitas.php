<?php
	/**
	 * Funзгo que retorna o total de visitas
	 *
	 * @param string $tipo - O tipo de visitas a se pegar: (uniques|pageviews)
	 * @param string $periodo - O perнodo das visitas: (hoje|mes|ano)
	 *
	 * @return int - Total de visitas do tipo no perнodo
	 */
	 $_CV['registraAuto'] = true;       // Registra as visitas automaticamente?
	 
	 $_CV['conectaMySQL'] = true;       // Abre uma conexгo com o servidor MySQL?
	 $_CV['iniciaSessao'] = true;       // Inicia a sessгo com um session_start()?
	 
	 $_CV['servidor'] = 'localhost';    // Servidor MySQL
	 $_CV['usuario'] = 'root';          // Usuбrio MySQL
	 $_CV['senha'] = '';                // Senha MySQL
	 $_CV['banco'] = 'casametais';            // Banco de dados MySQL
	 
	 $_CV['tabela'] = 'visitas';        // Nome da tabela onde os dados sгo salvos
	 // ==============================
	 
	 // ======================================
	 //   ~ Nгo edite a partir deste ponto ~
	 // ======================================
	 
	 // Verifica se precisa fazer a conexгo com o MySQL
	 if ($_CV['conectaMySQL'] == true) {
	    $_CV['link'] = mysql_connect($_CV['servidor'], $_CV['usuario'], $_CV['senha']) or die("MySQL: Nгo foi possнvel conectar-se ao servidor [".$_CV['servidor']."].");
	    mysql_select_db($_CV['banco'], $_CV['link']) or die("MySQL: Nгo foi possнvel conectar-se ao banco de dados [".$_CV['banco']."].");
	 }
	 
	 // Verifica se precisa iniciar a sessгo
	 if ($_CV['iniciaSessao'] == true) {
	    session_start();
	 }
	 function pegaVisitas($tipo = 'uniques', $periodo = 'hoje') {
	    global $_CV;
	 
	    switch($tipo) {
	        default:
	        case 'uniques':
	            $campo = 'uniques';
	            break;
	        case 'pageviews':
	            $campo = 'pageviews';
	            break;
	    }
	 
	    switch($periodo) {
	        default:
	        case 'hoje':
	            $busca = "`data` = CURDATE()";
	            break;
	        case 'mes':
	            $busca = "`data` BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND LAST_DAY(CURDATE())";
	            break;
	        case 'ano':
	            $busca = "`data` BETWEEN DATE_FORMAT(CURDATE(), '%Y-01-01') AND DATE_FORMAT(CURDATE(), '%Y-12-31')";
	            break;
	    }
	 
	    // Faz a consulta no MySQL em funзгo dos argumentos
	    $sql = "SELECT SUM(`".$campo."`) FROM `".$_CV['tabela']."` WHERE ".$busca;
	    $query = mysql_query($sql);
	    $resultado = mysql_fetch_row($query);
	 
	    // Retorna o valor encontrado ou zero
	    return (!empty($resultado)) ? (int)$resultado[0] : 0;
	 }
	 
	 
	 ?>