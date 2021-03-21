<?php

$produtos[1] = 'Sofá';
$produtos[2] = 'Mesa';
$produtos[3] = 'Cadeira';
$produtos[4] = 'Fogão';
$produtos[5] = 'Geladeira';

//var_dump($produtos);
foreach ($produtos as $prod ) {
	echo $prod. '<br/>';

	if($prod == 'Mesa'){
		echo 'Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras <br/>';
	}

	if($prod == 'Geladeira'){
		echo 'Esta geladeira está com desconto de 50% se pagar em dinheiro';
	}
}

?>