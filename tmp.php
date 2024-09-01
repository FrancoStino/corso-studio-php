<?php

/*
 * Esempio di gestione delle eccezioni.
 *
 * L'eccezione viene lanciata con l'istruzione "throw" e viene catturata con
 * l'istruzione "catch".
 *
 * La classe Throwable rappresenta l'oggetto base per tutte le eccezioni.
 * La classe Exception rappresenta un'eccezione generica.
 * La classe DivisionByZeroError rappresenta un'eccezione specifica per divisione per zero.
 */

// Esempio di gestione di un'eccezione generica
try
{
    // Lancia un'eccezione
    throw new Exception( "Eccezione..." );

}
catch ( Throwable $e )
{
    // Cattura l'eccezione e stampa un messaggio
    echo "Problema gestito: " . $e->getMessage() . "<br>";
}

/* -------------------------------------------------------------------------- */

// Esempio di gestione di un'eccezione specifica
try
{
    // Lancia un'eccezione specifica
    $risultato = 2 / 0;
}
catch ( Throwable $e )
{
    // Cattura l'eccezione e stampa un messaggio
    echo "Problema gestito: " . $e->getMessage() . "<br>";
}

/* -------------------------------------------------------------------------- */
try
{
    // Lancia un'eccezione specifica
    $risultato = 2 / 0;
}
catch ( DivisionByZeroError $e )
{
    // Cattura l'eccezione e stampa un messaggio
    echo "Problema gestito: " . $e->getMessage();
}

