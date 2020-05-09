<?php
/** Usamos o '$' para declarar uma variavel*/
$idade = 21;
$nome = "Guilherme Duarte";
$peso = 53.89;
$altura = 1.66;

echo "\nNome: ", $nome, "\nIdade: ", $idade," Anos",
"\nPeso: ", $peso," Kg", "\nAltura: ", $altura, " m";

/**Operações basicas*/
echo "\n\nTens ", $idade * 365, " Dias de vida \n";

echo $peso + $altura,"\n", $altura * 100, "\n";
echo $peso - $altura,"\n", $altura / 100, "\n";

$peso = $peso + 30;
$altura = $altura - $idade;
$idade = $peso;
$nome = 1999;
echo $peso,"\n", $altura,"\n", $idade, "\n", $nome;