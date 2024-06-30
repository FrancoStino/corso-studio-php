<?php

/**
 * In questo script vengono stampati tutti i valori presenti nell'array $user,
 * utilizzando un ciclo foreach.
 * 
 * Per ogni elemento dell'array $user							, viene stampato il relativo chiave seguito
 * dal valore. Se il valore dell'elemento è un array, viene stampato come
 * stringa separata da virgole.
 */

$user = [
  'name'       => 'John',
  'profession' => ['developer', 'designer'],
  'age'        => 30,
  'email'      => 'john@example.com',
];

foreach ($user as $key => $valore) {
  echo "$key: ";
  if (!is_array($valore)) {
    echo "$valore" . PHP_EOL;
  } else {
    echo implode(',', $valore) . PHP_EOL;
  }
}


