<?php

/**
 * Questo script mostra un esempio di concatenazione di stringhe utilizzando l'operatore .=
 * La variabile $stringa inizia con il testo "Corso " e poi viene concatenato il testo "PHP <br>"
 * Infine viene stampato il risultato della concatenazione
 *
 * @var string $stringa la variabile che contiene il risultato della concatenazione
 */

$stringa = "Corso "; // inizializzo la variabile con il testo corrispondente
$stringa .= "PHP <br>"; // utilizzo l'operatore .= per concatenare il testo "PHP <br>" alla variabile $stringa
echo $stringa . "PHP <br> per principianti"; // stampo il risultato della concatenazione
