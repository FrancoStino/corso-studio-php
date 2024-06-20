<?php


// Le costanti
define('APP_SUKA', 1);

// Oppure scrivere
const APP_VERSION = 1;

echo APP_VERSION;

/* -------------------------------------------------------------------------- */

$user = 'USER_STANDARD';

define('STATUS_'.$user, 999999);

echo STATUS_USER_STANDARD . "\n";