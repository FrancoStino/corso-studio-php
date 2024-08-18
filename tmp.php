<?php

/**
 * Classe FileManager
 * 
 * Gestisce la lettura e la scrittura di file
 * 
 * La classe FileManager ha un costruttore che accetta il nome del file da gestire
 * Il costruttore esegue il metodo checkFileExists() che verifica se il file esiste
 * Se il file non esiste, lancia un'eccezione
 * 
 * Il metodo checkFileExists() restituisce un booleano che indica se il file esiste o no
 */
class FileManager
{

    /**
     * Costruttore della classe FileManager
     * 
     * @param string $fileName Il nome del file da gestire
     */
    public function __construct(private string $fileName) {

        /**
         * Verifica se il file esiste
         * 
         * Se il file non esiste, lancia un'eccezione
         */
        try {
            $this->checkFileExists();
        } catch (Exception $e) {
            var_dump($e->getTrace());
            echo "Messaggio:" . $e->getMessage();
        }
    }

    /**
     * Verifica se il file esiste
     * 
     * @return bool true se il file esiste, false altrimenti
     * @throws Exception Se il file non esiste
     */
    private function checkFileExists(): bool {

        /**
         * Verifica se il file esiste
         */
        if(!file_exists($this->fileName)) {
            /**
             * Se il file non esiste, lancia un'eccezione
             */
            throw new Exception(message: "File non trovato");
        }

        /**
         * Se il file esiste, restituisce true
         */
        return true;

    }

}

/**
 * Creazione di un oggetto FileManager
 * 
 * Viene creato un oggetto FileManager con il nome del file "error_log.txt"
 */
$errorLogManager = new FileManager("error.log");
