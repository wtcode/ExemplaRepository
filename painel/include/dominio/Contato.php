<?php 

include("controle/conect.php");

Class Contato{
	
	private $autenticacaosmtp, 
			$destino, 
			$emailorigem, 
			$host, 
			$mensagemcliente, 
			$nomeorigem, 
			$notificarcliente, 
			$senha,
			$usuario, 
			$assuntonotificacao,
			$assuntoresposta;
	
	function __construct(){
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'autenticacaosmtp'";
		$autenticacaosmtp = mysql_fetch_array(mysql_query($sql,$conect));
	
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'destino1'";
		$destino = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'emailorigem'";
		$emailorigem = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'host'";
		$host = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'mensagemcliente'";
		$mensagemcliente = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'nomeorigem'";
		$nomeorigem = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'notificarcliente'";
		$notificarcliente = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'senha'";
		$senha = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'usuario'";
		$usuario = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'assuntonotificacao'";
		$assuntonotificacao = mysql_fetch_array(mysql_query($sql,$conect));
		
		$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'assuntoresposta'";
		$assuntoresposta = mysql_fetch_array(mysql_query($sql,$conect));
						
				
	}//fim construtor
	
		
	//metodos gets e sets
	//autenticacaosmtp
	public function setAutenticacaoSmtp($autenticacaosmtp){
		$this->autenticacaosmtp = $autenticacaosmtp;
		}
	public function getAutenticacaoSmtp(){
		return $this->$autenticacaosmtp;
		}
	//destino
	public function setDestino($destino){
		$this->destino = $destino;
		}
	public function getDestino(){
		return $this->destino;
		}
	//emailorigem
	public function setEmailOrigem($emailorigem){
		$this->emailorigem = $emailorigem;
		}
	public function getEmailOrigem(){
		return $this->emailorigem;
		}
	//host
	public function setHost($host){
		$this->host = $host;
		}
	public function getHost(){
		return $this->host;
		}
	//mensagemcliente
	public function setMensagemCliente($mensagemcliente){
		$this->mensagemcliente = $mensagemcliente;
		}
	public function getMensagemCliente(){
		return $this->mensagemcliente;
		}
	//nomeorigem
	public function setNomeOrigem($nomeorigem){
		$this->nomeorigem = $nomeorigem;
		}
	public function getNomeOrigem(){
		return $this->nomeorigem;
		}
	//notificarcliente
	public function setNotificarCliente($notificarcliente){
		$this->notificarcliente = $unotificarcliente;
		}
	public function getnotificarcliente(){
		return $this->notificarcliente;
		}
	//senha
	public function setSenha($senha){
		$this->senha = $senha;
		}
	public function getSenha(){
		return $this->senha;
		}
	//usuario
	public function setUsuario($usuario){
		$this->usuario = $usuario;
		}
	public function getUsario(){
		return $this->usuario;
		}
	//assuntonotificacao
	public function setAssuntoNotificacao($assuntonotificacao){
		$this->assuntonotificacao = $assuntonotificacao;
		}
	public function getAssuntoNotificacao(){
		return $this->assuntonotificacao;
		}
	//assuntoresposta
	public function setAssuntoResposta($assuntoresposta){
		$this->assuntoresposta = $assuntoresposta;
		}
	public function getAssuntoResposta(){
		return $this->assuntoresposta;
		}		
		
		
		
	public function VerificaBanners(){
		
		$sql = "select * from banner where estatus = 2";
		
		$result = mysql_query($sql);
		$numLinha = mysql_affected_rows();

		return $numLinha;
	}
	
	public function CloseMySQL(){
		
		mysql_close(mysql_connect("localhost:3306","dqexhryv_exempla","wtcode3xempla"));
	}
	
	
}//fim class
	
 	//$MasterPage = new MasterPage();
	//$_SESSION["obj"] = $MasterPage;
	
	?>
	
