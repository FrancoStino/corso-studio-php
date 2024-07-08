<?php

class Statistiche
{
  public function __construct (
    Corso $corso,
  ) {
    echo "<pre>";
    var_dump($corso);
    echo "</pre>";
  }
}