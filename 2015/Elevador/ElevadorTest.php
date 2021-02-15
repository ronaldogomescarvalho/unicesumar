<?php
spl_autoload_register(
function($className){
	require $className.".php";
}
);
class ElevadorTest extends PHPUnit_Framework_TestCase{
	public function testeElevador(){
		$passagerio = new Passageiro();
		$passagerio->setCodigo(1);
		$passagerio->setNome("Maria Joana");
		
		$elevador = new Elevador(6);
		$this->assertEquals(6, $elevador->getAndar());
		$elevador->chamarElevador(17);
		$this->assertEquals(17, $elevador->getAndar());
		
		$elevador->entrarElevador($passagerio);
		$this->assertInstanceOf('Passageiro',$elevador->getPassageiro());
		$elevador->Mover(11);
		$this->assertEquals(11, $elevador->getAndar());
		$this->assertInstanceOf('Passageiro',$elevador->getPassageiro());
		$elevador->sairElevador();
		$this->assertNull($elevador->getPassageiro());
		$this->assertFalse($elevador->existePassageiro());
	}
	
}