<?php

/**
 * Esercizio di programmazione orientata agli oggetti.
 * Creazione di due oggetti della classe Corso.
 * Stampa dei dati dei due oggetti.
 */
declare(strict_types=1);
require_once 'lib/Corso.php';
require_once 'lib/Frontend.php';
require_once 'lib/Backend.php';


// $css = new Frontend("CSS",19, "Configurazione corso Frontend");
// $php = new Backend("PHP", 30, "Configurazione corso Backend");

// $css->frontendConfig1 = "modificata";
// echo $css->riepilogo(), '<br>';
// echo $php->riepilogo(), '<br>';

$corsoPHP = new Backend( "PHP" );

echo $corsoPHP->riepilogo();