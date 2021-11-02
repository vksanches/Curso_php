<div class="titulo">Operadores Logicos</div>

<?php
echo "<p> V ou F </p>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo '<p>Tabela Verdade "AND" (E) </p>';
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo '<br>';
var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);

echo '<p>Tabela Verdade "OR" (OU) </p>';

var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo '<p>Tabela Verdade "XOR" (OU exclusivo) </p>';

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo '<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo '<p>exemplos</p>';

$idade= 62;
$sexo = 'F';
echo '<br>';
if($idade >= 60 && $sexo === 'F'){
    echo 'Pode se aposentar';
} elseif ($idade >=65 && $sexo==='M'){
    echo 'Pode se aposentar';
}else{
    echo 'Vai ter que trabalhar mais um pouco.';
}





