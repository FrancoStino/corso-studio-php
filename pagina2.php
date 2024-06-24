<?php
/**
 * Stampa il colore preferito salvato nella sessione.
 * 
 * Viene utilizzata la funzione session_start() per iniziare una nuova o riprendere una precedente sessione.
 * Successivamente, viene stampato il messaggio "Il tuo colore preferito è: " seguito dal valore associato alla chiave 'preferenzaColori'
 * nella superglobale $_SESSION.
 */
session_start();
echo "Il tuo colore preferito è: " . $_SESSION['preferenzaColori'];
?>

<!DOCTYPE html>
<html lang="it">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <a href="index.php">Link a index</a>
    
  </body>

</html>
