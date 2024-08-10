<?php

/**
 * Questa classe serve a dimostrare il funzionamento dei metodi magici __get e __set.
 * Questi metodi sono attivati quando si cerca di accedere o impostare una proprietà che non esiste 
 * direttamente nella classe.
 * 
 * La proprietà $a è pubblica e quindi può essere acceduta da qualsiasi parte del programma.
 * La proprietà $b è privata e quindi può essere acceduta solo all'interno della classe.
 */
class Test
{
    /**
     * Proprietà pubblica.
     * @var int
     */
    public $a = 1;

    /**
     * Proprietà privata.
     * @var int
     */
    private $b = 2;

    /**
     * Questo metodo viene attivato quando si cerca di leggere una proprietà che non esiste.
     * @param string $name Nome della proprietà cercata.
     * @return void
     */
    public function __get(string $name) {
        // Verifica se la proprietà esiste nell'oggetto.
        if(property_exists($this, $name)) {
            echo "La proprietà esiste e vale: ".$this->$name;
        }
        else {
            echo "La proprietà non esiste";
        }
    }

    /**
     * Questo metodo viene attivato quando si cerca di impostare una proprietà che non esiste.
     * @param string $name Nome della proprietà da impostare.
     * @param mixed $value Valore da assegnare alla proprietà.
     * @return void
     */
    public function __set(string $name, $value) {
        // Verifica se la proprietà esiste nell'oggetto.
        if(property_exists($this, $name)) {
            $this->$name = $value;
            echo "La proprietà esiste e vale: ".$this->$name;
        }
        else {
            echo "La proprietà non esiste";
        }
    }
}

$test = new Test;
$test->b; // La proprietà privata $b non può essere letta da un'altra classe.
echo "<hr>";
$test->b = 3; // La proprietà privata $b può essere modificata dall'interno della classe.

