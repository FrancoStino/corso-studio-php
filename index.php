<?php

// Introduzione agli array superglobali: 043 capitolo 

// $GLOBALS

$corso = 'PHP';

function stampaCorso()
{
  global $corso;

  echo $corso . '<br>';
  echo $GLOBALS['corso'];
}

stampaCorso();

// $_SERVER

echo $_SERVER['PHP_SELF'];

// $_GET

echo $_GET['nome'];

// $_POST

echo $_POST['nome'];

// $_FILES

echo $_FILES['nome'];

// $_REQUEST

echo $_REQUEST['nome'];

// $_SESSION

echo $_SESSION['nome'];

// $_COOKIE

echo $_COOKIE['nome'];