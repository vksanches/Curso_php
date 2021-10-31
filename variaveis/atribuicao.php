<div class="titulo">atribuição</div>

<?php

$title = 'atribuiçoes';
$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>' . $numero;
echo '<br>';
$numero--;
--$numero;
echo '<br>' . $numero;
$numero++;
++$numero;
echo '<br>' . $numero;
$numero=20;
echo '<br>' . $numero;
$numero-=5;
echo '<br>' . $numero;
$numero+=5;
echo '<br>' . $numero;
$numero*=10;
echo '<br>' . $numero;
$numero/=2;
echo '<br>' . $numero;
$numero%=6;
echo '<br>' . $numero;
$numero**4;
echo '<br>' . $numero;
$numero.=4;
echo '<br>' . $numero;

$texto = 'Esse eh um texto';
echo '<br>' . $texto;
$texto = $texto . 'qualquer';
echo '<br>' . $texto;
$texto.= 'de verdade!';
echo '<br>' . $texto;

echo '<br>' . $variavelInesistente;
$valor = $variavelInesistente ?? 'valor default';
echo '<br>' . $valor;