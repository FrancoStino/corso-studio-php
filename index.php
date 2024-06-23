<?php

/**
 * Questo esempio mostra come creare e utilizzare array multidimensionali in PHP.
 *
 * Un array multidimensionale è un array che contiene altri array.
 * Ogni sottomatrice può avere una dimensione diversa dall'altra.
 * Le matrici possono avere chiavi stringhe o numeriche.
 *
 * Nel seguente esempio, abbiamo due array multidimensionali:
 *
 * - `$multidimensionale` è un array di tre elementi, ciascuno dei quali è un array con due campi:
 *   `ISBN` e `Titolo`.
 *
 * - `$multidimensionale2` è un array associativo con tre sotto-matrici.
 *   Le sotto-matrici hanno chiavi stringhe: 'Primo', 'Secondo' e 'Terzo'.
 *   Ognuna di queste sotto-matrici è un array associativo con due campi: `ISBN` e `Titolo`.
 */

$multidimensionale = [
  ['ISBN' => 1234, 'Titolo' => 'Libro 1'],
  ['ISBM' => 1234, 'Titolo' => 'Libro 2'],
  ['ISBM' => 1234, 'Titolo' => 'Libro 3'],
];

var_dump($multidimensionale);

// Possiamo accedere ad un elemento multidimensionale come facciamo con un array normale.
$item = $multidimensionale[2];
echo $item['Titolo'];

// Oppure possiamo accedere direttamente ad un elemento multidimensionale.
echo $multidimensionale[2]['Titolo'];

// Esempio di array multidimensionale associativo
$multidimensionale2 = [
  'Primo' => ['ISBN' => 1234, 'Titolo' => 'Libro 1'],
  'Secondo' =>['ISBM' => 1234, 'Titolo' => 'Libro 2'],
  'Terzo' => ['ISBM' => 1234, 'Titolo' => 'Libro 3'],
];

var_dump($multidimensionale2);

// Possiamo accedere ad un elemento multidimensionale associativo come facciamo con un array normale.
echo $multidimensionale2['Terzo']['Titolo'];
