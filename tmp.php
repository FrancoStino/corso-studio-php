<?php

/**
 * Classe FileManager
 * 
 * Gestisce la lettura e la scrittura di file
 */
class FileManager
{
    /**
     * Costruttore della classe FileManager
     * 
     * @param string $fileName Il nome del file da gestire
     */
    public function __construct(string $fileName) {
        /**
         * Verifica se il file esiste
         */
        try {
            if(!file_exists($fileName)) {
                /**
                 * Se il file non esiste, lancia un'eccezione
                 */
                throw new Exception(
                    message: "File not found",
                    code: 404
                );
            }
        } catch (Exception $e) {
            /**
             * Se l'eccezione viene catturata, stampa il messaggio di errore
             */
            echo "Eccezione catturata: " . $e->getMessage() . "<br>";
            echo "Codice errore: " . $e->getCode() . "<br>";
            echo "File: " . $e->getFile() . "<br>";
            echo "Riga errore: " . $e->getLine() . "<br>";
            echo "<pre>";
            /**
             * Stampa anche il contenuto dell'eccezione
             */
            var_dump($e);
            echo "</pre>";
        }

        /**
         * Stampa un messaggio per verificare se il costruttore viene eseguito
         */
        echo 2;
    }
}

/**
 * Creazione di un oggetto FileManager
 * 
 * Viene creato un oggetto FileManager con il nome del file "error_log.txt"
 */
$errorLogManager = new FileManager("error_log.txt");

/**
 * Stampa un messaggio per verificare se il codice viene eseguito
 */
echo 1;
