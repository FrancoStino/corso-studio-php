<?php

/**
 * Calcola il valore di un parametro.
 *
 * @param float $p1 Il parametro da calcolare.
 * @return bool true se il calcolo è andato a buon fine, false altrimenti.
 */
function calcolaValore( float $p1 ): bool
{
  // Il parametro $p1 viene convertito in float, quindi siamo sicuri che sia un numero.
  // In questo caso, il metodo restituisce sempre true.
  return true;
}

// Chiamo la funzione e stampiamo il risultato.
// In questo caso, il risultato è true, poiché il metodo restituisce sempre true.
var_dump( calcolaValore( "22" ) );
