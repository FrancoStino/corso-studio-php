<?php

/**
 * Esercizio di lancio di due dadi e verifica del risultato.
 * Utilizza un ciclo for per lanciare i dadi e un ciclo while 
 * per convalidare il risultato.
 */
function lanciaDadi(){
  // Array contenente i valori dei dadi
  $dado1 = [1, 2, 3, 4, 5, 6];
  $dado2 = [1, 2, 3, 4, 5, 6];
  // Ritorna la somma dei valori dei due dadi
  return $dado1[rand(0, 5)] + $dado2[rand(0, 5)];
}

// Esegue il ciclo for per lanciare i dadi
$lanci = 20;
for ($i = 1; $i <= $lanci; $i++) {
  $risultato = lanciaDadi();
  echo "Lancio numero: $i, risultato: $risultato <br>";
  // Se il risultato è uguale a 7, allora si vince
  if ($risultato === 7) {
    echo "Hai vinto, il numero fortunato è $risultato";
    break; // Esce dal ciclo for
  }
}

echo "<br><br>/* -------------------------------------------------------------------------- */<br><br>";

// Esegue il ciclo for per lanciare i dadi
// Se il risultato è uguale a 7, allora si continua con il prossimo lancio
for ($i = 1; $i <= $lanci; $i++) {
  $risultato = lanciaDadi();
  echo "Lancio numero: $i,risultato: $risultato <br>";
  if ($risultato === 7) {
    echo "Hai vinto, il numero fortunato è $risultato <br>";
    continue; // Viene eseguito il prossimo ciclo
  }
}

