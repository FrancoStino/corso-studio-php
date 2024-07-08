<?php

/**
 * La classe Frontend estende la classe Corso.
 * Rappresenta un corso di formazione frontend.
 */
class Frontend extends Corso
{
  public $frontendConfig1;
  /**
   * Constructs a new Frontend instance.
   *
   * @param string $titolo The title of the course.
   */
  public function __construct ( $titolo, $prezzo, $conf1 = "" ) {
    parent::__construct( $titolo, categoria: "Frontend", prezzo: $prezzo );
    $this->frontendConfig1 = $conf1;
  }

  public function riepilogo () {
    $riepilogo = parent::riepilogo();
    return $riepilogo . "Configurazione: " . $this->frontendConfig1;
  }

  public function moduleBundlerConfig () {
    echo "metodo " . __METHOD__ . " invocato<br>";
  }
}