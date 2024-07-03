<?php

// Calcolare il valore minimo, maggiore e medio di un array

$votiEsami = [28, 30, 29, 26, 18];

$min = min($votiEsami);
$max = max($votiEsami);
$avg = array_sum($votiEsami) / count($votiEsami);

echo "min: $min, max: $max, avg: $avg";