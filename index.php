<?php

/**
 * In questo esempio viene mostrato come utilizzare i cookie per gestire le sessioni.
 * 
 * La funzione session_start() viene utilizzata per avviare una sessione.
 * 
 * Successivamente viene impostato il valore della variabile di sessione 'nome' su 'Mario'.
 * 
 * Infine viene stampato l'ID della sessione corrente utilizzando la funzione session_id().
 */

session_start();

$_SESSION['nome'] = 'Mario';

echo "ID della sessione corrente: " . session_id();

