<?php

// FUNZIONE filter_var:
// sanifica delle variabili con filter_var

// Esempio di utilizzo: sanificare un numero di telefono
$tel = "+39 abc 333 444 555";
$telClean = filter_var($tel, FILTER_SANITIZE_NUMBER_INT);
echo "<p>Il numero di telefono originale è: <strong>$tel</strong><br>";
echo "Il numero di telefono sanificato è: <strong>$telClean</strong></p>";


// Esempio di utilizzo: sanificare una stringa da tag a apici
$str = "<script>alert('ciao')</script>";
$strClean = filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo "<p>La stringa originale è: <strong>$str</strong><br>";
echo "La stringa sanificata è: <strong>" . htmlspecialchars($strClean) . "</strong></p>";


// Esempio di utilizzo: sanificare aggiungendo uno slash prima degli apici
$query = "Insert into t1 (c1) values ('ciao');";
echo "<p>La query originale è: <strong>$query</strong><br>";
echo "La query sanificata è: <strong>" . addslashes($query) . "</strong><br>";
echo "La query sanificata è: <strong>" . filter_var($query, FILTER_SANITIZE_ADD_SLASHES) . "</strong></p>";
