<?php

/**
 * Esempi di Heredoc e Nowdoc in PHP.
 *
 * Heredoc e Nowdoc sono due tipi di costanti di stringa in PHP
 * che consentono di definire stringhe di testo piuttosto lunghe
 * e complesse.
 *
 * La differenza principale tra Heredoc e Nowdoc sta nel fatto che
 * Heredoc permette all'interpolazione delle variabili all'interno
 * della stringa, mentre Nowdoc non lo fa.
 *
 */

$numero = 100;

// Esempio di Heredoc
$stringaHeredoc = <<<stringa
Mostra il numero $numero
Seconda Riga" tretre
Terza riga' erter
stringa;

echo $stringaHeredoc;

// Esempio di Nowdoc
$stringaNowdoc = <<<'stringa'
Mostra il numero $numero
Seconda Riga" tretre
Terza riga' erter
stringa;

echo $stringaNowdoc;

