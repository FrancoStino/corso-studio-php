<?php

/**
 * Classe A
 *
 * Classe che definisce un costruttore privato e un metodo di istanza statico per
 * la creazione di un'istanza della classe stessa o di una sua sottoclasse.
 */
class A
{
  /**
   * Costruttore privato
   *
   * Costruttore che viene invocato quando viene creato un'istanza della classe.
   * Poiché è privato, non può essere chiamato direttamente dall'esterno della classe.
   */
  private function __construct () {
    echo "Costruttore di A invocato<br>";
  }

  /**
   * Metodo di istanza statico getInstance
   *
   * Metodo statico che restituisce un'istanza della classe stessa o di una sua sottoclasse.
   * Utilizza la parola chiave "static" per accedere al costruttore della classe stessa.
   *
   * @return static L'istanza della classe stessa o di una sua sottoclasse.
   */
  public static function getInstance () {
    return new static();
  }
}

// Creazione di un'istanza della classe A
$a = A::getInstance();

/**
 * Classe B
 *
 * Sottoclasse di A che non definisce nessun metodo o proprietà aggiuntiva.
 */
class B extends A { }

// Creazione di un'istanza della sottoclasse B
$istance = B::getInstance();

// Stampa a video l'istanza della sottoclasse B utilizzando la funzione var_dump
var_dump( $istance );

