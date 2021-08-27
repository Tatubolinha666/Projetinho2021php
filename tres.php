<?php 
print"Exibir valor médio de obra artistica </br>";
$data="25 de abril de 1996";
$salario=2000.00;
$cargo="Artista plástico";
echo "Criado em 96<br/>";
printf("Valor de mão de obra: R$ %.2f <br/> ",$salario);
$texto=sprintf("%s recebe R$%.2f por obra",$cargo,$salario*2);
echo $texto;

 ?>