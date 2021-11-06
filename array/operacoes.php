<div class="titulo">Operações com Array</div>

<?php

$dados1=[
    'nome'=>'Jose',
    'idade' => 28,
];

$dados2 = [
    'nome' => 'Maria',
    'naturalidade' => 'fortaleza',
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo'<br>' . is_array($dadosCompletos);
echo'<br>' . count($dadosCompletos);
echo'<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo'<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]);
echo'<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo'<br>';
var_dump($dadosCompletos);

