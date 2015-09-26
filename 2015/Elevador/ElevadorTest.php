<?php
spl_autoload_register(
function($className){
	require $className.".php";
}
);
class ElevadorTest extends PHPUnit_Framework_TestCase{
	public function testeSoma(){
		$elevador = new Elevador(2);
		$this->assertEquals('5', $elevador->somar(2, 3));
	}
	public function testeElevador(){
		$passagerio = new Passageiro();
		$passagerio->setCodigo(1);
		$passagerio->setNome("Maria Joana");
		
		$elevador = new Elevador(6);
		$this->assertEquals(6, $elevador->getAndar());
		$elevador->chamarElevador(17);
		$this->assertEquals(17, $elevador->getAndar());
		
		$elevador->entrarElevador($passagerio);
		$elevador->Mover(11);
		$this->assertEquals(11, $elevador->getAndar());
		$elevador->sairElevador();
		
	}
	
}