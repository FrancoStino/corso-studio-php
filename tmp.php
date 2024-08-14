<?php

/**
 * La classe CreaCorso rappresenta la creazione di un corso.
 * La creazione di un corso avviene in due step:
 * 1. step1: verifico se ci sono errori nella creazione del corso
 * 2. step2: verifico se ci sono errori nella creazione del corso
 * Se entrambi gli step vanno a buon fine, il corso viene creato correttamente.
 * Se uno degli step fallisce, il corso viene creato con errori.
 */
class CreaCorso
{
    /**
     * Esegue la creazione del corso.
     * La creazione del corso avviene in due step:
     * 1. step1: verifico se ci sono errori nella creazione del corso
     * 2. step2: verifico se ci sono errori nella creazione del corso
     * Se entrambi gli step vanno a buon fine, il corso viene creato correttamente.
     * Se uno degli step fallisce, il corso viene creato con errori.
     *
     * @return string Il messaggio di esito della creazione del corso.
     */
    public function crea() {
        if($this->step1() && $this->step2()) {
            return "Il Corso è stato creato correttamente";
        }
        return "Il Corso è stato creato con errori";
    }

    /**
     * Verifica se ci sono errori nella creazione del corso.
     * Questo metodo verifica se ci sono errori nella creazione del corso.
     *
     * @return bool True se non ci sono errori, false altrimenti.
     */
    public function step1() { return true; }

    /**
     * Verifica se ci sono errori nella creazione del corso.
     * Questo metodo verifica se ci sono errori nella creazione del corso.
     *
     * @return bool True se non ci sono errori, false altrimenti.
     */
    public function step2() { return true; }

}

/**
 * La classe Corso rappresenta un corso di formazione.
 * La classe Corso ha un metodo statico __callStatic che si occupa di creare un corso.
 * Il metodo __callStatic viene invocato quando si chiama un metodo statico della classe Corso.
 * Il metodo __callStatic verifica se il metodo chiamato è creaCorso e se sì, crea un nuovo oggetto CreaCorso e chiama il suo metodo crea.
 */
class Corso
{
    /**
     * Metodo statico che si occupa di creare un corso.
     * Il metodo __callStatic viene invocato quando si chiama un metodo statico della classe Corso.
     * Il metodo __callStatic verifica se il metodo chiamato è creaCorso e se sì, crea un nuovo oggetto CreaCorso e chiama il suo metodo crea.
     *
     * @param string $method Il nome del metodo statico chiamato.
     * @param array $args Gli argomenti del metodo statico chiamato.
     */
    public static function __callStatic($method, $args) {

        if($method === 'creaCorso') {
            $creaCorso = new CreaCorso();
            echo $creaCorso->crea();
        }
    }
}

Corso::creaCorso(); // Non esistente
