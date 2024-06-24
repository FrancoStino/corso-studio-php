<?php

// // Array superglobale GET
// echo "Corso {$_GET['corso']} di realizzato da {$_GET['nome']}".PHP_EOL;


// // Con extract

// extract($_GET);

// echo "Corso $corso di realizzato da $nome" . PHP_EOL;

var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">

    <label for="corso">Corso</label>
    <input type="text" name="corso" id="corso">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <input type="submit" value="Invia">

  </form>
</body>
</html>