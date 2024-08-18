<?php

/**
 * Esempio di utilizzo delle funzioni di gestione degli errori
 * in PHP.
 *
 * La funzione set_error_handler() viene utilizzata per impostare
 * una funzione di gestione degli errori personalizzata.
 *
 * La funzione errorHandler() viene utilizzata come funzione di
 * gestione degli errori personalizzata.
 *
 * La classe ErrorHandler rappresenta un oggetto che implementa
 * la funzione di gestione degli errori.
 */

// Stampa il valore di $nonDefinita (che non esiste)
echo 1;
require 'as.php';
echo 2;

// Imposta la funzione di gestione degli errori personalizzata
// errorHandler() e la imposta per tutti i tipi di errore
set_error_handler('errorHandler', E_ALL);

// Funzione di gestione degli errori personalizzata
function errorHandler(int $errno, string $errstr, $errfile, $errline) {
    // Stampa l'errore
    $errore = "Numero errore $errno; \n<br> $errstr\n in $errfile:$errline\n";
    // Scrive l'errore nel file di log
    error_log($errore);
}

// Stampa il valore di $nonDefinita (che non esiste)
echo $nonDefinita;

// Imposta la funzione di gestione degli errori personalizzata
// errorHandler() e la imposta per tutti i tipi di errore
// utilizzando un oggetto della classe ErrorHandler
set_error_handler([new ErrorHandler, 'handler']);

// Classe che rappresenta un oggetto che implementa la funzione di
// gestione degli errori
class ErrorHandler
{
    /**
     * Funzione di gestione degli errori personalizzata
     *
     * @param int $errno Il tipo di errore
     * @param string $errstr La descrizione dell'errore
     * @param string $errfile Il file in cui si è verificato l'errore
     * @param int $errline La riga del file in cui si è verificato l'errore
     */
    public function handler(int $errno, string $errstr, $errfile, $errline) {
        // Stampa l'errore
        $errore = "Numero errore $errno; \n<br> $errstr\n in $errfile:$errline\n";
        // Scrive l'errore nel file di log
        error_log($errore);
    }
}

// Stampa il valore di $nonDefinita (che non esiste)
echo $nonDefinita;
require 'as.php';
