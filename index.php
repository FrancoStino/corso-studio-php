<?php

/**
 * Esempio di array di stringhe con nomi di alunni.
 * In questo caso, l'array è statico e contiene i nomi di tre alunni.
 * Successivamente, viene utilizzato un ciclo for per stampare i nomi
 * nell'ordine in cui sono presenti nell'array. Successivamente, viene
 * utilizzato un ciclo for per stampare i nomi nell'ordine inverso.
 *
 * @var array $alunni
 */
$alunni       = ['Marco', 'Simona', 'Andrea'];
$numeroAlunni = count($alunni);

// Stampa i nomi nell'ordine in cui sono presenti nell'array.
for($i = 0; $i < $numeroAlunni; $i++) {
  echo $alunni[$i] . PHP_EOL;
}

// Stampa i nomi nell'ordine inverso.
for($i = $numeroAlunni - 1; $i >= 0; $i--) {
  echo $alunni[$i] . PHP_EOL;
}
