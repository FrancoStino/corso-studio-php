<?php
/**
 * Avvia una nuova o riprende una sessione esistente e salva i dati inseriti dall'utente.
 * 
 * Utilizza la funzione session_start() per avviare una nuova o riprendere una precedente sessione.
 * Successivamente, viene verificato se è stato invocato un POST tramite la superglobale $_POST.
 * Se è vero, viene salvato il valore inserito nell'input del form con la chiave 'colori' nella sessione con la chiave 'preferenzaColori'.
 * Inoltre, viene salvata la data corrente con la chiave 'data' nella sessione.
 */
session_start();
echo 'ID: ' . session_id()."<br>"; // stampa l'id della sessione
echo 'Save Path: ' .session_save_path(). "<br>"; // stampa il percorso di salvataggio della sessione

if(isset($_POST['colori'])) {
  $_SESSION['preferenzaColori'] = $_POST['colori']; // salva il valore inserito nell'input del form nella sessione
  $_SESSION['data'] = date("d/m/Y"); // salva la data corrente nella sessione
}
?>

<!DOCTYPE html>
<html lang="it">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <a href="pagina2.php">Link a pagina 2</a>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="text" class="text"
        name="colori" placeholder="Inserisci il tuo colore preferito">
      <input type="submit" value="Invia" name="submit">
    </form>
  </body>

</html>
