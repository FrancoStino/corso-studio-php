<?php

/**
 * Esempio di utilizzo dell'operatore null coalescing (??).
 *
 * L'operatore null coalescing (??), introdotto in PHP 7, permette di fornire un valore
 * di default in caso di un valore null o inesistente.
 *
 * La sintassi è la seguente:
 *
 * $var = $valore ?? $valoreDefault;
 *
 * Ad esempio, nel seguente codice viene letta la variabile $_GET['page'] e, se esiste e
 * non è null, viene assegnata a $page. In caso contrario, viene assegnato il valore
 * di default 1.
 *
 * @link http://php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op
 */

// https://localhost/corsi/php/index.php?page=2

$page = $_GET['page'] ?? 1;

echo $page;
