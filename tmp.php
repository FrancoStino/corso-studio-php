<?php

/**
 * Esempio di utilizzo del costruttore magico __clone()
 */

class User1
{
  /**
   * Identificativo univoco dell'oggetto
   *
   * @var int
   */
  protected int $id;

  /**
   * Nome dell'oggetto
   *
   * @var string
   */
  public string $name;

  /**
   * Costruttore della classe
   *
   * @param string $name Nome dell'oggetto
   */
  public function __construct ( string $name ) {
    $this->id   = rand( 1, 10000 );
    $this->name = $name;
  }
}

// Creazione di due oggetti della classe User1
$user1       = new User1( "Gianluca" );
$user2       = clone $user1;
$user2->name = "Marco";

// Stampa dei dati dei due oggetti
echo "<pre>";
var_dump( $user1, $user2 );
echo "</pre>";

/* -------------------------------------------------------------------------- */
echo "<hr>";

// Medoto magico __clone()
class User2
{
  /**
   * Identificativo univoco dell'oggetto
   *
   * @var int
   */
  protected int $id;

  /**
   * Nome dell'oggetto
   *
   * @var string
   */
  public string $name;

  /**
   * Costruttore della classe
   *
   * @param string $name Nome dell'oggetto
   */
  public function __construct ( string $name ) {
    $this->id   = rand( 1, 10000 );
    $this->name = $name;
  }

  /**
   * Metodo magico __clone()
   *
   * Viene chiamato automaticamente quando si crea una copia dell'oggetto
   */
  public function __clone () {
    $this->id   = rand( 1, 10000 );
    $this->name = "Copia di " . $this->name;
  }
}

// Creazione di due oggetti della classe User2
$user3 = new User2( "Gianluca" );
$user4 = clone $user3;

// Stampa dei dati dei due oggetti
echo "<pre>";
var_dump( $user3, $user4 );
echo "</pre>";

/* -------------------------------------------------------------------------- */
echo "<hr>";


class User3
{
  /**
   * Identificativo univoco dell'oggetto
   *
   * @var int
   */
  protected int $id;

  /**
   * Nome dell'oggetto
   *
   * @var string
   */
  public string $name;

  /**
   * Oggetto Skills associato all'oggetto
   *
   * @var Skills
   */
  public Skills $skillsInstance;

  /**
   * Costruttore della classe
   *
   * @param string $name Nome dell'oggetto
   * @param array $competenze Competenze da associare all'oggetto
   */
  public function __construct ( string $name, array $competenze ) {
    $this->id   = rand( 1, 10000 );
    $this->name = $name;

    $this->skillsInstance = new Skills( $competenze );
  }

  /**
   * Metodo magico __clone()
   *
   * Viene chiamato automaticamente quando si crea una copia dell'oggetto
   */
  public function __clone () {
    $this->id             = rand( 1, 10000 );
    $this->name           = "Copia di " . $this->name;
    $this->skillsInstance = new Skills( [] );

  }
}

class Skills
{
  /**
   * Competenze associate all'oggetto
   *
   * @var array
   */
  public function __construct ( public array $competenze ) {}
}

// Creazione di due oggetti della classe User3
$user5               = new User3( "Gianluca", [ "HTML", "CSS", "PHP" ] );
$user1Serializzato   = serialize( $user5 );
$user1Deserializzato = unserialize( $user1Serializzato );
echo "<pre>";
var_dump( $user1Serializzato, $user1Deserializzato, $user5 );
echo "</pre>";
exit;
$user6                             = clone $user5;
$user6->name                       = "Marco";
$user6->skillsInstance->competenze = [ "HTML", "CSS", "PHP", "JavaScript" ];
echo "<pre>";
var_dump( $user5, $user6 );
echo "</pre>";
