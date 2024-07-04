<?php

// Esercizi sugli array

// 1. Rimuovere un elemento in base al valore
$test= ["PHP", "HTML", "CSS", "JS", "SQL", "HTML"];
$key = array_search("HTML", $test);

// La funzione array_search() cerca un valore all'interno di un array e restituisce la chiave corrispondente se trovata, altrimenti restituisce false.
if ($key!== false) {
    unset($test[$key]);
    // La funzione unset() rimuove un elemento dall'array utilizzando la sua chiave.
}

// var_dump() è una funzione di debug che stampa informazioni dettagliate su una variabile.
var_dump($test);


// 2. Controllare la presenza di una chiave

$test = [
  'luisa' => 'admin',
  'marco' => 'user'
];

// La funzione array_key_exists() verifica se una chiave esiste in un array.
if (array_key_exists('luisa', $test)) {
    echo 'La chiave luisa esiste <br>'. PHP_EOL;
}


// 3. Ottenere la chiave del primo elemento

$test = [
  'myComp' => '/componenti',
  'versione' => 1.0
];

// La funzione key() restituisce la chiave dell'elemento corrente in un array.
echo key($test). PHP_EOL;
// La funzione next() sposta il puntatore interno dell'array all'elemento successivo.
next($test);
echo key($test). PHP_EOL;
// La funzione prev() sposta il puntatore interno dell'array all'elemento precedente.
prev($test);
echo key($test). PHP_EOL;


// 4. Creare un array con i valori interi da 1 a 10 e mescolarli

// La funzione range() crea un array contenente una sequenza di elementi in un intervallo specificato.
$test = range(1, 10);
// La funzione shuffle() mescola casualmente gli elementi di un array.
shuffle($test);
var_dump($test);

// 5. Rimuovere elementi duplicati da un array

$test = [3, 2, 4, 5, 2, 3];

// La funzione array_unique() rimuove i valori duplicati da un array.
$test = array_unique($test);
var_dump($test);