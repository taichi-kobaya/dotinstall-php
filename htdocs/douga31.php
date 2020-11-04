<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga31 PHP</title>
  </head>
  <body>
    <p>

      <?php

    $scores = [
      'first' => 90,
      'second' => 40,
      'third' => 100,
    ];

    // foreach ($scores as $value) {}
    // foreach ($scores as $score) {
    //   echo $score . PHP_EOL;
    }

    foreach ($scores as $key => $score) {
      echo $key . ' - ' . $score . PHP_EOL;
    }


      ?>
    </p>
  </body>
</html>