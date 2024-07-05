<?php

/**
 * In questo script vengono utilizzate le funzionalità di tipo di hinting introdotte in PHP 7.
 *
 * Il tipo di hinting è una funzionalità di PHP che permette di specificare il tipo di dati che si
 * aspetta che una funzione o una variabile abbia.
 *
 * Ad esempio, se una funzione è definita come segue:
 *
 * function calcolaValore(float $p1) {
 *   var_dump($p1);
 * }
 *
 * allora si aspetta che $p1 sia un valore numerico. Se invece viene passato un valore di tipo
 * diverso, ad esempio una stringa, allora si otterrà un errore.
 *
 * In questo script viene utilizzato il tipo di hinting per definire la funzione calcolaValore.
 * La funzione prevede un parametro di tipo float.
 *
 * Successivamente, viene chiamata la funzione calcolaValore e viene passato come parametro la
 * stringa "22". Questo dovrebbe causare un errore, ma in realtà PHP tenta di convertire automaticamente
 * la stringa in un valore numerico.
 *
 * La dichiarazione di strict_types=1 permette di disabilitare questa conversione automatica.
 *
 * Infatti, se strict_types è impostato a 1, allora se viene passato un valore di tipo diverso da
 * quello previsto, si otterrà un errore.
 */

declare(strict_types=1);

function calcolaValore(float $p1)
{
  var_dump($p1);
}

calcolaValore("22");
