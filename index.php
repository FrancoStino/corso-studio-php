<?php

/**
 * In questo esempio vengono illustrate le differenze tra require e include.
 *
 * require e include sono entrambe funzioni PHP che permettono di includere
 * un file all'interno di un altro. La differenza principale tra le due
 * consiste nel fatto che require se il file non viene trovato genera un
 * errore e interrompe l'esecuzione del programma, mentre include solo genera
 * un avviso e continua l'esecuzione.
 *
 * In questo caso, se il file 'funzioni.php' non viene trovato, l'esecuzione
 * del programma viene interrotta con un errore. Se il file fosse incluso
 * invece mediante include, l'avviso generato sarebbe visibile nel log degli
 * errori ma l'esecuzione del programma continuerebbe.
 */

// require e include

require 'funzioni.php';


// Chiama la funzione test() definita in 'funzioni.php'
test();

// Chiama la funzione test2() definita in 'funzioni.php'
test2();



echo "Codice eseguito";
