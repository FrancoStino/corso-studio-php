<?php

/**
 * Aggiunge uno spazio tra ogni carattere di una stringa, ogni due caratteri.
 *
 * @param string $str La stringa da formattare
 * @return string La stringa formattata con uno spazio tra ogni carattere, ogni due caratteri
 */
function addSpacingBetweenChars($str)
{
    $strFin = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $strFin .= ($i % 2 == 1) ? "$str[$i] " : "$str[$i]";  // se $i è pari stampa il carattere, se è dispari stampa il carattere seguito da uno spazio ""
    }

    return rtrim($strFin);
}

$str = "abcdefgh";

// Risultato che dobbiamo avere è ab cd ef gh

$strFin = addSpacingBetweenChars($str);
echo PHP_EOL . $strFin;

// Oppure con substr

echo PHP_EOL . substr($strFin, 0, -1);

/* -------------------------------------------------------------------------- */

/**
 * Dividi una stringa in blocchi di caratteri e separali con uno spazio.
 *
 * @param string $str La stringa da dividere
 * @param int $chunkSize La dimensione del blocco di caratteri
 * @param string $separator Il separatore tra ogni blocco
 * @return string La stringa formattata con uno spazio tra ogni blocco di caratteri
 */
function chunkSplitWithSpacing($str, $chunkSize, $separator)
{
    $strFin = chunk_split($str, $chunkSize, $separator);
    return substr($strFin, 0, -1);
}

$strFin = chunkSplitWithSpacing($str, 2, " ");
echo PHP_EOL . $strFin;
