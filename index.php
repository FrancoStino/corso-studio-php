<?php
// array_filter( array, callback )
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
    'nome'   => 'Iphone 15 Max',
    'prezzo' => 1299,
  ],
];

function filtraProdotti( $prodotto )
{
  return $prodotto[ 'prezzo' ] > 400 && $prodotto[ 'prezzo' ] < 1000;
}

$prodottiFiltrati = array_filter( $prodotti, 'filtraProdotti' );

var_dump( $prodottiFiltrati );