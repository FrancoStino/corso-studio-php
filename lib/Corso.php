<?php

class Corso
{
  /**
   * @var string $titolo Títolo del corso.
   * @var string $autore Autore del corso.
   * @var string $categoria Categoria del corso.
   * @var int $prezzo Prezzo del corso.
   */
  public $titolo    = 'Corso X';
  public $autore    = 'Mario Rossi';
  public $categoria = 'Senza categoria';
  public $prezzo    = 0;

  public function __construct ( $titoloInInput, $autoreInInput, $categoriaInInput, $prezzoInInput )
  {
    $this->titolo    = $titoloInInput;
    $this->autore    = $autoreInInput;
    $this->categoria = $categoriaInInput;
    $this->prezzo    = $prezzoInInput;
  }

  /**
   * Riepilogo del corso.
   *
   * @return string Riepilogo del corso.
   */
  public function riepilogo ()
  {
    return "Titolo: " . $this->titolo . '<br>' .
      "Autore: " . $this->autore . '<br>' .
      "Categoria: " . $this->categoria . '<br>' .
      "Prezzo: " . $this->prezzo . '<br>';
  }

}