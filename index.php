<?php

/**
 * Array multidimensionale che rappresenta la lista degli iscritti al corso PHP.
 * Ciascun elemento dell'array è un array associativo che contiene le informazioni
 * relative a un singolo iscritto, con le chiavi 'id', 'nome' e 'lavoro'.
 *
 * @var array
 */
$iscritti = [
  ["id" => 10, "nome" => "Gianluca", "lavoro" => "Programmatore"],
  ["id" => 11, "nome" => "Marco", "lavoro" => "Cuoco"],
  ["id" => 12, "nome" => "Luca", "lavoro" => "Designer"],
  ["id" => 13, "nome" => "Giulla", "lavoro" => "Gestore"],
  ["id" => 14, "nome" => "Giorgio", "lavoro" => "Assistente"]
];

/**
 * Array unidimensionale che rappresenta la lista dei nomi degli iscritti,
 * con le chiavi corrispondenti all'id degli iscritti.
 *
 * @var array
 */
$nomiIscritti = array_column($iscritti, "nome", "id");

/**
 * Stampa la lista degli iscritti.
 *
 * @return void
 */
echo "Gli iscritti sono: " . implode(", ", $nomiIscritti);

