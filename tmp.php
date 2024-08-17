<?php

/**
 * Esempio di utilizzo delle direttive di configurazione di PHP.
 *
 * L'istruzione `ini_set()` modifica il valore di una direttiva di configurazione
 * PHP durante l'esecuzione del codice.
 *
 * La direttiva `display_errors` determina se gli errori di PHP vengono visualizzati
 * o meno all'utente. Il valore `1` indica che gli errori devono essere visualizzati,
 * mentre `0` indica che gli errori non devono essere visualizzati.
 *
 * L'istruzione `error_reporting()` specifica il livello di segnalazione degli errori.
 * Con il parametro `E_ALL` si specificano tutti i livelli di errore, mentre `~E_WARNING`
 * esclude gli avvisi.
 *
 * L'istruzione `echo $a;` provocherà un errore di tipo "Notice: Undefined variable: a",
 * poiché la variabile `$a` non è stata definita.
 */
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_WARNING);
echo $a;
