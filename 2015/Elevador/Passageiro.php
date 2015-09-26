<?php
class Passageiro{
	private $nome;
	private $codigo;
	
	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
}

?>