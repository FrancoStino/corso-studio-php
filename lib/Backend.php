<?php

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
  public $backendConfig1;

  public function __construct ( $titolo, $prezzo = 0, $conf1 = "" ) {
    parent::__construct( $titolo, categoria: "Backend", prezzo: $prezzo );
    $this->backendConfig1 = $conf1;

    // echo "Costruttore della classe " . __CLASS__ . " invocato<br>";              
  }

  public function riepilogo () {
    $riepilogo = parent::riepilogo();
    return $riepilogo . "Configurazione: " . $this->backendConfig1;
  }

  public function serverConfig () {
    echo "metodo " . __METHOD__ . " invocato<br>";
  }
}
