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
require_once 'lib/Statistiche.php';


// $corsoPHP = new Corso( "Corso SUKA" );
$corsoJS = new Frontend( "Corso JS", 1000, "Configurazione JS" );
$statistiche = new Statistiche( $corsoJS );