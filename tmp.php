<?php
class A {
  public int $a = 1;
}
$obj = new class('Classe Anonima') extends A{
  public function __construct(public string $nome) {
    echo "Costruttore della $nome " . __CLASS__ . " invocato<br>";
  }
};
var_dump($obj);


class Corso {
public int $p1 = 10;
  public function riepilogo(){
    return new class(){
public function getP1(){
  
}
    };
  
}

}