<?php

/**
 * La classe Frontend estende la classe Corso.
 * Rappresenta un corso di formazione frontend.
 */
class Frontend extends Corso
{
  public               $frontendConfig1;
  public static string $piattaforma     = "Piattaforma Y di Frontend";

  /**
   * Constructs a new Frontend instance.
   *
   * @param string $titolo The title of the course.
   */
  public function __construct ( $titolo, $prezzo, $conf1 = "" ) {
    parent::__construct( $titolo, categoria: "Frontend", prezzo: $prezzo );
    $this->frontendConfig1 = $conf1;
  }

  public function curriculum ( string $lezione ) {
    echo "Metodo " . __METHOD__ . " invocato di " . __CLASS__ . "<br>";
  }

  public function riepilogo () {
    $riepilogo = parent::riepilogo();
    return $riepilogo . "Configurazione: " . $this->frontendConfig1;
  }

  public function moduleBundlerConfig () {
    echo "metodo " . __METHOD__ . " invocato<br>";
  }
}