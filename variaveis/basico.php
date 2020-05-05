<div title="titulo">Variaveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo'<br>';
$a  = 3;
$b  = 16;
$somaDosNumeros = $a + $b;
ecHo  $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma  string";
echo '<br>' . $variavel;

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
