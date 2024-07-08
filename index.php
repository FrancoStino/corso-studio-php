<?php

/**
 * Esercizio di programmazione orientata agli oggetti.
 * Creazione di due oggetti della classe Corso.
 * Stampa dei dati dei due oggetti.
 */
declare(strict_types=1);
require_once 'lib/Corso.php';


$corsoPHP = new Corso(
  titolo: "Corso PHP",
  prezzo: 19
);

