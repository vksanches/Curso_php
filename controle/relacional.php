<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1==1);
var_dump(1>1);
var_dump(1<1);
var_dump(1<=1);
var_dump(1>=1);
var_dump(1!=1);
var_dump(1<>1);

var_dump(111=='111');
var_dump(111==='111');
var_dump(111!='111');
var_dump(111!=='111');

echo "<p> Relacionais no IF/ELSE</p><hr>";
$idade = 15;
if ($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos <br>";
}else {"Terceira idade = $idade anos!";
}

echo '<p>Spaceship</p> <hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p>Valorespodem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

