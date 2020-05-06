<div class="titulo">Valor vc Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

$variavelValor  = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "$variavelValor";

// Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";