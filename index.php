<?php

// Esercizi sugli array

// 1. Rimuovere un elemento in base al valore
$test= ["PHP", "HTML", "CSS", "JS", "SQL", "HTML"];
$key = array_search("HTML", $test);

if ($key!== false) {
    unset($test[$key]);
}

var_dump($test);


// 2. Controllare la presenza di una chiave

$test = [
  'luisa' => 'admin',
  'marco' => 'user'
];

if (array_key_exists('luisa', $test)) {
    echo 'La chiave luisa esiste <br>'. PHP_EOL;
}


// 3. Ottenere la chiave del primo elemento

$test = [
  'myComp' => '/componenti',
  'versione' => 1.0
];

echo key($test). PHP_EOL;
next($test);
echo key($test). PHP_EOL;
prev($test);
echo key($test). PHP_EOL;


// 4. Creare un array con i valori interi da 1 a 10 e mescolarli

$test = range(1, 10);
shuffle($test);
var_dump($test);

// 5. Rimuovere elementi duplicati da un array

$test = [3, 2, 4, 5, 2, 3];

$test = array_unique($test);
var_dump($test);