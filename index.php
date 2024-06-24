<?php

/**
 * In questo script vengono illustrati i operatori di incremento e decremento in PHP.
 *
 * L'operatore di incremento ++ incrementa il valore di una variabile di 1.
 * L'operatore di decremento -- decrementa il valore di una variabile di 1.
 *
 * Ecco un esempio di come funzionano:
 */

$a = 1;

// L'operatore di incremento si può usare sia all'inizio che alla fine della variabile.
// In questo caso, l'output sarà: 1 2 3 2
echo $a++; // Incrementa $a di 1 e restituisce il valore originale di $a.
echo $a; // Stampa il valore corrente di $a.
echo $a++; // Incrementa $a di 1 e restituisce il valore corrente di $a.
echo $a; // Stampa il valore corrente di $a.
echo ++$a; // Incrementa $a di 1 e restituisce il valore nuovo di $a.

$b = 1;

// L'operatore di decremento si può usare sia all'inizio che alla fine della variabile.
// In questo caso, l'output sarà: 1 0 -1
echo $b--; // Decrementa $b di 1 e restituisce il valore originale di $b.
echo $b; // Stampa il valore corrente di $b.
echo $b--; // Decrementa $b di 1 e restituisce il valore corrente di $b.
echo --$b; // Decrementa $b di 1 e restituisce il valore nuovo di $b.
