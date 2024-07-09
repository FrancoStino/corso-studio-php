<?php

trait Trait1{
  public function fn1(){
    echo "Metodo " . __METHOD__ . " invocato<br>";

  }
}

trait Trait2
{
  public function fn2 () {
    echo "Metodo " . __METHOD__ . " invocato<br>";

  }
}


class A
{
  use Trait1, Trait2;

  public function a () {
    echo "Metodo " . __METHOD__ . " invocato<br>";
  }
}

$a = new A();
$a->fn1();
$a->fn2();

