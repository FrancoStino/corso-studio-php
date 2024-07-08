<?php

class Corso {

  public function __construct (
    public string $titolo,
    public string $autore = "Gianluca",
    public string $categoria = "Senza Categoria",
    public int|float $prezzo = 0
  ) {}

  /**
   * Riepilogo del corso.
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