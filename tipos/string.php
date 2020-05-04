<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump('Eu tambem');
echo '<br>';

// concatenação

echo "Nós tambem" . ' somos';
echo '<br>', "Também aceito ", "virgulas";

echo '<br>';



//echo "'Teste'" " .  '"Teste" ' . '\'Teste\' '. "\"Teste\" ". "\\";

print ("<br> Também existe o função print" );

// Algumas Funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('todas as letras');
echo '<br>' . mb_strlen('Eu também', "utf-8");
echo '<br>' . substr("Só uma parte mesmo", 7 ,  6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');

