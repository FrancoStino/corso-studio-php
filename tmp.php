<?php

/**
 * Classe User1:
 *
 * Rappresenta un utente con un id random e un nome.
 *
 * @property int $id             Id utente.
 * @property string $name         Nome utente.
 * @method void __construct(string $name) Costruttore della classe.
 */
class User1
{
  protected int $id;
  public string $name;

  /**
   * Costruttore della classe.
   *
   * @param string $name Nome utente.
   */
  public function __construct ( string $name ) {
    $this->id   = rand( 1, 10000 );
    $this->name = $name;
  }
}

// Creazione di due istanze della classe User1
$user1       = new User1( "Gianluca" );
$user2       = clone $user1;
$user2->name = "Marco";

// Visualizzazione dei dati delle istanze
echo "<pre>";
var_dump( $user1, $user2 );
echo "</pre>";

/* -------------------------------------------------------------------------- */
echo "<hr>";

/**
 * Classe User2:
 *
 * Rappresenta un utente con un id random e un nome.
 * Ha un metodo magic __clone() che viene invocato quando viene eseguito l'operatore clone().
 *
 * @property int $id             Id utente.
 * @property string $name         Nome utente.
 * @method void __construct(string $name) Costruttore della classe.
 * @method void __clone() Metodo magic invocato quando viene eseguito l'operatore clone().
 */
class User2
{
  protected int $id;
  public string $name;

  /**
   * Costruttore della classe.
   *
   * @param string $name Nome utente.
   */
  public function __construct ( string $name ) {
    $this->id   = rand( 1, 10000 );
    $this->name = $name;
  }

  /**
   * Metodo magic invocato quando viene eseguito l'operatore clone().
   * Modifica il nome dell'utente con "Copia di " seguito dal nome originale.
   */
  public function __clone () {
    $this->id   = rand( 1, 10000 );
    $this->name = "Copia di " . $this->name;
  }
}

// Creazione di due istanze della classe User2
$user3 = new User2( "Gianluca" );
$user4 = clone $user3;

// Visualizzazione dei dati delle istanze
echo "<pre>";
var_dump( $user3, $user4 );
echo "</pre>";

/* -------------------------------------------------------------------------- */
echo "<hr>";

/**
 * Classe User3:
 *
 * Rappresenta un utente con un id random, un nome e un oggetto Skills.
 * Ha un metodo magic __clone() che viene invocato quando viene eseguito l'operatore clone().
 *
 * @property int $id             Id utente.
 * @property string $name         Nome utente.
 * @property Skills $skillsInstance Oggetto Skills.
 * @method void __construct(string $name, array $competenze) Costruttore della classe.
 * @method void __clone() Metodo magic invocato quando viene eseguito l'operatore clone().
 */
class User3
{
  protected int $id;
  public string $name;
  public Skills $skillsInstance;

  /**
   * Costruttore della classe.
   *
   * @param string $name Nome utente.
   * @param array $competenze Lista di competenze.
   */
  public function __construct ( string $name, array $competenze ) {
    $this->id   = rand( 1, 10000 );
    $this->name = $name;

    $this->skillsInstance = new Skills( $competenze );
  }

  /**
   * Metodo magic invocato quando viene eseguito l'operatore clone().
   * Modifica il nome dell'utente con "Copia di " seguito dal nome originale.
   * Crea un nuovo oggetto Skills con una lista di competenze vuota.
   */
  public function __clone () {
    $this->id             = rand( 1, 10000 );
    $this->name           = "Copia di " . $this->name;
    $this->skillsInstance = new Skills( [] );

  }
}

/**
 * Classe Skills:
 *
 * Rappresenta una lista di competenze.
 *
 * @property array $competenze Lista di competenze.
 * @method void __construct(array $competenze) Costruttore della classe.
 */
class Skills
{
  public function __construct ( public array $competenze ) {}
}

// Creazione di due istanze della classe User3
$user5                         = new User3( "Gianluca", [ "HTML", "CSS", "PHP" ] );
$user6                         = clone $user5;
$user6->name                   = "Marco";
$user6->skillsInstance->competenze = [ "HTML", "CSS", "PHP", "JavaScript" ];

// Visualizzazione dei dati delle istanze
echo "<pre>";
var_dump( $user5, $user6 );
echo "</pre>";
