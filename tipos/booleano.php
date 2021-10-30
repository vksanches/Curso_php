<div class="titulo">Booleans</div>

<?php

echo TRUE;
echo '<br>';
echo false;
echo '<br>';
var_dump(true);
echo '<br>';
var_dump(False);
echo '<br>';
var_dump('false');
echo '<br>';
is_bool(false);
echo '<br>' . is_bool('true');

//fazer as regras de conversoes

echo '<p> Regras:<p>';
echo '<br>' . var_dump((bool) 0) ; //apenas zero é false
echo '<br>' . var_dump ((bool) 20 );
echo '<br>' . var_dump ((bool) -1);
echo '<br>' . var_dump ((bool)0.0);
echo '<br>' . var_dump ((bool) 0.0000);
echo '<br>' . var_dump ((bool)'');
echo '<br>' . var_dump ((bool)'0');
echo '<br>' . var_dump ((bool)' ');
echo '<br>' . var_dump ((bool) '00');
echo '<br>' . var_dump ((bool) 'false');
