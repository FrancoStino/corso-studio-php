<?php

/**
 * Interfaccia UdemyCourse rappresenta un corso di formazione di tipo Udemy.
 * La classe Corso implementa l'interfaccia UdemyCourse.
 */
interface UdemyCourse
{
  /**
   * Restituisce il curriculum del corso.
   *
   * @return void
   */
  public function curriculum ();
}

/**
 * La classe Corso rappresenta un corso di formazione.
 * Estende la classe Corso.
 * Implementa l'interfaccia UdemyCourse.
 */
class Corso implements UdemyCourse
{
  /**
   * Restituisce il curriculum del corso.
   *
   * @return void
   */
  public function curriculum () {}
}

// Creazione di un oggetto della classe Corso.
$maestroPHP = new Corso();

// Verifica se l'oggetto $maestroPHP è istanza di una classe che implementa l'interfaccia UdemyCourse.
var_dump( $maestroPHP instanceof UdemyCourse );

// Stampa il nome della classe a cui appartiene l'oggetto $maestroPHP.
echo get_class( $maestroPHP );
// Oppure
// Stampa il nome della classe a cui appartiene l'oggetto $maestroPHP.
// Utilizza la proprietà statica class per ottenere il nome della classe.
echo $maestroPHP::class;
