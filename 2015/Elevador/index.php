<?php
//hacktoberfest 2016
spl_autoload_register(
function($className){
	require $className.".php";
}
);
$passagerio = new Passageiro();
$passagerio->setCodigo(1);
$passagerio->setNome("Maria Joana");

$elevador = new Elevador(6);
$elevador->chamarElevador(17);
$elevador->entrarElevador($passagerio);
$elevador->Mover(11);
if($elevador->getAndar()==11){
	$elevador->sairElevador();
	echo "<br>Teste correto! ";
}else{
	echo "<br>Erro no teste";
}

?>
