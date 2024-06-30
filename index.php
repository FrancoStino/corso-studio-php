<?php

// Generazione password sicura di 16 caratteri

$caratteri = [
  'abcdefghilmnopqrstuvz',
  'ABCDEFGHILMNOPQRSTUVZ',
  '1234567890',
  '!@#$%^&*()_+',
];

$password = '';

for ($i = 0; $i < 16; $i++) {
  $selezione = rand(0, 3);
  $last = strlen($caratteri[$selezione]) - 1;
  $password .= $caratteri[$selezione][rand(0, $last)];
  $suka = true;
}

echo $password;

