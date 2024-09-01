<?php

/**
 * Esempio di gestione delle eccezioni in PHP.
 *
 * In questo esempio, viene lanciata un'eccezione di tipo OtherType2Exception.
 * La gestione dell'eccezione viene effettuata mediante un blocco try-catch.
 * All'interno del blocco catch, viene verificato se l'eccezione è di tipo
 * OtherTypeException o OtherType2Exception. In base al tipo di eccezione,
 * viene stampato un messaggio diverso.
 */

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

try
{
    throw new OtherType2Exception();
}
catch ( InputRangeException $e )
{
    echo "Eccezione di InputRangeException";
}
catch ( Exception $e )
{
    if ( $e instanceof OtherTypeException )
    {
        echo "Eccezione di OtherTypeException";
    }
    else
    {
        echo "Eccezione di OtherType2Exception";
    }
    // echo "Eccezione generica Exception";
}

