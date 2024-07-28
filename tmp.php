<?php

/**
 * Esempio di classe anonima e utilizzo dell'estensione.
 *
 * Viene creato un nuovo oggetto della classe anonima che estende la classe A.
 * Vengono definiti i metodi del costruttore e viene creato un nuovo oggetto della classe anonima.
 * Viene chiamato il metodo getP1() sull'oggetto creato.
 */

// Classe A
class A
{
    public int $a = 1;
}

// Creazione di un nuovo oggetto della classe anonima che estende A
$obj = new class ('Classe Anonima') extends A
{
    /**
     * Costruttore della classe anonima.
     *
     * @param string $nome Nome della classe.
     */
    public function __construct(public string $nome) {
        echo "Costruttore della $nome ".__CLASS__." invocato<br>";
    }
};

// Visualizzazione dell'oggetto creato
var_dump($obj);


/**
 * Classe Corso che contiene un metodo riepilogo che restituisce un'istanza di una classe anonima.
 * La classe anonima contiene un metodo getP1() che restituisce il valore di p1 della classe Corso.
 */
class Corso
{
    /**
     * Variabile pubblica p1.
     *
     * @var int
     */
    public int $p1 = 10;

    /**
     * Metodo riepilogo che restituisce un'istanza di una classe anonima.
     *
     * @return object Istanza di una classe anonima.
     */
    public function riepilogo() {
        return new class ($this)
        {
            /**
             * Costruttore della classe anonima.
             *
             * @param Corso $corsoInstance Oggetto della classe Corso.
             */
            public function __construct(public Corso $corsoInstance) {}

            /**
             * Metodo getP1 che restituisce il valore di p1 della classe Corso.
             */
            public function getP1() {
                echo $this->corsoInstance->p1;
            }
        };
    }
}

// Creazione di un nuovo oggetto della classe Corso
$corsoPHP = new Corso();

// Creazione di un nuovo oggetto della classe anonima restituita dal metodo riepilogo della classe Corso
$obj = $corsoPHP->riepilogo();

// Chiamata del metodo getP1() sull'oggetto creato
$obj->getP1();
