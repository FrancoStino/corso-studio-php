<?php

/**
 * Aggiunge e rimuove elementi da un array.
 *
 * Esempi di utilizzo:
 *
 * $alunni = ['Anna'];
 *
 * $alunni[] = 'Massimo'; // Aggiunge 'Massimo' all'ultimo elemento dell'array
 * $alunni[] = 'Miriam'; // Aggiunge 'Miriam' all'ultimo elemento dell'array
 *
 * array_push($alunni, 'Giovanni', 'Maria'); // Aggiunge 'Giovanni' e 'Maria' all'ultimo elemento dell'array
 * array_unshift($alunni, 'Antonio'); // Aggiunge 'Antonio' all'inizio dell'array
 *
 * array_pop($alunni); // Rimuove l'ultimo elemento dell'array
 * array_shift($alunni); // Rimuove il primo elemento dell'array
 *
 * unset($alunni[1]); // Rimuove l'elemento all'indice 1 dell'array
 * $alunni = array_values($alunni); // Riordina gli indici dell'array
 *
 * array_splice($alunni, 2, 1, ['Luca', 'Marco']); // Rimpiazza l'elemento all'indice 2 con 'Luca' e 'Marco'
 *
 * var_dump($alunni); // Stampa l'array
 */

$alunni = ['Anna'];

$alunni[] = 'Massimo';
$alunni[] = 'Miriam';

array_push($alunni, 'Giovanni', 'Maria');
array_unshift($alunni, 'Antonio');

array_pop($alunni);
array_shift($alunni);

unset($alunni[1]);
$alunni = array_values($alunni);

array_splice($alunni, 2, 1, ['Luca', 'Marco']);
var_dump($alunni);
