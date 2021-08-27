<?php 

$ano=1920;

function exibir()
{
	STATIC $ano;
	$ano++;
	echo "<br/>". $ano;
}

echo exibir();
echo exibir();
echo exibir();
 ?>