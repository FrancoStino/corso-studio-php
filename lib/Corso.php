<?php

/**
 * La classe Corso rappresenta un corso di formazione.
 */
abstract class Corso
{
  public static string $piattaforma = "Piattaforma X";
  public const LIVELLO_BASE = 1;
  public const LIVELLO_PRO  = 2;

  public static function info () {
    self::$piattaforma = "Piattaforma sovrascritta";
  }

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
    public readonly int|float $prezzo = 0 // proprietà readonly: non può essere modificata dopo la creazione dell'oggetto
  ) {
    // echo "Costruttore della classe " . __CLASS__ . " invocato<br>";
  }

  /**
   * Restituisce il riepilogo del corso.
   *
   * @return string Riepilogo del corso.
   */
  protected function riepilogo () {
    return
      "Titolo: " . $this->titolo . '<br>' .
      "Autore: " . $this->autore . '<br>' .
      "Categoria: " . $this->categoria . '<br>' .
      "Prezzo: " . $this->prezzo . '<br>';
  }

  abstract public function curriculum ( string $lezione );

}
