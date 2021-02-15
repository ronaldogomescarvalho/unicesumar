<?php
class Passageiro{
	private $nome;
	private $codigo;
	private $idade;
		
	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	public function getIdade() {
		return $this->idade;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
}

?>
