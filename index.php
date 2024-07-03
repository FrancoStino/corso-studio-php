<?php

/**
 * Calcola il valore minimo, maggiore e medio di un array di voti.
 *
 * @param array $votiEsami Array di voti.
 * @return void
 */
function calcolaValoriMinimoMaggioreEMedia(array $votiEsami): void
{
    $min = min($votiEsami);
    $max = max($votiEsami);
    $avg = array_sum($votiEsami) / count($votiEsami);

    echo "Minimo: $min, Massimo: $max, Media: $avg";
}

// Chiama la funzione con l'array di voti
$votiEsami = [28, 30, 29, 26, 18];
calcolaValoriMinimoMaggioreEMedia($votiEsami);
