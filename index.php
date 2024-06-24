<?php

/**
 * Verifica lo stato della sessione
 *
 * In questa pagina viene verificato lo stato della sessione utilizzando la funzione session_status().
 * La funzione session_status() restituisce PHP_SESSION_NONE se la sessione non è stata avviata,
 * PHP_SESSION_ACTIVE se la sessione è attiva.
 *
 * Per utilizzare sessioni in PHP, è necessario prima definire la posizione di salvataggio delle sessioni
 * utilizzando la funzione session_save_path(). In questo esempio viene utilizzato il percorso "/sessioni"
 * che deve essere creato all'interno della cartella del documento principale.
 *
 * Successivamente viene avviata la sessione utilizzando la funzione session_start().
 * La funzione session_start() restituisce un valore booleano, che può essere utilizzato per verificare
 * se la sessione è stata avviata con successo.
 *
 * Infine, viene utilizzata la funzione session_id() per visualizzare l'ID della sessione attualmente attiva.
 */

session_save_path($_SERVER['DOCUMENT_ROOT'] . '/sessioni');
session_start();
$statoSessione = session_status();

if ($statoSessione === PHP_SESSION_NONE) {
  echo "Sessione non attiva";
} else if ($statoSessione === PHP_SESSION_ACTIVE) {
  echo "Sessione attiva";
}

echo "<br>ID della sessione: " . session_id();
