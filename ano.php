<?php 
$ano=1984;

function exibir($parametro){
	$parametro=$parametro+36;
	return $parametro;
}
echo "Estamos em ". $ano ." e daqui a 36 anos será ". exibir($ano);

 ?>