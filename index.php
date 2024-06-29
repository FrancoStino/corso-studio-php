<?php

// if else


$isLoggedd = false;


?>


<!DOCTYPE html>
<html lang = "en">

  <head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <nav>
      <ul>
        <li><a href = "">Home</a></li>
        <li><a href = "">Suka</a></li>
        <?php
        if ($isLogged === true): ?>
          <li><a href = "">Ciaooooooo</a></li>

        <?php else: ?>
          <li><a href = "">Addio</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </body>

</html>

<?php

$anni = 18;

if ($anni <= 12) {
  echo "Ha meno di 12 anni";
} elseif ($anni >= 12 && $anni < 18) {
  echo "Ha tra i 12 e i 17 anni";
} else {
  echo "Ha 18 anni o più";
}
