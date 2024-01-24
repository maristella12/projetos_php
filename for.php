<?php
/*
 $arrayNumeros =[3,53,6,1,2];
for($i=0; $i<10; $i++) {
echo $i ;
}
*/
/*

$arrayNumeros =[3,53,6,1,2];
var_dump($arrayNumeros[0]);
for($i=0; $i<10; $i++) {
echo $i ;
}
*/
$arrayNumeros =[3,53,6,1,2];

/*
$qtd_elementos_array = count($arrayNumeros);
var_dump($qtd_elementos_array);

for($i=0; $i<10; $i++) {
echo $i ; 
}
*/
$qtd_elementos_array = count($arrayNumeros);
var_dump($qtd_elementos_array);

for($i=0; $i<$qtd_elementos_array; $i++) {

print_r($arrayNumeros[$i]);
}
?>