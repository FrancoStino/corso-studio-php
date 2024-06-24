<?php

/**
 * In questo script vengono impostati dei cookie.
 *
 * Un cookie è un piccolo pezzo di dati che viene salvato sul
 * browser dell'utente e che viene invio nell'header della richiesta
 * HTTP quando l'utente accede ad una pagina web.
 *
 * In questo caso viene impostato un cookie chiamato "coloriPreferiti"
 * il cui valore è "Scuri". Il cookie verrà salvato sul browser dell'utente
 * per 30 secondi (il valore di $scadenzaCookie).
 */

// Calcola il timestamp di scadenza del cookie
$scadenzaCookie = time() + 30;

// Imposta il cookie
setcookie("coloriPreferiti", "Scuri", $scadenzaCookie);

// Visualizza i cookie salvati nel browser
var_dump($_COOKIE);

