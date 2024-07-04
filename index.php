<?php

// Controllare se una parola è l'anagramma di un'altra

// casa acsa

function isAnagram($a, $b)
{
  if (strlen($a) !== strlen($b)) {
    return false;
  }

  for ($i = 0; $i < strlen($a); $i++) {
    $lettera = $a[$i];
    if (substr_count($a, $lettera) !== substr_count($b, $lettera)) {
      return false;
    }
  }
  return true;
}

// var_dump(isAnagram('casa', 'acsaa'));


// Rifallo meglio

function isAnagram2($a, $b)
{
  if (strlen($a) !== strlen($b)) {
    return false;
  }

  $a = str_split($a);
  $b = str_split($b);

  sort($a);
  sort($b);

  return $a === $b;
}

var_dump(isAnagram2('mannaggia', 'aiggnnaam'));