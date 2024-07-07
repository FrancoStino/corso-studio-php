<?php

/**
 * Esercizio di programmazione orientata agli oggetti.
 * Creazione di due oggetti della classe Corso.
 * Stampa dei dati dei due oggetti.
 */

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

  /**
   * Riepilogo del corso.
   *
   * @return string Riepilogo del corso.
   */
  public function riepilogo()
  {
    return "Titolo: " . $this->titolo . '<br>' .
           "Autore: " . $this->autore . '<br>' .
           "Categoria: " . $this->categoria . '<br>' .
           "Prezzo: " . $this->prezzo . '<br>';
  }

}

// Creazione di due oggetti della classe Corso.
$corsoPHP            = new Corso();
$corsoPHP->titolo    = 'Corso PHP';
$corsoPHP->autore    = 'Mario Rossi';
$corsoPHP->categoria = 'Backend';
$corsoPHP->prezzo    = 200;

$corsoJS            = new Corso();
$corsoJS->titolo    = 'Corso JS';
$corsoJS->autore    = 'Mario Culo';
$corsoJS->categoria = 'Frontend';
$corsoJS->prezzo    = 300;

// Stampa dei dati dei due oggetti.
echo $corsoPHP->riepilogo(). '<br>';
echo $corsoJS->riepilogo();
