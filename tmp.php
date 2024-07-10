<?php

trait Trait1
{
  public $p1;
  abstract public function fn1 ($p1);
}

class A
{
  use Trait1;
  public function fn1 ($p1) {
    $this->p1 = $p1;
  }
}


$a = new A();

$a->fn1(10); 

echo $a->p1;
