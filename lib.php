<?php

// Funzioni come livello di astrazione

function mostraSequenza( $start, $end, $salta )
{
  for ( $i = $start; $i <= $end; $i++ ) {
    if ( $i == $salta ) {
      continue;
    }

    echo $i . "\n";
  }
}
