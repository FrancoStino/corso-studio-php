<?php

/**
 * Operatore ternario ?:
 *
 * Permette di scrivere in modo più conciso una condizione che restituisce un valore
 * diverso a seconda del risultato della condizione.
 *
 * Sintassi:
 *
 *      $valore = ($condizione) ? $valoreSeVero : $valoreSeFalso;
 *
 * Esempio:
 *
 *      $anni = 14;
 *      $costoBiglietto = ($anni < 12) ? 5 : 10;
 *      echo "Costo biglietto: " . $costoBiglietto;
 *
 * Output:
 *
 *      Costo biglietto: 10
 *
 * In questo esempio, se $anni è minore di 12, il valore di $costoBiglietto sarà 5,
 * altrimenti sarà 10.
 */

$anni = 14;

$costoBiglietto = ($anni < 12) ? 5 : 10;

echo "Costo biglietto: " . $costoBiglietto;

