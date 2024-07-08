<?php

/**
 * La classe Corso rappresenta un corso di formazione.
 */
class Corso
{

  /**
   * Costruttore della classe Corso.
   *
   * @param string $titolo Titolo del corso.
   * @param string $autore Autore del corso, default "Gianluca".
   * @param string $categoria Categoria del corso, default "Senza Categoria".
   * @param int|float $prezzo Prezzo del corso, default 0.
   */
  public function __construct (
    public string $titolo,
    public string $autore = "Gianluca",
    public string $categoria = "Senza Categoria",
    public int|float $prezzo = 0
  ) {
    // echo "Costruttore della classe " . __CLASS__ . " invocato<br>";
  }

  /**
   * Restituisce il riepilogo del corso.
   *
   * @return string Riepilogo del corso.
   */
  public function riepilogo () {
    return
      "Titolo: " . $this->titolo . '<br>' .
      "Autore: " . $this->autore . '<br>' .
      "Categoria: " . $this->categoria . '<br>' .
      "Prezzo: " . $this->prezzo . '<br>';
  }


}

/**
 * La classe Frontend estende la classe Corso.
 * Rappresenta un corso di formazione frontend.
 */
class Frontend extends Corso
{

  /**
   * Constructs a new Frontend instance.
   *
   * @param string $titolo The title of the course.
   */
  public function __construct ( $titolo, $prezzo ) {
    parent::__construct( $titolo, categoria: "Frontend", prezzo: $prezzo );
    // echo "Costruttore della classe " . __CLASS__ . " invocato<br>";
  }

  public function moduleBundlerConfig () {
    echo "metodo " . __METHOD__ . " invocato<br>";
  }
}

/**
 * La classe Backend estende la classe Corso.
 * Rappresenta un corso di formazione backend.
 */
class Backend extends Corso
{
  /**
   * Costruttore della classe Backend.
   * Stampa un messaggio di invocazione del costruttore.
   */
  public function __construct ($titolo, $prezzo) {
    parent::__construct( $titolo, categoria: "Backend", prezzo: $prezzo );

    // echo "Costruttore della classe " . __CLASS__ . " invocato<br>";
  }

  public function serverConfig () {
    echo "metodo " . __METHOD__ . " invocato<br>";
  }
}

