<?php

/**
 * Verifica se due stringhe sono anagrammi tra loro.
 *
 * @param string $a La prima stringa da confrontare.
 * @param string $b La seconda stringa da confrontare.
 * @return bool Restituisce true se le due stringhe sono anagrammi, false altrimenti.
 */
function isAnagram($a, $b)
{
  // Controlla se le stringhe hanno la stessa lunghezza
  if (strlen($a) !== strlen($b)) {
    return false;
  }

  // Controlla se ogni lettera della prima stringa compare uguale volte nella seconda stringa
  for ($i = 0; $i < strlen($a); $i++) {
    $lettera = $a[$i];
    if (substr_count($a, $lettera) !== substr_count($b, $lettera)) {
      return false;
    }
  }
  return true;
}

// Esempio di utilizzo
// var_dump(isAnagram('casa', 'acsaa')); // true

/**
 * Verifica se due stringhe sono anagrammi tra loro utilizzando un approccio diverso.
 *
 * @param string $a La prima stringa da confrontare.
 * @param string $b La seconda stringa da confrontare.
 * @return bool Restituisce true se le due stringhe sono anagrammi, false altrimenti.
 */
function isAnagram2($a, $b)
{
  // Controlla se le stringhe hanno la stessa lunghezza
  if (strlen($a) !== strlen($b)) {
    return false;
  }

  // Divide le stringhe in array di lettere
  $a = str_split($a);
  $b = str_split($b);

  // Ordina gli array di lettere
  sort($a);
  sort($b);

  // Verifica se gli array di lettere sono uguali
  return $a === $b;
}

// Esempio di utilizzo
// var_dump(isAnagram2('mannaggia', 'aiggnnaam')); // true
