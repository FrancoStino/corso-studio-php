<?php

class A
{
  public $p1 = "p1";

  public function fna () {

    echo __METHOD__ . "<br>";
  }
}

class B extends A
{

  public function fnb () {
    echo parent::$p1;
    parent::fna();
  }
}
// Esegui fna

(new B)->fnb();