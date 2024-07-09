<?php

/**
 * La classe Corso rappresenta un corso di formazione.
 */
class Corso implements UdemyCourse, GianlucaCourse
{
  public static string $piattaforma = "Piattaforma X";
  public const LIVELLO_BASE = 1;
  public const LIVELLO_PRO  = 2;

  public static function info () {
    self::$piattaforma = "Piattaforma sovrascritta";
  }


  public function __construct (
    public string $titolo,
    public string $autore = "Gianluca",
    public string $categoria = "Senza Categoria",
    public readonly int|float $prezzo = 0 // proprietà readonly: non può essere modificata dopo la creazione dell'oggetto
  ) {
    // echo "Costruttore della classe " . __CLASS__ . " invocato<br>";
  }

  public function curriculum ( array $lezioni ) {}

  public function requisiti () {}

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


}
