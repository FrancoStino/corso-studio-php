<?php
/**
 * Questo script PHP riceve i dati inviati da un form tramite metodo GET.
 * I dati sono memorizzati nell'array superglobale $_GET.
 * Per stampare i valori dell'array, è stata utilizzata la funzione var_dump().
 */

// Stampa l'array $_GET
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="corso">Corso: </label>
    <input type="text" name="corso" id="corso">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome">
    <input type="submit" value="Invia">
  </form>
</body>
</html>
