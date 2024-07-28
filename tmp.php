<?php

/**
 * Questo script mostra l'uso di una classe di utilità FileManager per la lettura di un file.
 * La classe Test mostra l'uso del distruttore in PHP.
 */

class Test
{
    /**
     * Costruttore della classe Test.
     * Questo distruttore viene chiamato quando l'oggetto viene eliminato dalla memoria.
     *
     * @return void
     */
    public function __destruct() {
        echo "Distruttore della classe ".__CLASS__." invocato<br>";
    }
}

// Creazione di un oggetto della classe Test
$test = new Test();
echo "Test creato<br>";

// Rilascio dell'oggetto dalla memoria
unset($test);
echo "Test distrutto<br>";

/* -------------------------------------------------------------------------- */
echo '<hr>';
/* -------------------------------------------------------------------------- */

/**
 * Questa classe rappresenta un gestore di file.
 */
class FileManager
{
    private $fh; // file handler
    private $filename;

    /**
     * Costruttore della classe FileManager.
     * Apre il file specificato in modalità specificata.
     *
     * @param string $filename Nome del file da aprire
     * @param string $mode Modalità di apertura del file
     */
    public function __construct($filename, $mode)
    {
        $this->filename = $filename;
        $this->fh = fopen($this->filename, $mode);
    }

    /**
     * Legge il contenuto del file e lo restituisce.
     *
     * @return void
     */
    public function read(){
        echo fread($this->fh, filesize($this->filename)) . "<br>";
    }

    /**
     * Distruttore della classe FileManager.
     * Chiude il file aperto e mostra un messaggio di distruzione.
     *
     * @return void
     */
    public function __destruct()
    {
        fclose($this->fh);
        echo "Distruttore della classe ".__CLASS__." invocato<br>";
    }
}

// Creazione di un oggetto della classe FileManager per il file "text.txt" in modalità lettura
$testfile = new FileManager("text.txt", "r");

// Lettura del contenuto del file
$testfile->read();
