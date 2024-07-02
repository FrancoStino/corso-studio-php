<?php

// Redirect in base alla lingua

$linguaSito = ["it", "en"];
$preferenze = $_SERVER['HTTP_ACCEPT_LANGUAGE'];


$lingueDiPreferenza = explode(",", $preferenze);

foreach ($lingueDiPreferenza as $lingua) {
  $preferenza = substr($lingua, 0, 2);
  if (in_array($preferenza, $linguaSito)) {
    header("Location: /" . $preferenza);
    exit;
  }
}