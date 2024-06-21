<?php

/**
 * Confronto tra due numeri float.
 *
 * La comparazione tra due numeri float può essere problematica
 * a causa della rappresentazione a virgola mobile.
 * In questo esempio viene utilizzato un valore di delta per
 * considerare due numeri uguali se la loro differenza assoluta è minore di tale valore.
 */

$x = 0.1 + 0.2;  // 0.30000000000000004
$y = 0.3;

$delta = 0.0000001;  // valore di delta per la comparazione

$diff = abs($x - $y);  // 0.00000000000000018

if ($diff < $delta) {
  echo "I due numeri sono uguali";
} else {
  echo "I due numeri sono diversi";
}
