<?php
spl_autoload_register(
function($className){
	require $className.".php";
}
);
class Elevador {
	
	private $andar = 0;
	private $passageiro;
	
	public function __construct($andar){
		$this->andar=$andar;
	}
	
	public function somar($numero1,$numero2){
		return $numero1 + $numero2;
	}
	
	public function entrarElevador(Passageiro $passageiro){
		$this->passageiro = $passageiro;
		echo "<br>Entrou no elevador";
	}
	public function sairElevador(){
		unset($this->passageiro);
		echo "<br>Passageiro saiu do elevador";
	}
	
	public function setAndar($andar){
		$this->andar = $andar; 
	}
	public function getAndar(){
		return $this->andar;
	}
	

	public function chamarElevador($posicaoPassageiro){
		echo "<br>Passageiro chamou o elevador para o andar: ".$posicaoPassageiro;
		if($posicaoPassageiro > $this->andar){
			for ($i = $this->andar; $i <= $posicaoPassageiro; $i++){
				$this->andar = $i;
				echo "</br>O andar do elevador chamado é: ".$this->andar;
			}	
		}else{
			for ($i = $this->andar; $i >= $posicaoPassageiro; $i--){
				$this->andar = $i;
				echo "</br>O andar do elevador chamado é: ".$this->andar;
			}
		}
	}
	
	public function Mover($andarAlvo){
		echo "<br> Passageiro apertou o andar: ".$andarAlvo;
		if($andarAlvo > $this->andar){
			for ($i = $this->andar; $i <= $andarAlvo; $i++){
				$this->andar = $i;
				echo "</br>O andar do elevador é: ".$this->andar;
			}	
		}else{
			for ($i = $this->andar; $i >= $andarAlvo; $i--){
				$this->andar = $i;
				echo "</br>O andar do elevador é: ".$this->andar;
			}
		}
		
	
	}
}

?>