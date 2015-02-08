<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 

include("conect.php");

Class MasterPage{
	
	private $nomeEmpresa, $cnpjEmpresa, $telefoneEmpresa, $ruaEmpresa, $bairroEmpresa, $cidadeEmpresa, $ufEmpresa, $cepEmpresa, $emailEmpresa;
	
	function __construct(){
		
		$sql = "SELECT * FROM parametrizacao";
		$result = mysql_query($sql);
		
		while($linha = mysql_fetch_array($result)){
		
			if ($linha["nmparametro"] == "bairro_empresa"){$this->bairroEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "cidade_empresa"){ $this->cidadeEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "cep_empresa"){ $this->cepEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "cnpj_empresa"){ $this->cnpjEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "nome_empresa"){ $this->nomeEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "rua_empresa"){ $this->ruaEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "uf_empresa"){ $this->ufEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "telefone_empresa"){ $this->telefoneEmpresa = $linha["valorparametro"];}
			else if($linha["nmparametro"] == "emailpadrao_empresa"){ $this->emailEmpresa = $linha["valorparametro"];}
		
		}//fim while
				
				
	}//fim construtor
	
	
	//metodos gets e sets
	//nome
	public function setNomeEmpresa($nomeempresa){
		$this->nomeEmpresa = $nomeempresa;
		}
	public function getNomeEmpresa(){
		return $this->nomeEmpresa;
		}
	//cnpj
	public function setCnpjEmpresa($cnpj){
		$this->cnpjEmpresa = $cnpj;
		}
	public function getCnpjEmpresa(){
		return $this->cnpjEmpresa;
		}
	//telefone
	public function setTelefoneEmpresa($telefone){
		$this->telefoneEmpresa = $telefone;
		}
	public function getTelefoneEmpresa(){
		return $this->telefoneEmpresa;
		}
	//rua
	public function setRuaEmpresa($rua){
		$this->ruaEmpresa = $rua;
		}
	public function getRuaEmpresa(){
		return $this->ruaEmpresa;
		}
	//bairro
	public function setBairroEmpresa($bairro){
		$this->bairroEmpresa = $bairro;
		}
	public function getBairroEmpresa(){
		return $this->bairroEmpresa;
		}
	//cidade
	public function setCidadeEmpresa($cidade){
		$this->cidadeEmpresa = $cidade;
		}
	public function getCidadeEmpresa(){
		return $this->cidadeEmpresa;
		}
	//uf
	public function setUfEmpresa($uf){
		$this->ufEmpresa = $uf;
		}
	public function getUfEmpresa(){
		return $this->ufEmpresa;
		}
	//cep
	public function setCepEmpresa($cep){
		$this->cepEmpresa = $cep;
		}
	public function getCepEmpresa(){
		return $this->cepEmpresa;
		}
	//email
	public function setEmailEmpresa($email){
		$this->emailEmpresa = $email;
		}
	public function getEmailEmpresa(){
		return $this->emailEmpresa;
		}
		
		
		
	public function VerificaBanners(){
		
		$sql = "select * from banner where estatus = 2";
		
		$result = mysql_query($sql);
		$numLinha = mysql_affected_rows();

		return $numLinha;
	}
	
	public function CloseMySQL(){
		
		mysql_close(mysql_connect("localhost:3306","dqexhryv_hamacon","wtcodeh4m4c0n13"));
	}
	
	
}//fim class
	
 	$MasterPage = new MasterPage();
	$_SESSION["obj"] = $MasterPage;
	
	?>
	
