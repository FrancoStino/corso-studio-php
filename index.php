<?php

/**
 * Funzione per aumentare i voti minori di 30 di un array.
 *
 * @param int $voto Il voto da processare.
 * @return int Il voto aumentato di 1 se minore di 30, altrimenti il voto originale.
 */
function aumentaVoto( int $voto ): int
{
  return $voto < 30 ? $voto + 1 : $voto;
}

// Array map

$voti = [ 
  24,
  30,
  29,
  10,
];

/**
 * Array contenente i voti aumentati di 1 se minori di 30.
 * @var array
 */
$votiAlterati = array_map( 'aumentaVoto', $voti );

// var_dump( $votiAlterati );

/* -------------------------------------------------------------------------- */

/**
 * Array contenente i prodotti con i prezzi scontati.
 * @var array
 */
$prodotti = [ 
  [ 
    'nome'   => 'Mouse Gaming',
    'prezzo' => 50,
  ],
  [ 
    'nome'   => 'Dell 27 pollici',
    'prezzo' => 380,
  ],
  [ 
    'nome'   => 'Dell 32 Pollici',
    'prezzo' => 450,
  ],
  [ 
    'nome'   => 'Iphone 15',
    'prezzo' => 899,
  ],
  [ 
    'nome'   => 'Iphone 15 Max0',
    'prezzo' => 1299,
  ],
];

/**
 * Funzione per applicare lo sconto del 5% al prezzo di un prodotto.
 *
 * @param array $prodotto Array con i dati del prodotto.
 * @return array Array con i dati del prodotto con il prezzo scontato.
 */
function applicaSconto( array $prodotto ): array
{
  $sconto         = $prodotto[ 'prezzo' ] * 5 / 100;
  $prezzoScontato = $prodotto[ 'prezzo' ] - $sconto;
  $prezzoScontato = number_format( $prezzoScontato, 2, ',', '.' );
  // Utilizzo la sintassi di array spread per creare un nuovo array che è una copia dell'array originale,
  // ma con l'aggiunta del nuovo campo 'prezzo' con il valore calcolato.
  return [ ...$prodotto, 'prezzo' => $prezzoScontato ];
}

/**
 * Array contenente i prodotti con i prezzi scontati.
 * @var array
 */
$prodottiScontati = array_map( 'applicaSconto', $prodotti );

// dump dei prodotti scontati
var_dump( $prodottiScontati );
