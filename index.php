<?php

/**
 * Esercizio di programmazione orientata agli oggetti.
 * Creazione di due oggetti della classe Corso.
 * Stampa dei dati dei due oggetti.
 */
declare (strict_types = 1);
require_once 'lib/Corso.php';

// Creazione di due oggetti della classe Corso.
$corsoPHP = new Corso(
  "Corso PHP",
  "Mario Rossi",
  "Backend",
  2000
);
echo $corsoPHP->riepilogo() . "<br>";

$corsoJava = new Corso( "Corso Java", "Maria Bianchi", "Frontend", 7500 );
echo $corsoJava->riepilogo();

