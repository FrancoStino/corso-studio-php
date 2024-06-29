<?php

/**
 * This is an example of using an if-else statement in PHP.
 * The variable $isLoggedd is set to false.
 * The code then generates an HTML page with a navigation bar.
 * The navigation bar contains links to "Home" and "Suka".
 * Depending on the value of $isLoggedd, the links "Ciaooooooo" or "Addio" are displayed.
 * The code then uses an if-elseif-else statement to determine the age category of a person.
 * If the person is less than 12 years old, the message "Ha meno di 12 anni" is displayed.
 * If the person is between 12 and 17 years old, the message "Ha tra i 12 e i 17 anni" is displayed.
 * If the person is 18 years old or older, the message "Ha 18 anni o più" is displayed.
 */

// if else

$isLoggedd = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Suka</a></li>
      <?php if ($isLogged === true): ?>
        <li><a href="">Ciaooooooo</a></li>
      <?php else: ?>
        <li><a href="">Addio</a></li>
      <?php endif; ?>
    </ul>
  </nav>

  <?php
  
  $anni = 18;

  if ($anni <= 12) {
    echo "Ha meno di 12 anni";
  } elseif ($anni >= 12 && $anni < 18) {
    echo "Ha tra i 12 e i 17 anni";
  } else {
    echo "Ha 18 anni o più";
  }
  ?>
</body>

</html>

