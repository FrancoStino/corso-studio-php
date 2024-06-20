<?php

// $nome1 è una variabile che contiene il nome "Gianluca".
$nome1 = 'Gianluca';

// $nome2 e $nome3 puntano alla stessa memoria di $nome1.
// Questo significa che se $nome2 viene modificato, $nome1 e $nome3 verranno modificati in modo equivalente.
$nome2 = &$nome1;
$nome3 = &$nome2;

// Modifico $nome2, che da questo senso anche $nome1 e $nome3.
$nome2 = 'Bellissimo';

// Modifico $nome1, che da questo senso anche $nome2 e $nome3.
$nome1 = 'suka';

// Stampa il valore di $nome3, che è uguale a $nome1, che è uguale a $nome2.
echo $nome3;
