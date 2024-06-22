<?php

// Introduzione agli array

$alunni = ["Mario", "Giulia", "Gianni", "Giovanni"];
$numeriAlunni = count($alunni);
echo $numeriAlunni;
echo $alunni[$numeriAlunni - 1];
echo $alunni[1];
var_dump($alunni);


// Array associativi
$user = [
  "nome" => "Mario",
  "cognome" => "Rossi",
  "eta" => 25,
  "cii"
];

var_dump($user);

echo $user['nome'] . ' ' . $user['cognome'] . ' ha ' . $user['eta'] . ' anni';

echo "{$user['nome']} {$user['cognome']} ha {$user['eta']} anni";

// extract
extract($user);
echo $nome . ' ' . $cognome . ' ha ' . $eta . ' anni';
