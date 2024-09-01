<?php

/**
 * Eccezione lanciata quando il valore di un input si trova fuori dal range specificato.
 */
class InputRangeException extends Exception
{
    /**
     * Valore minimo del range
     *
     * @var int
     */
    private int $min;

    /**
     * Valore massimo del range
     *
     * @var int
     */
    private int $max;

    /**
     * Costruttore dell'eccezione
     *
     * @param int $min Valore minimo del range
     * @param int $max Valore massimo del range
     */
    public function __construct( int $min = 0, int $max = 100 )
    {
        parent::__construct();
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Restituisce il messaggio di errore dell'eccezione
     *
     * @return string Messaggio di errore
     */
    public function getErrorMessage() : string
    {
        return <<<MSG
        {$this->getMessage()} <br>
        Il valore deve essere compreso tra {$this->min} e {$this->max}.
        MSG;
    }
}

try
{
    // Recupero valore del form
    $valore = 18;
    // Lancialo un'eccezione se il valore non è compreso tra 1 e 10
    throw new InputRangeException( 1, 10 );
}
catch ( InputRangeException $e )
{
    // Stampa il messaggio di errore dell'eccezione
    echo $e->getErrorMessage();
}

