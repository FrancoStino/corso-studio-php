<?php

/**
 * This PHP script demonstrates the usage of the 'switch' statement.
 * It takes an error code as input and prints an appropriate error message.
 *
 * @param int $errorCode The error code to be processed.
 *
 * @return void
 */

$errorCode = 404;

switch ($errorCode) {
  case 404: 
    echo 'Page not found';
    break;
  case 500: 
    echo 'Internal server error';
    break;
  default: 
    echo 'Unknown error';
}

