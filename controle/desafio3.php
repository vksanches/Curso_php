<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="metro-km">Metros > km</option>
        <option value="km-metro">km > Metro</option>
        <option value="celsius-fahrenheit">celsius-fahrenheit</option>
        <option value="fahrenheit-celsius">fahrenheit-celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    } 
    

</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_MILHA = 1000;

$param = $_POST['param'];
switch ($_POST['conversao']){
case'km-milha':
    $distancia = $param * FATOR_KM_MILHA;
    $mensagem ="$param km =$distancia milhas.";
    break;
case 'milha-km':
    $distancia = $param / FATOR_KM_MILHA;
    $mensagem = "$param Milhas = $distancia km.";
    break;
case 'metro-km':
    $distancia =$param / FATOR_METRO_MILHA;
    $mensagem = "$param Metros = $distancia km";
    break;
case 'km-metro':
    $distancia = $param * FATOR_METRO_MILHA;
    $mensagem = "$param km = $distancia metros.";
    break;
case 'celsius-fahrenheit':
    $distancia = (($param *9)/5) +32;
    $mensagem= "$param Celsius sao $distancia Farenheit.";
    break;
case 'fahrenheit-celsius':
    $distancia = (($param - 32)*5)/9;
    $mensagem = "$param Fahrenheit são $distancia Celsius.";
    break;

default:
    $mensagem = "Nenhum valor calculado";
}
echo "<p>$mensagem</p>";



