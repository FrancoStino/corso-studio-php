<?php

/**
 * Questo script illustra la programmazione orientata agli oggetti in PHP.
 * Viene definita una classe Corso che rappresenta un corso di formazione.
 * Si creano tre oggetti della classe Corso, PHP, JS e Node.js.
 * Per ogni oggetto si sovrascrivono i valori delle proprietà pubbliche.
 * Infine vengono stampati a schermo i valori delle proprietà dei tre oggetti.
 */

class Corso
{
  /**
   * Titolo del corso.
   * @var string
   */
  public $titolo = 'Corso X';

  /**
   * Autore del corso.
   * @var string
   */
  public $autore = 'Mario Rossi';

  /**
   * Categoria del corso.
   * @var string
   */
  public $categoria = 'Senza categoria';

  /**
   * Prezzo del corso.
   * @var float
   */
  public $prezzo = 0;
}

// Creazione degli oggetti della classe Corso
$corsoPHP  = new Corso();
$corsoJS   = new Corso();
$corsoNode = new Corso();

// Sovrascrizione dei valori delle proprietà pubbliche
$corsoPHP->titolo    = 'Corso PHP <br>';
$corsoPHP->categoria = 'Backend <br>';
$corsoPHP->prezzo    = 10;

$corsoJS->titolo    = 'Corso JS <br>';
$corsoJS->categoria = 'Backend <br>';
$corsoJS->prezzo    = 20;

// Stampa a schermo dei valori delle proprietà dei tre oggetti
echo $corsoPHP->titolo . "Corso PHP Sovrascritto<br>";
echo $corsoPHP->titolo;

var_dump( $corsoPHP, $corsoJS );
