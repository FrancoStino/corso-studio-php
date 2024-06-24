<?php

/**
 * Operatori aritmetici
 * 
 * Sono operatori che consentono di eseguire operazioni matematiche sui valori.
 * Esistono diversi tipi di operatori aritmetici:
 * 
 * + (somma)
 * - (sottrazione)
 * * (moltiplicazione)
 * / (divisione)
 * % (modulo)
 * 
 * Nel seguente esempio viene illustrato come utilizzare questi operatori.
 */

$numero = 10;

$numeroStringa = "10";

// applicazione dell'operatore unario -
// che restituisce il valore negativo di un numero
echo - $numero; // stampa -10

// applicazione dell'operatore unario -
// che restituisce il valore negativo di una stringa
var_dump(-$numero); // stampa int(-10)

