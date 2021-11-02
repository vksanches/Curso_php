<div class="titulo">Valor vs referencia</div>

<?php

//atribuição por valor
$variavel = 'valor incial';
echo $variavel;
echo '<br>';

$variavelValor = $variavel;
echo $variavelValor;
$variavelValor = 'novo valor';
echo "<br>$variavel";

//atribuição por referencia

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavel $variavelReferencia";