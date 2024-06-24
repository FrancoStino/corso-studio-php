<?php

/**
 * Esercizio su operatore logici:
 * - && (AND) verifica che entrambe le condizioni siano true
 * - || (OR) verifica che almeno una delle condizioni sia true
 * - xor (XOR) verifica che solo una delle due condizioni sia true
 * - ! (NOT) nega la condizione
 */

$sole = true;

$voglia = false;

// Verifica che entrambe le condizioni siano true
if ($sole && $voglia) {
  echo 'Faremo la passeggiata';
} else {
  echo 'Non faremo la passeggiata';
}

// Verifica che almeno una delle condizioni sia true
if ($sole || $voglia) {
  echo 'Possiamo andare in passeggiata';
} else {
  echo 'Non possiamo andare in passeggiata';
}

// Verifica che solo una delle due condizioni sia true
if ($sole xor $voglia) {
  echo 'Possiamo andare in passeggiata';
} else {
  echo 'Non possiamo andare in passeggiata';
}

// Nega la condizione
if (!$sole) {
  echo 'Non abbiamo sole';
} else {
  echo 'Abbiamo sole';
}
