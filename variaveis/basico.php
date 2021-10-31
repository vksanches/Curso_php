<div class="titulo">Variaveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';

echo'<br>';
$a = 3;
$b = 16;
$soma = $a + $b;

//variaveis sao Case Sentitive

echo'<br>';
echo isset($soma);
echo'<br>';
unset($soma);
echo'<br>';

var_dump($soma);

$variavel = 10;
echo'<br>' . $variavel;

$variavel = " agora sou umavariavel";
echo'<br>' , $variavel;

//nomes de variavel

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valido';
// %5var = 'invalido'
//$%var6 = 'invalido

echo '<br>';
var_dump($_SERVER);

