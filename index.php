<?php
/**
 * Questo script riceve i dati da un form inserito tramite metodo POST
 * e li stampa sulla pagina.
 * I dati vengono prima filtrati con la funzione htmlspecialchars()
 * per prevenire attacchi di tipo XSS.
 */

// Array superglobale POST

if (isset($_POST['corso']) && isset($_POST['nome'])) {
  $corso = htmlspecialchars($_POST['corso']);
  $nome = htmlspecialchars($_POST['nome']);

  echo "Corso <strong>{$corso}</strong> di realizzato da <strong>{$nome}</strong>" . PHP_EOL;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Esempio di form PHP</title>
</head>
<body>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <label for="corso">Corso:</label>
    <input type="text" name="corso" id="corso">
    
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    
    <input type="submit" value="Invia">
  </form>
</body>
</html>
