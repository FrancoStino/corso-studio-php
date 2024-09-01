<?php

/**
 * Eccezione lanciata quando il valore di un input si trova fuori dal range specificato.
 */
class InputRangeException extends Exception { }

/**
 * Eccezione di tipo generico OtherTypeException.
 */
class OtherTypeException extends Exception { }

/**
 * Eccezione di tipo OtherType2Exception.
 */
class OtherType2Exception extends Exception { }

/**
 * Classe che gestisce le eccezioni globali.
 * La classe implementa il metodo handle() che viene chiamato quando si verifica un'eccezione.
 * Il metodo handle() stampa un messaggio che indica che l'eccezione è stata gestita da questa classe.
 */
class GlobalExceptionHandler
{
    /**
     * Handle an exception.
     *
     * @param Exception $e The exception to handle.
     */
    public function handle( Exception $e )
    {
        echo "Eccezione gestita da " . __METHOD__ . "<br>";
    }
}

// Imposta la classe GlobalExceptionHandler come gestore delle eccezioni globali.
set_exception_handler( [ new GlobalExceptionHandler(), 'handle' ] );

try
{
    // Lancia un'eccezione di tipo OtherType2Exception.
    throw new OtherType2Exception();
}
catch ( InputRangeException $e )
{
    // Stampa un messaggio se l'eccezione è di tipo InputRangeException.
    echo "Eccezione di InputRangeException ";
}

// Stampa un messaggio se non ci sono state eccezioni.
echo 1;
