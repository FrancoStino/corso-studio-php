<?php

/**
 * Esempio di utilizzo delle istruzioni try, catch e finally
 * per gestire le eccezioni in PHP.
 */

try {
    /**
     * Il blocco try viene eseguito per prima cosa.
     * Se viene lanciata un'eccezione, il blocco catch verrà eseguito.
     * Se non viene lanciata alcuna eccezione, il blocco finally verrà eseguito.
     */
    echo "Apertura file<br>";
    // Lancia un'eccezione
    throw new Exception("Eccezione");
} catch (Exception $e) {
    /**
     * Il blocco catch viene eseguito solo se viene lanciata un'eccezione
     * nel blocco try.
     * La variabile $e contiene l'oggetto Exception che rappresenta l'eccezione.
     */
    echo "Eccezione: " . $e->getMessage() . "<br>";
}
finally {
    /**
     * Il blocco finally viene eseguito comunque, sia che venga lanciata
     * un'eccezione o meno.
     */
    echo "Chiusura file<br>";
}
