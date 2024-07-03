<?php

// Ordinare un array

// Creazione dell'array dei risultati
$risultati = [
  'Antonio' => 12.75,
  'Marco' => 11.75,
  'Luigi' => 13.50
];

// Ordinamento in ordine alfabetico
asort($risultati);
echo "<br>";
print_r($risultati);

// Ordinamento in ordine alfabetico decrescente
arsort($risultati);
echo "<br>";
print_r($risultati);

// Ordinamento in ordine crescente per chiave
ksort($risultati);
echo "<br>";
print_r($risultati);

// Ordinamento in ordine decrescente per chiave
krsort($risultati);
echo "<br>";
print_r($risultati);

