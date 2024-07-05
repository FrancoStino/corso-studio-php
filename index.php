<?php

/**
 * Esempio di utilizzo di callback e funzioni di ordine superiore in PHP.
 *
 * In questo esempio vengono illustrate due funzioni che accettano come argomenti
 * una variabile di tipo intero e una funzione di callback.
 * La prima funzione, `fn1`, esegue la funzione di callback passata come argomento.
 * La seconda funzione, `fn2`, esegue la funzione di callback e somma il risultato
 * ottenuto con la variabile di tipo intero passata come argomento.
 */

/**
 * Funzione che esegue la funzione di callback passata come argomento.
 *
 * @param int    $a     Variabile di tipo intero
 * @param callable $cb   Funzione di callback
 *
 * @return void
 */
function fn1( int $a, callable $cb )
{
  $cb();
}

/**
 * Funzione di esempio che viene passata come callback alla funzione `fn1`.
 *
 * @return void
 */
$anonima1 = function () {
  echo "Funzione \$anonima1 eseguita. \n";
};

/**
 * Altra funzione di esempio che viene passata come callback alla funzione `fn1`.
 *
 * @return void
 */
$anonima2 = function () {
  echo "Funzione \$anonima2 eseguita. \n";
};

// Eseguiamo la funzione `fn1` passando come argomenti la variabile `$a` e la funzione `$anonima1`.
fn1( 1, $anonima1 );
// Eseguiamo la funzione `fn1` passando come argomenti la variabile `$a` e la funzione `$anonima2`.
fn1( 2, $anonima2 );

/* -------------------------------------------------------------------------- */

/**
 * Funzione che esegue la funzione di callback passata come argomento e
 * somma il risultato ottenuto con la variabile di tipo intero passata come argomento.
 *
 * @param int    $a     Variabile di tipo intero
 * @param callable $cb   Funzione di callback
 *
 * @return void
 */
function fn2( int $a, callable $cb )
{
  echo "Somma: " . $a + $cb() . "\n";
}

/**
 * Funzione di esempio che restituisce il valore intero 4.
 *
 * @return int
 */
$anonima1 = function () {
  return 4;
};

/**
 * Funzione di esempio che restituisce il valore intero 5.
 *
 * @return int
 */
$anonima2 = function () {
  return 5;
};

// Eseguiamo la funzione `fn2` passando come argomenti la variabile `$a` e la funzione `$anonima1`.
fn2( 1, $anonima1 );
// Eseguiamo la funzione `fn2` passando come argomenti la variabile `$a` e la funzione `$anonima2`.
fn2( 2, $anonima2 );

/* -------------------------------------------------------------------------- */

/**
 * Funzione che esegue la funzione di callback passata come argomento e
 * restituisce il risultato ottenuto con l'array passato come argomento.
 *
 * @param array  $a     Array di valori
 * @param callable $cb   Funzione di callback
 *
 * @return mixed
 */
function fn3( array $a, callable $cb )
{
  return $cb( $a );
}

/**
 * Funzione di esempio che calcola la somma dei valori pari di un array.
 *
 * @param array  $valori Array di valori
 *
 * @return int
 */
function sommaPari( $valori )
{
  $totale = 0;
  for ( $i = 0; $i < count( $valori ); $i += 2 ) {
    $totale += $valori[ $i ];
  }
  return $totale;
}

/**
 * Funzione di esempio che calcola la somma dei valori dispari di un array.
 *
 * @param array  $valori Array di valori
 *
 * @return int
 */
function sommadispari( $valori )
{
  $totale = 0;
  for ( $i = 1; $i < count( $valori ); $i += 2 ) {
    $totale += $valori[ $i ];
  }
  return $totale;
}

// Eseguiamo la funzione `fn3` passando come argomenti l'array `$a` e la funzione `sommaPari`.
echo fn3( [ 1, 2, 3, 4, 5 ], 'sommaPari' ) . "\n";
// Eseguiamo la funzione `fn3` passando come argomenti l'array `$a` e la funzione `sommadispari`.
echo fn3( [ 1, 2, 3, 4, 5 ], 'sommadispari' ) . "\n";

/* -------------------------------------------------------------------------- */

/**
 * Funzione di confronto utilizzata per ordinare un array.
 *
 * @param mixed $a     Valore del primo elemento da confrontare
 * @param mixed $b     Valore del secondo elemento da confrontare
 *
 * @return int
 */
function cmp( $a, $b )
{
  if ( $a == $b ) {
    return 0;
  }
  return ( $a < $b ) ? -1 : 1;
}

// Creiamo un array di numeri interi non ordinati.
$a = array( 3, 2, 5, 6, 1, 3 );

// Ordiniamo l'array usando la funzione `usort` e la funzione `cmp`.
usort( $a, "cmp" );

// Stampiamo l'array ordinato.
foreach ( $a as $key => $value ) {
  echo "$key: $value\n";
}
