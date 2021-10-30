<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação

echo 'Nós também' . ' somos';
echo '<br>', 'tambem aceito', " virgulas";
echo '<br>';
echo '"teste"' . " 'teste'" . '\'teste\' ' . "\\" ;

print('<br> tambem existe a funçao print');
print '<br> tambem existe a funçao print';

// algumas funcoes
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('minimizado');
echo '<br>' . ucfirst('so a primeira letra');
echo '<br>' . ucwords('todas as palabras');
echo '<br>' . strlen('quantas letras??');
echo '<br>' . mb_strlen('eu também', 'utf-8');
echo '<br>' . substr ('Só uma parte mesmo', 7,6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');


