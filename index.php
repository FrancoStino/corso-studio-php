<?php

// Validare le seguenti variabili con filter_var

// Validazione numero
$numero = "15";
$test = filter_var($numero, FILTER_VALIDATE_INT, [
  "options" => ["min_range" => 1, "max_range" => 10]
]);
var_dump($test);

// Validazione email

$email = "suka@gmail@gmail.com";
$email = "suka@gmail.com";

$test = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($test);